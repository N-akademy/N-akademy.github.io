<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'name' => "Qu'est-ce qu'on a encore fait au Bon Dieu ?",
            'director'=>'Philippe de Chauveron',
            'duration'=>111,
            'year'=> 2019,
            'genre_id'=>2
        ]);

        DB::table('movies')->insert([
            'name' => 'Deadpool',
            'director'=>'Tim Miller',
            'duration'=>152,
            'year'=> 2015,
            'genre_id'=>3
        ]);

        DB::table('movies')->insert([
            'name' => 'Green Book : Sur les routes du sud',
            'director'=>'Peter Farrelly',
            'duration'=>350,
            'year'=> 2019,
            'genre_id'=> 4
        ]);

        DB::table('movies')->insert([
            'name' => 'Nicky Larson et le parfum de Cupidon',
            'director'=>'Philippe Lacheau',
            'duration'=>28,
            'year'=> 2019,
            'genre_id'=>1
        ]);
    }

}
