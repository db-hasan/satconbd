<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about-us', [FrontendController::class, 'about'])->name('about');
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact');
Route::get('/service', [FrontendController::class, 'service'])->name('service');
Route::get('/package', [FrontendController::class, 'package'])->name('package');
Route::get('/media', [FrontendController::class, 'media'])->name('media');
Route::get('/corporate', [FrontendController::class, 'corporate'])->name('corporate');


Route::post('/contact-send', [ContactController::class, 'contactsend'])->name('contact.send');


Route::get('/admin-login', [AuthController::class, 'login'])->name('login');
Route::post('/admin-login', [AuthController::class, 'adminlogin'])->name('admin.login');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('profle-update',[AuthController::class,'profileupdate'])->name('profle.update');
    Route::post('profle-update',[AuthController::class,'passwordupdate'])->name('password.update');
});