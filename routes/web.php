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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('form.login');
});

// Route::get('/antrian',[CaringFormController::class,'index'])->name('caring.antrian');
Route::post('/antrian',[CaringFormController::class,'index'])->name('caring.antrian');
// Route::get('/form',[CaringFormController::class,'formCaring'])->name('caring.form');
Route::post('/form',[CaringFormController::class,'formCaring'])->name('caring.form');
