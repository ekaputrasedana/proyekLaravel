<?php

use App\Http\Controllers\FormulirController;
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



Route::get('/BiodataForm', [FormulirController::class, 'create'])->name('Person Biodata Form');
Route::post('/BiodataForm', [FormulirController::class, 'store'])->name('Store Person Biodata');
Route::get('/ListData', [FormulirController::class, 'index'])->name('Person Data List');
Route::get('/DetailData/{id}', [FormulirController::class, 'show'])->name('Show Person Data');
Route::get('/PersonData/{id}/edit', [FormulirController::class, 'edit'])->name('Edit Person Data');
Route::put('/UpdatePersonData/{id}', [FormulirController::class, 'update'])->name('Update Person Data');
Route::delete('/DeletePersonData/{id}', [FormulirController::class, 'destroy'])->name('Delete Person Data');

//Route::resource('/FormulirController', FormulirController::class);