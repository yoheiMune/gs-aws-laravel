<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>G's Aws × Laravel 講座</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .root {
            max-width: 800px;
            margin: 30px auto;
        }
        .photo {
            flex: 0 0 33%;
            text-align: center;
        }
        .photo img {
            display: inline-block;
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin-bottom: 0.5em;
        }
    </style>
</head>
<body>

<div class="root">
    <h1 class="mb-4">写真一覧</h1>

    @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{ Session::get('message') }}
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- 写真を投稿 --}}
    <form action="{{ route('photo.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row form-group mt-5">
            <div class="col-5">
                <input type="file" name="file">
            </div>
            <div class="col-5">
                <input type="text" name="comment" class="form-control">
            </div>
            <div class="col-2">
                <input type="submit" value="登録する" class="btn btn-success">
            </div>
        </div>
    </form>

    <hr>

    {{-- 写真一覧を表示 --}}
    <div class="d-flex photo-box flex-wrap mt-5">
        @foreach ($photos as $photo)
            <div class="photo">
                <img src="{{ $photo->absolute_path }}" class="photo">
                <p>{{ $photo->comment }}</p>
            </div>
        @endforeach
    </div>

</div>

</body>
</html>
