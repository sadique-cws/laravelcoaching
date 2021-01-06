<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/', [StudentController::class,'index'])->name('index');
Route::get('/apply', [StudentController::class,'apply'])->name('apply');
Route::post('/apply', [StudentController::class,'applyStore'])->name('applyStore');


Route::prefix("admin")->group(function(){
    Route::get('/dashboard',[AdminController::class,"dashboard"])->name('dashboard');
    Route::get('/students',[AdminController::class,"students"])->name('students');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
