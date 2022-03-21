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

use App\Http\Controllers\InitController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index']);
Route::get('/posts/tous', [PostController::class, 'tous']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::get('/auteur/{id}', [PostController::class, 'parAuteur']);
Route::get('/categorie/{id}', [PostController::class, 'parCategorie']);

Route::get('/init', [InitController::class, 'index']);
