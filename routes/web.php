<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\MarkController;


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


Route::get('/student',[StudentController::class,'index']);
Route::get('/student/create',[StudentController::class,'create']);
Route::post('/student',[StudentController::class,'store']);
Route::get('/student/{student}',[StudentController::class,'show']);
Route::get('/student/{student}/edit',[StudentController::class,'edit']);
Route::put('/student/{student}',[StudentController::class,'update']);
Route::delete('/student/{student}',[StudentController::class,'destroy']);


Route::get('/mark',[MarkController::class,'index']);
Route::get('/mark/create',[MarkController::class,'create']);
Route::post('/mark',[MarkController::class,'store']);
Route::get('/mark/{mark}',[MarkController::class,'show']);
Route::get('/mark/{mark}/edit',[MarkController::class,'edit']);
Route::put('/mark/{mark}',[MarkController::class,'update']);
Route::delete('/mark/{mark}',[MarkController::class,'destroy']);

