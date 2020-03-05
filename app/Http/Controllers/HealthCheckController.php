<?php

namespace App\Http\Controllers;

use App\Book;

class HealthCheckController extends Controller
{
    public function check()
    {
        // DBアクセス確認.
        Book::find(1);

        return 'OK';
    }
}
