<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        
        foreach ($comics as $comic_item) {
            $comic = new Comic();
            $comic->title = $comic_item['title'];
            $comic->description = $comic_item['description'];
            $comic->thumb = $comic_item['thumb'];
            $comic->price = $comic_item['price'];
            $comic->series = $comic_item['series'];
            $comic->sale_date = $comic_item['sale_date'];
            $comic->type = $comic_item['type'];
            $comic->save();
            

            // ALTRO METODO:
            // $comic = new Comic();
            // $comic->fill($comic_item);
            // $comic->save();
            // Condizioni: 
            // 1) i campi devono coincidere
            // 2) in Models/Comic.php devo inserire sotto use HasFactory:
                // protected $fillable = [array con tutti gli elementi ''];
        }
    }
}
