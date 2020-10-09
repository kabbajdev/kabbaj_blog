<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CategoryController;
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

Route::get('/home', [SiteController::class, 'index']);
Route::get('/contact', [SiteController::class, 'contact']);

//La route /category/create déclenche la méthode create qui existe dans le contrôleur CategoryController 
Route::get('/category/create',[CategoryController::class, 'create']);
Route::post('/category',[CategoryController::class,'store']);
Route::get('/category',[categoryController::class,'index']);
Route::delete('/category/{id}',[categoryController::class,'destroy']);