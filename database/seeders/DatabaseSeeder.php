<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Mario',
            'email' => 'mario@email.com',
            'password' => bcrypt('password')
        ]);

        $categories = ['cronaca', 'sport', 'economia', 'attualità', 'natura', 'cultura', 'politica'];

        foreach($categories as $name) {
            Category::create([
                'name' => $name
            ]);
        }

        $tags = ['esteri', 'interni', 'calcio', 'tennis', 'montagna', 'climatechange', 'musica', 'animali'];

        foreach($tags as $name){
            Tag::create([
                'name' => $name
            ]);
        }

    }
}
