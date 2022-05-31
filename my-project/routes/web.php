<?php

#新しいコントローラーを作ったら忘れずに！！！！！！
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Controllers\CreateController;

use Illuminate\Support\Facades\DB;

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

Route::get('/readtest', function () {
    #function
    $tasks = DB::table('tasks')->get();
    #view
    return view('readtest',['tasks' => $tasks]);
});

Route::get('/list/{id}', [ListController::class, 'show_task']);

Route::get('/create/test', [CreateController::class, 'create_task']);

Route::get('/list/test', [ListController::class, 'show_task_test']);

#新しいコントローラーを作ったら一番上までスクロール！！！！

Route::get('/', function () {
    return view('welcome');
});
