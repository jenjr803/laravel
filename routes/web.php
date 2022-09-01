<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\StudentController;

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

Route::resource('bikes', BikeController::class);

Route::get('student', [StudentController::class, 'index']);
Route::get('student/{number}', [StudentController::class, 'test']);

Route::get('/student/{name}/{num}',[StudentController::class, 'getByUrl']);
Route::get('/student',[StudentController::class, 'index'])->name('student123');

