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

Route::get('/listadejogos', function () {
    return view('listadejogos');
});


Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::get('/teste', function () {
    return view('teste');
});




Route::get('/atletas', [AtletaController::class, 'atletas'])->name('atletas');
Route::POST('/posts', [AtletaController::class, 'store']);
Route::delete('/atletas/{id}', [AtletaController::class, 'destroy']);

Route::get('/modalidades_esportivas', [ModalidadeController::class, 'modalidades_esportivas'])->name('modalidades_esportivas');
Route::POST('/post.mod', [ModalidadeController::class, 'store']);
Route::delete('/modalidades_esportivas/{id}', [ModalidadeController::class, 'destroy']);

Route::get('/torneio', [TorneioController::class, 'torneio'])->name('torneio');
Route::POST('/post.torneio', [TorneioController::class, 'store']);
Route::delete('/torneio/{id}', [TorneioController::class, 'destroy']);

Route::get('/equipe', [EquipeController::class, 'equipe'])->name('equipe');
Route::POST('/post.equipe', [EquipeController::class, 'store']);
Route::delete('/equipe/{id}', [EquipeController::class, 'destroy']);

Route::get('/jogos', [JogoController::class, 'jogos'])->name('jogos');
Route::POST('/post.jogos', [JogoController::class, 'store']);
Route::delete('/jogos/{id}', [JogoController::class, 'destroy']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
