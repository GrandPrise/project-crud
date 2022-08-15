<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book=new \App\Models\Book([
            'title'=>'Book #1',
            'author'=>'#1 Author',
            'pub_year'=>'#1 Year of Publication',
            'plot'=>'#1 Plot'
        ]);
        $book->save();
        
        $book=new \App\Models\Book([
            'title'=>'Book #2',
            'author'=>'#2 Author',
            'pub_year'=>'#2 Year of Publication',
            'plot'=>'#2 Plot'
        ]);
        $book->save();

        $book=new \App\Models\Book([
            'title'=>'Book #3',
            'author'=>'#3 Author',
            'pub_year'=>'#3 Year of Publication',
            'plot'=>'#3 Plot'
        ]);
        $book->save();
    }
}
