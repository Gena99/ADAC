<?php

use Illuminate\Database\Seeder;

class PartitionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('partitions')->insert([
    		'artiste' => 'Paul Young',
    		'titre' => 'ok',
    		'fichier' =>'paulyoung-ok.pdf',
    		]);

        DB::table('partitions')->insert([
            'artiste' => 'Metallica',
            'titre' => 'Nothing else matters',
            'fichier' =>'metallica-nothingelsematters.pdf',
        ]);
    }
}

