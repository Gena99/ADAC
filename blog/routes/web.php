<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

/*
 Route::get('/backerror', function () {
    return redirect()->back();
})->name('backerror');
*/

Route::get('accueil', function () {
	return view('accueil');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('accueil');

Route::get('/partitions', 'PartitionsController@index')->name('partitions');

Route::get('/partitions/telecharger/{fichier}', 'PartitionsController@telecharger');


Route::get('/partitions/ajouter', 'PartitionsController@create')->name('ajouterPartition');
Route::post('/partitions/store', 'PartitionsController@store')->name('storePartitions');

Route::get('/partitions/supprimer/{id}', 'PartitionsController@destroy')->name('supprimerPartition');

Route::get('/activites', function(){
    return view('activites');
});

