<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::controller(ProductController::class)->group(function() {
   Route::get('/product', 'index');
   Route::get('/product/create', 'create');
   Route::post('/product/create', 'store');
   Route::get('/product/{id}', 'show');
   Route::get('/product/edit/{id}', 'edit');
   Route::put('/product/edit/{id}', 'update');
   Route::delete('/product/delete/{id}', 'destroy');
});

