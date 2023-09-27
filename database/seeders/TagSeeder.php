<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Tag;

use Illuminate\Support\Facades\Schema;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function(){

            Tag::truncate();

        });

        $tags= [
            'Horror' ,
            'Comedy' ,
            'Thriller',
        ];


        foreach($tags as $title){
            $slug = str()->slug($title);

            Tag::create([
                'title' => $title,
                'slug' => $slug,
            ]);
        }
    }
}
