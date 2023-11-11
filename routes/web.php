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



Route::get('/BiodataForm', [ResourceController::class, 'create'])->name('Person Biodata Form');
Route::post('/BiodataForm', [ResourceController::class, 'store'])->name('Store Person Biodata');
Route::get('/ListData', [ResourceController::class, 'index'])->name('Person Data List');
Route::get('/DetailData/{id}', [ResourceController::class, 'show'])->name('Show Person Data');
Route::get('/StudentData/{id}/edit', [ResourceController::class, 'edit'])->name('Edit Person Data');
Route::put('/UpdateStudentData/{id}', [ResourceController::class, 'update'])->name('Update Person Data');
Route::delete('/DeleteStudentData/{id}', [ResourceController::class, 'destroy'])->name('Delete Person Data');

//Route::resource('/ResourceController', ResourceController::class);