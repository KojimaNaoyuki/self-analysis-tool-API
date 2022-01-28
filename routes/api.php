<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfConversion;
use App\Http\Controllers\GetQuestionController;
use App\Http\Controllers\PostQuestionController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//PDF処理
Route::get('/getPdf', [PdfConversion::class, 'getPdf']);

//質問を取得
Route::get('/getQuestion', [GetQuestionController::class, 'getQuestion']);

//質問を追加
Route::get('/postQuestion', [PostQuestionController::class, 'postQuestion']);

//質問を更新
Route::get('/updateQuestion', [PostQuestionController::class, 'updateQuestion']);
