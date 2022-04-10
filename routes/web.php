<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
//     //เรียก page welcome.blade.php
// });
// Route::get('about', function () {
//     //http://myblog.site/about URL ตอนเรียก or เรียกผ่าน localhost ดังนี้ http://localhost/myblog/public/about
//     return 'About Page'; //สั่ง Return เป็นเหมือน Echo ใน PHP
//     //ให้ Return เป็นคำว่า About Page
// });

// Route::get('employees' , [HomeController::class,'employees']);
// Route::get('employeelist' , [HomeController::class,'employeelist']);
// Route::get('category/{name}' , function($name)
// {
//  return $name;
// })->where('name','[A-Za-z]+');

// Route::get('group/{id}/{name}' , function($id,$name)
// {
//  return 'ProductID:'.$id.'<br>ProductName:'.$name;
// })->where('id','[0-9]+','name','[a-z]+');
// ตั้งชื่อย่อให้ route ->name('xxxx') ใช้อ้้างอินใน vue controlloer blade


//การส่งเข้ัา controller ประกาศ name spec 'App\Http\Controller\HomeController@index' ด้านบนด้วย
//Route::get('/เรียกน้าแรก',[HomeController::class,'home']);
Route::get('/',[HomeController::class,'home']);
Route::get('about',[HomeController::class,'about']);
Route::get('service',[HomeController::class,'service']);
Route::get('contact',[HomeController::class,'contact']);
Route::get('login',[HomeController::class,'login']);
