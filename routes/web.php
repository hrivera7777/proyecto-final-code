<?php

use App\Http\Controllers\CantidadesCacao;
use App\Http\Controllers\RetiroInventario;
use App\Http\Controllers\ChocolateProducido;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});



Route::get('/retiroInventario',[RetiroInventario::class, 'show'])->name('retiro');
Route::get('/succesfulRetiro', [RetiroInventario::class,'retirarSuministro'])->name('retiroCompleto');

Route::get('/cantidadesCacao', [CantidadesCacao::class, 'show'])->name('cantidadesCacao');
Route::get('/verificarCedulaRecolector', [CantidadesCacao::class, 'verificarCedula'])->name('verificarCedula');
Route::get('/ingresoCantCacao', [CantidadesCacao::class,'ingresoCantidadCacao'])->name('ingresoCantidadCacao');

Route::get('/chocolateProducido',[ChocolateProducido::class, 'show'] );