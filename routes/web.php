<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\PhotoController;

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

// このURLをたたいたら、このコントローラーの中のメソッドの処理をします。
Route::get('/samples/index', [SampleController::class, 'index'])->name('samples.index');
Route::get('/samples/create', [SampleController::class, 'create'])->name('samples.create');
Route::post('/samples/store', [SampleController::class, 'store'])->name('samples.store');

// リソースコントローラ(7つ分のルーティングをまとめてつくれる)
Route::resource('photos', PhotoController::class);