<?php

use App\Http\Controllers\Controller;
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
Route::get('/add', function () {
    return view('add');
});

Route::get('/',[Controller::class,'index']);

Route::get('/detail/{id}',[Controller::class,'det']);

Route::get('/edit/{id}',[Controller::class,'indox']);

Route::post('/input',[Controller::class,'input'])->name('input');

Route::post('/update/{id}',[Controller::class,'update'])->name('update');
