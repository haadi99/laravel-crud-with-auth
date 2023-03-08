<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[WelcomeController::class,'index'])->name('home');
Route::get('/about',[WelcomeController::class,'about'])->name('about');

                                            //log-in
Route::get('/login',[WelcomeController::class,'login'])->name('login');
Route::post('/login/user',[AuthController::class,'userLogin'])->name('log');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

                                            //register
Route::get('/register',[WelcomeController::class,'register'])->name('register');
Route::post('/register/user',[UserController::class,'userCreate'])->name('create-user');

                                            //blog
Route::middleware(['dashboard'])->group(function (){
    Route::get('/blog/add',[BlogController::class,'index'])->name('blog.add-blog');
    Route::post('/blog/create-blog',[BlogController::class,'create'])->name('blog.create-blog');
    Route::get('/blog/manage-blog',[BlogController::class,'manage'])->name('blog.manage-blog');
});


