<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 本.
    	\App\Book::truncate();
	    \App\Book::insert([
    		'name' => "プログラミングスクールにきたら読もう（過ごし方編）",
		    'author' => 'スバル静香',
		    'published_at' => '2020-01-03'
	    ]);
	    \App\Book::insert([
    		'name' => "JavaScriptを制覇しよう",
		    'author' => '本間圭介',
		    'published_at' => '2018-11-23'
	    ]);
	    \App\Book::insert([
    		'name' => "PHP再入門（絶対に迷わない）",
		    'author' => '里田俊介',
		    'published_at' => '2019-07-10'
	    ]);

        // 写真.
        \App\Photo::truncate();
        \App\Photo::insert([
            'path' => '1.jpg',
            'comment' => '険しい山々'
        ]);
        \App\Photo::insert([
            'path' => '2.jpg',
            'comment' => '壮大な海'
        ]);
        \App\Photo::insert([
            'path' => '3.jpg',
            'comment' => 'ハリネズミは可愛い'
        ]);

    }
}
