<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(BookTableSeeder::class);
        $this->call(ContentTableSeeder::class);
        $this->call(PageTableSeeder::class);
        $this->call(SoundTableSeeder::class);
    }
}
