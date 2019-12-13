<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'name' => 'polar',

        ]);

        DB::table('genres')->insert([
            'name' => 'fantastique',

        ]);

        DB::table('genres')->insert([
            'name' => 'Comedie',

        ]);

        DB::table('genres')->insert([
            'name' => 'Autobiographie',

        ]);
    }
    }

