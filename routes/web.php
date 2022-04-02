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

use App\Http\Controllers\EnregistrementController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\InitController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('accueil');

Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/tous', [PostController::class, 'tous']);
Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth');
Route::get('/posts/chercher', [PostController::class, 'chercher']);
Route::get('/posts/popularite/{type}/{id}', [PostController::class, 'popularite'])->middleware('auth');
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::get('/posts/update/{id}', [PostController::class, 'update'])->middleware('auth');
Route::get('/posts/destroy/{id}', [PostController::class, 'destroy'])->middleware('auth');

Route::get('/auteur/{id}', [PostController::class, 'parAuteur']);
Route::get('/categorie/{id}', [PostController::class, 'parCategorie']);

// ENREGISTREMENT
Route::get('/enregistrement', [EnregistrementController::class, 'create'])->middleware('guest');
Route::post('/enregistrement', [EnregistrementController::class, 'store']);

// CONNEXION
Route::get('/connexion', [ConnexionController::class, 'create'])->name('login')->middleware('guest');
Route::post('/connexion', [ConnexionController::class, 'store']);
Route::get('/deconnexion', [ConnexionController::class, 'destroy'])->middleware('auth');
Route::get('/compte', [ConnexionController::class, 'index'])->middleware('auth');

// La route /init n'est plus utile
// Route::get('/init', [InitController::class, 'index']);
