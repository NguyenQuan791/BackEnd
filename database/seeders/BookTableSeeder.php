<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models as Database;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('book')->truncate();

        $books = [
            ["Let's Make a Salad Bown!",'Hilary Tran','Nathan Pham','Lg4oU6Aq4DxsWdwLByyCax1672904703767_trong.png'],
            ['Learn English So Not Fun','Quan Nguyen ANh','Quan Nguyen','m7ONzmMXmQkaJ8mj3jrSdI1672904703799_trong.png'],
            ['Alphabet','Hello Al','Hello Al','sK2dF8gy6Ou6nAWXbfmQgL1672904703791_trong.png'],
            ['Code So Fun','Test Case','Case Test','ZWSAJtLuPueiEa9JpFPyqy1672904703749_trong.png'],
            ['Ảo ma Canada','Anh Yeu','Yeu Anh','...']
        ];

        foreach ($books as $book) {
            Database\Book::create([
                'bookName' => $book[0],
                'writer' => $book[1],
                'illstrator' => $book[2],
                'bookCover' => $book[3]
            ]);
        }

        Schema::enableForeignKeyConstraints();
    }
}
