<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

        public function run(): void
        {
            $comics = config('comics');
            
            foreach($comics as $comicElement){
                $comic = new Comic();
                $comic->title = $comicElement['title'];
                $comic->description = $comicElement['description'];
                $comic->thumb = $comicElement['thumb'];
                $comic->price = $comicElement['price'];
                $comic->series = $comicElement['series'];
                $comic->sale_date = $comicElement['sale_date'];
                $comic->type = $comicElement['type'];
                $comic->artists = json_encode($comicElement['artists']);
                $comic->writers = json_encode($comicElement['writers']);
                $comic->save();
            }
        }

}
