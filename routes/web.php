<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorProduto;
use App\Http\Controllers\ControladorCategoria;



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
    return view('index');
});

Route::get('/produtos', [ControladorProduto::class, 'index']);
Route::get('/categorias', [ControladorCategoria::class, 'index']);
