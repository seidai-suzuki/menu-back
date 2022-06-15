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
// auth API
Route::post('register', [RegisterController::class, 'register']);// ユーザー登録
Route::post('login', [LoginController::class, 'login']);// ログイン

// menu API
Route::get('menu', [MenuController::class, 'index']);
Route::post('menu', [MenuController::class, 'store']);
Route::get('menu/{id}', [MenuController::class, 'show']);
Route::put('menu/{id}', [MenuController::class, 'update']);
Route::delete('menu/{id}', [MenuController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
