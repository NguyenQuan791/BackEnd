<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models as Database;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('pagecontent')->truncate();

        $content = [
           [1, 1, null, null, "Hey, do you want to eat some salads?", 0, 0, 0, 0],
           [1, 30, null, null, "salad bowl", 0, 0, 0, 0],
           [1, 16, null, null, "fork", 0, 0, 0, 0],
           [1, 34, null, null, "spoon", 0, 0, 0, 0],
           [1, 5, null, null, "boy", 0, 0, 0, 0]
        ];

        foreach ($content as $content) {
            Database\Content::create([
                'pageId' => $content[0],
                'soundId' => $content[1],
                'imageId' => $content[2],
                'animationId' => $content[3],
                'textContent' => $content[4],
                'locationX' => $content[5],
                'locationX' => $content[6],
                'width' => $content[7],
                'height' => $content[8],
            ]);
        }

        Schema::enableForeignKeyConstraints();
    }
}
