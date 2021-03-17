<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesConntroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PropertiesController;
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

Route::get('/', [IndexController::class, 'loadIndex']);


Route::get('/admin',[AdminController::class, 'index']);
Route::get('/adminDashBoard',[AdminController::class, 'dashBoard']);
Route::post('/admin/login',[AdminController::class, 'login']);
Route::get('/logout',[AdminController::class, 'logout']);
Route::get('/categories',[AdminController::class, 'showCategories']);
Route::get('/posts',[AdminController::class, 'showPosts']);
//category
Route::post('/categories-add',[CategoriesConntroller::class, 'addCategories']);
Route::post('/categories-update',[CategoriesConntroller::class, 'updateCategories']);
//post
Route::post('/posts-add',[PostController::class, 'addPosts']);
Route::post('/posts-update',[PostController::class, 'updateposts']);
//properties
Route::get('/properties',[PropertiesController::class, 'indexProperties']);
