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
    </style>
</head>
<body>

<div class="root">
    <h1 class="mb-4">書籍一覧</h1>

    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>書籍名</th>
                <th>著者名</th>
                <th>出版日</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->published_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>