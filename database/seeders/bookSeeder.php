<?php

namespace Database\Seeders;
use App\Models\book;
use Illuminate\Database\Seeder;
use function GuzzleHttp\Psr7\str;

class bookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        book::insert([

            "title" => "Harry Potter and goblet of the fire",
            "author" => "J.K. Rowling",
            "pages" =>453,
            "language"=> "Eng",
        ]);
    }
}
