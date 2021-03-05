<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;

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

Route::get('/home', function () {
    return view ('home');
});

Route::prefix('products')->group(function () { 
    Route::get('/', [ProductsController::class, 'products']);
});

Route::get('/news/{id}', function ($id) {
    return view ('news').$id;
});

Route::prefix('program')->group(function () {
    Route::get('/', [ProgramController::class, 'program']);
});

Route::get('/about-us', function () {
    return view ('aboutus');
});

Route::resource('contact-us', ContactController::class);


