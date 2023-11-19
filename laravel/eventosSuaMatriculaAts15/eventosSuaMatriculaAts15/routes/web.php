<?php

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
use App\Http\Controllers\EventoController;
Route::get('/', [EventoController::class, 'create']);
Route::post('/criarEventoSubmit', [EventoController::class, 'store']);


/*Route::get('/criarEvento', function () {
    return view('formularioCriaEvento');
});
Route::get('/', function () {
    return view('welcome');
});*/
