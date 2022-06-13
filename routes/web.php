<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AtletaController;
use App\Http\Controllers\ModalidadeController;

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

Route::get('/modalidades', [ModalidadeController::class, 'modalidades'])->name('modalidades');
Route::POST('/post', [ModalidadeController::class, 'store']);





Route::get('/modalidades', function () {
    return view('modalidades');
});

Route::get('/equipes', function () {
    return view('equipes');
});





Route::get('/jogossumula', function () {
    return view('jogossumula');
});

Route::get('/equipeatletas', function () {
    return view('equipeatletas');
});

