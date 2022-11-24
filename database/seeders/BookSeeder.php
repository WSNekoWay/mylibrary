<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Writer;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakerID=Factory::create('id_ID');
        $fakerFR=Factory::create('fr_FR');
        $fakerIT=Factory::create('it_IT');
        $fakerRU=Factory::create('ru_RU');
        $fakerUS=Factory::create('en_US');

        $index=0;

        foreach(Writer::all() as $writer){
            if($index==0){
                Book::factory()->create([
                    'title'=>$fakerID->title,
                    'synopsis' => 'Synopsis Buku Penulis 1',
                    'writer_id' => $writer
                ] );
            }elseif($index==1){
                Book::factory()->create([
                    'title'=>$fakerFR->title,
                    'synopsis' => 'Synopsis Buku Penulis 2',
                    'writer_id' => $writer
                ] );
            }
            elseif($index==2){
                Book::factory()->create([
                    'title'=>$fakerIT->title,
                    'synopsis' => 'Synopsis Buku Penulis 3',
                    'writer_id' => $writer
                ] );
            }elseif($index==3){
                Book::factory()->create([
                    'title'=>$fakerRU->title,
                    'synopsis' => 'Synopsis Buku Penulis 4',
                    'writer_id' => $writer
                ] );
            }elseif($index==4){
                Book::factory()->create([
                    'title'=>$fakerUS->title,
                    'synopsis' => 'Synopsis Buku Penulis 5',
                    'writer_id' => $writer
                ] );
            }elseif($index==5){
                Book::factory()->create([
                    'title'=>$fakerUS->title,
                    'synopsis' => 'Synopsis Buku Penulis 6',
                    'writer_id' => $writer
                ] );
            }
            elseif($index==6){
                Book::factory()->create([
                    'title'=>$fakerUS->title,
                    'synopsis' => 'Synopsis Buku Penulis 7',
                    'writer_id' => $writer
                ] );
            }
            elseif($index==7){
                Book::factory()->create([
                    'title'=>$fakerUS->title,
                    'synopsis' => 'Synopsis Buku Penulis 8',
                    'writer_id' => $writer
                ] );
            }
            elseif($index==8){
                Book::factory()->create([
                    'title'=>$fakerUS->title,
                    'synopsis' => 'Synopsis Buku Penulis 9',
                    'writer_id' => $writer
                ] );
            }elseif($index==9){
                Book::factory()->create([
                    'title'=>$fakerUS->title,
                    'synopsis' => 'Synopsis Buku Penulis 10',
                    'writer_id' => $writer
                ] );
            }

        }

    }
}
