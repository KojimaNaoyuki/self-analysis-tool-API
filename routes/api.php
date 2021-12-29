<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfConversion;
use App\Http\Controllers\GetQuestionController;

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

//質問をレスポンス
Route::get('/getQuestion', [GetQuestionController::class, 'getQuestion']);
