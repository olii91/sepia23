<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('user', [App\Http\Controllers\HomeController::class, 'index'])->middleware('checklevel:admin')->name('user,index');
Route::get('user\create', [App\Http\Controllers\HomeController::class, 'create'])->middleware('checklevel:admin')->name('user,create');
Route::post('user\store', [App\Http\Controllers\HomeController::class, 'store'])->middleware('checklevel:admin')->name('user,store');
Route::get('user\edit\(id)', [App\Http\Controllers\HomeController::class, 'edit'])->middleware('checklevel:admin')->name('user,edit');
Route::put('user\update\(id)', [App\Http\Controllers\HomeController::class, 'update'])->middleware('checklevel:admin')->name('user,update');
Route::get('user\show\(id)', [App\Http\Controllers\HomeController::class, 'show'])->middleware('checklevel:admin')->name('user,show');
Route::delete('user\delete\(id)', [App\Http\Controllers\HomeController::class, 'destory'])->middleware('checklevel:admin')->name('user,delete');












