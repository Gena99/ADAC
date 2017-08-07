<?php

use Illuminate\Database\Seeder;

class NouvellesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nouvelles')->insert([
            'titre' => 'Concert Live Metal',
            'resume' => 'Vide',
            'texte' => 'Lorem ipsum',
            'evenement' => true,
            'date'=> '2017-08-21',
            ]);
        DB::table('nouvelles')->insert([
            'titre' => 'Concert Live Reggae',
            'resume' => 'Rempli',
            'texte' => 'Lorem ipsum',
            'evenement' => true,
            'date'=> '2017-08-22',
            ]);
        DB::table('nouvelles')->insert([
            'titre' => 'Rendez-vous des artistes',
            'resume' => 'Plus ou moins rempli',
            'texte' => 'Lorem ipsum',
            'evenement' => false,
            'date'=> '2017-08-14',
            ]);
    }
}
