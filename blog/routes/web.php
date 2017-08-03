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
	return view('accueil');
});

/*
 Route::get('/backerror', function () {
    return redirect()->back();
})->name('backerror');
*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('accueil');

Route::get('/partitions', 'PartitionsController@index')->name('partitions');

Route::get('/partitions/telecharger/{fichier}', 'PartitionsController@telecharger');


Route::get('/partitions/ajouter', 'PartitionsController@create')->name('ajouterPartition');
Route::post('/partitions/store', 'PartitionsController@store')->name('storePartitions');

Route::get('/partitions/supprimer/{id}', 'PartitionsController@destroy')->name('supprimerPartition');
//routes pour le menu

Route::get('/activites', function(){
    return view('activites');
});

Route::get('/association', function(){
    return view('association');
});
Route::get('/ecoles', function(){
    return view('ecole');
});
Route::get('/groupes', function(){
    return view('groupe');
});
Route::get('/galerie', function(){
    return view('galerie');
});

Route::get('/presse', function(){
    return view('presse');
});
//routes pour les écoles
Route::get('/clarac', function(){
    return view('clarac');
});


Route::get('/encausse-les-thermes', function(){
    return view('encausse-les-thermes');
});

Route::get('/castelnau-magnoac', function(){
    return view('castelnau-magnoac');
});
Route::get('/boulogne-sur-gesse', function(){
    return view('boulogne-sur-gesse');
});

Route::get('/montrejeau', function(){
    return view('montrejeau');
});





// Routes pour les mails (formulaire contact)
Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@mailToAdmin');
