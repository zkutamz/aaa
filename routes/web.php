<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesConntroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\BrandController;
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
Route::get('/page', [IndexController::class, 'SrcollingPagination']);

Route::get('/admin',[AdminController::class, 'index']);
Route::get('/adminDashBoard',[AdminController::class, 'dashBoard']);
Route::post('/admin/login',[AdminController::class, 'login']);
Route::get('/logout',[AdminController::class, 'logout']);
Route::get('/categories',[AdminController::class, 'showCategories']);
Route::get('/posts',[AdminController::class, 'showPosts']);
Route::get('/brands',[AdminController::class, 'showBrands']);
//category
Route::post('/categories-add',[CategoriesConntroller::class, 'addCategories']);
Route::post('/categories-update',[CategoriesConntroller::class, 'updateCategories']);
Route::get('/categories-delete/{category_id}',[CategoriesConntroller::class, 'deleteCategories']);
//post
Route::post('/post-add',[PostController::class, 'addPosts']);
Route::post('/post-update',[PostController::class, 'updatePosts']);
Route::get('/post-delete/{post_id}',[PostController::class, 'deletePosts']);
//properties
Route::get('/properties',[PropertiesController::class, 'indexProperties']);
Route::post('/properties-update',[PropertiesController::class, 'updateProperties']);
//brand
Route::post('/brands-add',[BrandController::class, 'addBrand']);
Route::post('/brands-update',[BrandController::class, 'updateBrand']);
Route::get('/brands-delete/{category_id}',[BrandController::class, 'deleteBrand']);
