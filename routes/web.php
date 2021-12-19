<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaringFormController;
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
    return view('form.login');
})->name('login');

// ANTRIAN
// Route::get('/antrian',[CaringFormController::class,'index'])->name('caring.antrian');
Route::post('/antrian',[CaringFormController::class,'index'])->name('caring.antrian');

// DATA PEMOHON
// Route::get('/form/1',[CaringFormController::class,'formCaring1'])->name('caring.form.one');
Route::post('/form/1',[CaringFormController::class,'formCaring1'])->name('caring.form.one');

// DATA PROFILE
// Route::get('/form/2',[CaringFormController::class,'formCaring2'])->name('caring.form.two');
Route::post('/form/2',[CaringFormController::class,'formCaring2'])->name('caring.form.two');

// PAGE HASIL
// Route::get('/form/submit',[CaringFormController::class,'formCaringSubmit'])->name('caring.form.submit');
Route::post('/form/submit',[CaringFormController::class,'formCaringSubmit'])->name('caring.form.submit');
