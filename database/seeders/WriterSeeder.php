<?php

namespace Database\Seeders;

use App\Models\Writer;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WriterSeeder extends Seeder
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

        Writer::factory()->create([
                'contact'=>$fakerID->phoneNumber,
                'photo'=>'',
                'tempat' =>'Korea'
            ]);
        Writer::factory()->create([
                'contact'=>$fakerFR->phoneNumber,
                'photo'=>'foto1.jpg',
                'tempat' =>'Suriah'
            ]);
        Writer::factory()->create([
                'contact'=>$fakerIT->phoneNumber,
                'photo'=>'',
                'tempat' =>'Arab'
            ]);
        Writer::factory()->create([
                'contact'=>$fakerRU->phoneNumber,
                'photo'=>'foto2.jpg',
                'tempat' =>'Indonesia'
            ]);
        Writer::factory()->create([
                'contact'=>$fakerUS->phoneNumber,
                'photo'=>'',
                'tempat' =>'Singapura'
            ]);
            Writer::factory()->create([
                'contact'=>$fakerID->phoneNumber,
                'photo'=>'foto3.jpg',
                'tempat' =>'Inggris'
            ]);
        Writer::factory()->create([
                'contact'=>$fakerFR->phoneNumber,
                'photo'=>'',
                'tempat' =>'Amerika'
            ]);
        Writer::factory()->create([
                'contact'=>$fakerIT->phoneNumber,
                'photo'=>'foto4.jpg',
                'tempat' =>'Afrika'
            ]);
        Writer::factory()->create([
                'contact'=>$fakerRU->phoneNumber,
                'photo'=>'',
                'tempat' =>'Prancis'
            ]);
        Writer::factory()->create([
                'contact'=>$fakerUS->phoneNumber,
                'photo'=>'foto5.jpg',
                'tempat' =>'Itali'
            ]);
    }
}
