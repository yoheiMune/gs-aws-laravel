<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = \App\Photo::orderBy('id')->get();
        return view('photo/list', compact('photos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file',
            'comment' => 'required|string|max:128'
        ]);

        // 画像ファイルをS3にアップロード.
        $file = $request->file('file');
        $path = Storage::disk('s3')->putFile('', $file, 'public');

        // DB保存.
        $photo = new Photo();
        $photo->path = $path;
        $photo->comment = $request->input('comment');
        $photo->save();

        return redirect()->back()->with([ 'message' => '写真を追加しました！' ]);
    }

}
