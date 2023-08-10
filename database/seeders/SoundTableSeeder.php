<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models as Database;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class SoundTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('sound')->truncate();

        $sounds = [
            ["Hey, do you want to eat some salads_","Hey, do you want to eat some salads_.mp3"],
             ["apple","apple.mp3"],
             ["boiling water","boiling water.mp3"],
             ["bowl","bowl.mp3"],
             ["boy","boy.mp3"],
             ["carrot","carrot.mp3"],
             ["cheese grater","cheese grater.mp3"],
             ["cheese","cheese.mp3"],
             ["chopping board","chopping board.mp3"],
             ["cooking pot","cooking pot.mp3"],
             ["cucumber","cucumber.mp3"],
             ["Don_t forget to add some cheese!","Don_t forget to add some cheese!.mp3"],
             ["dressing","dressing.mp3"],
             ["egg","egg.mp3"],
             ["Finally, I will add the dressing","Finally, I will add the dressing..mp3"],
             ["fork","fork.mp3"],
             ["frying pan","frying pan.mp3"],
             ["gas stove","gas stove.mp3"],
             ["I will boil the eggs and fry the pork","I will boil the eggs and fry the pork.mp3"],
             ["I will shred some lettuce","I will shred some lettuce.mp3"],
             ["It_s fun to make something together. Now let_s enjoy!","It_s fun to make something together. Now let_s enjoy!.mp3"],
             ["knife","knife.mp3"],
             ["Let_s make a salad bowl","Let_s make a salad bowl.mp3"],
             ["Let\u2019s Make a Salad Bowl!","Let\u2019s Make a Salad Bowl!.mp3"],
             ["lettuce","lettuce.mp3"],
             ["Now we need to mix them together","Now we need to mix them together.mp3"],
             ["Of course we need some fruits and vegetables","Of course we need some fruits and vegetables..mp3"],
             ["pineapple","pineapple.mp3"],
             ["pork","pork.mp3"],
             ["salad bowl","salad bowl.mp3"],
             ["sink","sink.mp3"],
             ["Sounds great","Sounds great.mp3"],
             ["spatula","spatula.mp3"],
             ["spoon","spoon.mp3"],
             ["tap","tap.mp3"],
             ["The salad bowl looks so delicious!","The salad bowl looks so delicious!.mp3"]
        ];

        foreach ($sounds as $sound) 
        {
            Database\Sound::create([
                'soundName' => $sound[0],
                'sound' => $sound[1]
            ]);
        }

        Schema::enableForeignKeyConstraints();
    }
}
