<?php

use App\Http\Controllers\ResourceController;
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

Route::get('/', function () {
    return view('homepage');
});

//Route::get('/home', function () {
    //return view('homepage');
//});

Route::get('/Form', function () {
    return view('Form');
});

Route::get('/HasilForm', function () {
    return view('HasilForm');
});


Route::post('/HasilForm', [ResourceController::class, 'store']);

//Route::resource('/ResourceController', ResourceController::class);