<?php

namespace App\Http\Controllers;

use App\Book;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HealthCheckController extends Controller
{
    public function check()
    {
        // DBアクセス確認.
        Book::find(1);

        return 'OK';
    }
}
