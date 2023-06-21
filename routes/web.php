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

// Route::get('/', function () {
//     return view('index');
// });
Route::view('/', 'index' )->name('inicio');

Route::view('/citas', 'citas' )->name('citas');

Route::view('/contacto', 'contacto' )->name('contacto');

Route::view('/sobremi', 'sobremi' )->name('sobremi');





// Route::get('/citas')->name('citas');
