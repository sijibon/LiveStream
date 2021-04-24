<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\backend\ChannelManageController;
use App\Http\Controllers\backend\ChannelCategoryController;



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


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/faqs',[HomeController::class,'faq'])->name('faq');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');

//Sign In routes
Route::get('/signin',[LoginController::class,'signin'])->name('signin');
Route::post('/signin_action',[LoginController::class,'Registration'])->name('signin_action');
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login_action',[LoginController::class,'login_action'])->name('login_action');

//mamage channel
Route::get('/channel_manage',[ChannelManageController::class,'create'])->name('channel_manage');


//category of channel
Route::get('/channel_category',[ChannelCategoryController::class,'create'])->name('channel_category');
Route::get('/channel_index',[ChannelCategoryController::class,'index'])->name('channel_index');
Route::post('/channel_store',[ChannelCategoryController::class,'store'])->name('channel_store');

