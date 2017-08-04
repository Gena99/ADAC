<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'titre' => 'Concert Live Metal',
            'texte' => 'Lorem ipsum',
            'evenement' => true,
            'date'=> '2017-08-21',
            'date_publi'=> '2017-08-03',
        ]);
        DB::table('news')->insert([
            'titre' => 'Concert Live Reggae',
            'texte' => 'Lorem ipsum',
            'evenement' => true,
            'date'=> '2017-08-22',
            'date_publi'=> '2017-08-03',
        ]);
        DB::table('news')->insert([
            'titre' => 'Rendez-vous des artistes',
            'texte' => 'Lorem ipsum',
            'evenement' => false,
            'date'=> '2017-08-14',
            'date_publi'=> '2017-08-03',
        ]);
    }
}
