<?php

use App\Http\Controllers\MenuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('sample', [MenuController::class, 'getJson']);
Route::get('menu/random', [MenuController::class, 'getRandomMenu']);
Route::post('register', [RegisterController::class, 'register']);// ユーザー登録
Route::post('login', [LoginController::class, 'login']);// ログイン

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
