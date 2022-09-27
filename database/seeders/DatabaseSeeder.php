<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;
use Database\Factories\PostFactory;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call( [PostSeeder::class]);

        // $this->call([ PostFactory::class]);
    }
}
