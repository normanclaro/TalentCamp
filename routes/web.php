<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
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

Route::get('/', HomeController::class);

Route::get('productos', [ProductoController::class, 'index']);
Route::get('productos/create', [ProductoController::class, 'create']);
Route::get('productos/show', [ProductoController::class, 'show']);


Route::get('cargar', function(){
    return "cargar";
});
