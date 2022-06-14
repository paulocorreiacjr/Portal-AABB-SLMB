<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AtletaController;
use App\Http\Controllers\ModalidadeController;
use App\Http\Controllers\TorneioController;
use App\Http\Controllers\EquipeController;

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

Route::get('/portaljogos', function () {
    return view('portaljogos');
});




Route::get('/home', [HomeController::class, 'home']);

Route::get('/atletas', [AtletaController::class, 'atletas'])->name('atletas');
Route::POST('/post', [AtletaController::class, 'store']);

Route::get('/modalidades_esportivas', [ModalidadeController::class, 'modalidades_esportivas'])->name('modalidades_esportivas');
Route::POST('/post.mod', [ModalidadeController::class, 'store']);

Route::get('/torneio', [TorneioController::class, 'torneio'])->name('torneio');
Route::POST('/post.torneio', [TorneioController::class, 'store']);

Route::get('/equipe', [EquipeController::class, 'equipe'])->name('equipe');
Route::POST('/post.equipe', [EquipeController::class, 'store']);



