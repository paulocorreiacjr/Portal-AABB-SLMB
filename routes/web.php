<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AtletaController;
use App\Http\Controllers\ModalidadeController;
use App\Http\Controllers\TorneioController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\JogoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/portaljogos', function () {
    return view('portaljogos');
});


Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');




Route::get('/atletas', [AtletaController::class, 'atletas'])->name('atletas');
Route::POST('/post', [AtletaController::class, 'store']);

Route::get('/modalidades_esportivas', [ModalidadeController::class, 'modalidades_esportivas'])->name('modalidades_esportivas');
Route::POST('/post.mod', [ModalidadeController::class, 'store']);

Route::get('/torneio', [TorneioController::class, 'torneio'])->name('torneio');
Route::POST('/post.torneio', [TorneioController::class, 'store']);

Route::get('/equipe', [EquipeController::class, 'equipe'])->name('equipe');
Route::POST('/post.equipe', [EquipeController::class, 'store']);

Route::get('/jogos', [JogoController::class, 'jogos'])->name('jogos');
Route::POST('/post.jogos', [JogoController::class, 'store']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
