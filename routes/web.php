<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Main;
use App\Http\Controllers\Objects\ObjectCreator;

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

Route::get('/', [Main::class, 'index'])->name('welcome');

Route::prefix('objects')->name('objects.')->group(function () {
    Route::get('/', [ObjectCreator::class, 'index'])->name('index');
    Route::get('/create', [ObjectCreator::class, 'create'])->name('create');
});
