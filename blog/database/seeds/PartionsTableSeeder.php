<?php

use Illuminate\Database\Seeder;

class PartionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('partions')->insert([
    		'artiste' => 'Paul Young',
    		'titre' => 'ok',
    		'fichier' =>'blues',
    		]);
    }
}
}
