<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models as Database;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('bookpage')->truncate();

        $pages = [
            [1,1,"Lg4oU6Aq4DxsWdwLByyCax1672904703767_trong.png"],
            [1,2,"uQx8vLnhByvU8BGfJnpxur1672904703648_trong.png"],
            [1,3,"j2FtITkWXWvEA2eeiolqNH1672904703836_trong.png"],
            [1,4,"sK2dF8gy6Ou6nAWXbfmQgL1672904703791_trong.png"],
            [2,1,"..."],
            [2,2,"..."],
            [3,3,"..."],
            [1,5,"vcxJRLt9ebNd5KPtHWw1Gl1672904703709_trong.png"],
            [1,6,"mTslr1cBESgjHOKfuCbXVL1672904703734_trong.png"],
            [1,7,"m7ONzmMXmQkaJ8mj3jrSdI1672904703799_trong.png"],
            [1,8,"ZWSAJtLuPueiEa9JpFPyqy1672904703749_trong.png"],
            [1,9,"tyBrNbK7J3RQNyp5iFyOgk1672904703758_trong.png"],
            [1,10,"ONwVWDqBvuLzO9JRN2rmTH1672904703776_trong.png"]
        ];

        foreach ($pages as $page) {
            Database\Page::create([
                'bookId' => $page[0],
                'pageNumber' => $page[1],
                'backgroud' => $page[2]
            ]);
        }

        Schema::enableForeignKeyConstraints();
    }
}
