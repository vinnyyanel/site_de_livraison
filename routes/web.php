<?php

use App\Http\Controllers\AcceuilController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\TacheController;
use App\Models\Client;

Route::resources([
    'admin' => AdminController::class,
    'client' => ClientController::class,
    'tache' => TacheController::class,
]);

Route::get('/accueil/tache/{id}',[TacheController::class,'creat'])->name('creat');

Route::post('/accueil/tache/{id}',[TacheController::class,'stor'])->name('stor');

Route::get('/accueil/{id}',[AcceuilController::class,'Acceuil'])->name('acceuil');

Route::get('/connexion', 'App\Http\Controllers\ConnexionController@index')->name('connexion');
Route::post('/connexion', 'App\Http\Controllers\ConnexionController@store');
