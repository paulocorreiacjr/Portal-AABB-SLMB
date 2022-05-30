<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cadastrartorneios', function () {
    return view('cadastrartorneios');
});

Route::get('/modalidades', function () {
    return view('modalidades');
});

Route::get('/equipes', function () {
    return view('equipes');
});

Route::get('/atletas', function () {
    return view('atletas');
});

Route::get('/jogossumula', function () {
    return view('jogossumula');
});