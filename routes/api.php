<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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
//เรียกได้ทุก function 7 method ที่ laravel กำหนดไว้
Route::resource('photos',PhotoController::class);
//เรียก method ที่สร้างขึ้นเองใน controller PhotoController
Route::get('photos/search/{keyword}',[PhotoController::class,'search']);

//เขียน url ได้หลายแบบไป call function index
// Route::get('/photos',[PhotoController::class,'index']);
// Route::post('/photos',[PhotoController::class,'store']);
//Route::get('/photos',[PhotoController::class,'index']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
