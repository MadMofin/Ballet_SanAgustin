<?php

use Illuminate\Database\Seeder;

class clases extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clases')->insert([	
        	['nombre-clase' => 'Ballet'],
        	['nombre-clase' => 'Jazz'],
        	['nomnre-clase' => 'Hawaiano'],
        	['nombre-clase' => 'Street Dance'],
        	['nombre-clase' => 'Competencia'],
        	['nombre-clase' => 'Hip Hop'],
        	['nombre-clase' => 'Danza Aérea'],
        	['nombre-clase' => 'Stretch'],
        	['nombre-clase' => 'Belly'],
        	['nombre-clase' => 'Contemporánea'],
        	['nombre-clase' => 'Gimnasia']
        ]);
    }
}
