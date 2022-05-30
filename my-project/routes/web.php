<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
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
Route::get('/create', function () {
    return view('create');
});

Route::get('/list', function () {
    return view('list');
});

Route::get('/list/{id}', [ListController::class, 'show_task']);



Route::get('/', function () {
    return view('welcome');
});
