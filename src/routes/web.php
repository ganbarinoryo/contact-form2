<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

//　'/'にアクセスすると、'index'を呼び出す記述
Route::get('/', [ContactController::class, 'index']);

//入力画面の送信ボタンがクリックされた時にconfirmアクションが実行されるようにする記述
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);

//確認画面の送信ボタンがクリックされた時にstoreアクションが実行されるようにする記述
Route::post('/contacts', [ContactController::class, 'store']);

