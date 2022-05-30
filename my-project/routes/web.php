<?php

#新しいコントローラーを作ったら忘れずに！！！！！！
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Controllers\CreateController;

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

Route::get('/create/test', [CreateController::class, 'create_task_test']);

Route::get('/create/test2/{id}', [CreateController::class, 'create_task2']);

#新しいコントローラーを作ったら一番上までスクロール！！！！

Route::get('/', function () {
    return view('welcome');
});
