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

use App\Http\Controllers\MaintenanceController;
use GuzzleHttp\Middleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ibnrochd', function () {
    return "erreur!!";
})->name('ibnrochd');


Route::get('/mnt', function () {
    return "Notre site web est en maintenance";
})->name('mnt');

//avec paramétre obligatoire
Route::get('/commande/{x}', function ($x) {
    return "la commande recherché est : $x";
});

// avec paramétre optionel
/*Route::get('/client/{x?}', function ($x = 1) {
    if ($x > 3) return "erreur";
    return "le client recherché est le numéro : $x";
});


*/
Route::get('/client/{x?}', function ($x = 1) {
    if ($x > 3) return redirect()->route('ibnrochd');
    return "le client recherché est le numéro $x";
});



// avec deux paramétre

Route::get('/article/{x}-{y}', function ($x, $y) {
    return "l'article recherché est: $x-$y";
})->name('article');

//exemple avec controlleur
//route::get('/fournisseurs', 'FournisseurController@index')->name('fournisseurs');

/* Route::get('/clients', ['middleware' => 'TestMiddleware', 'uses' => 'ClientController@liste'])->name('clients'); */
Route::get('/clients', 'ClientController@liste')->name('clients');
/*
Route::get('/ibnrochd{$x}', function ($x) {
    return "erreur numéro $x!!";
})->name('ibnrochd');

Route::get('/client/{x?}', function ($x = 1) {
    if ($x > 3) return redirect()->route('ibnrochd', ['x' => 20]);
    return "le semestre recherché est le numéro $x";
});
*/

view()->share('nom', 'mezian');
view()->share('note', 12);
view()->share('wilaya', ['telmcen', 'alger', 'bejaia']);

Route::get('/admin', function () {
    return "console d'administrateur";
})->middleware('heure');

/*

Route::get('/admin', function () {
    return "console d'administrateur";
})->middleware(\App\Http\Middleware\HeureMiddleware ::class);
*/

Route::get('/admin2', ['middleware' => 'heure2:23', 'uses' => 'adminController@index']);

Route::resource('/fournisseurs', 'FournisseurController');

Route::resource('/fourn', 'FournisseurController')->only(['index', 'show']);

Route::resource('/four', 'FournisseurController')->except(['create', 'store']);

Route::apiResource('/cmd', 'CommandeController');

//Route::apiResources(['/cmd1', 'CommandeController']);
Route::view('/liste', 'Pages.liste');

Route::get('/req', 'RequeteController@index');

Route::post('/req', 'RequeteController@index');

Route::get('/formulaire', function () {
    return view('formulaire');
})->name('formulaire');

Route::get('/res', 'ReponseController@index');

Route::view("/login", "login");

Route::view("/form", "form");