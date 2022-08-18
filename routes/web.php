<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

  
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
  
// Route::get('/', [DashboardController::class, 'index']);
  
// Auth::routes();
  
Route::get('/home', [HomeController::class, 'index'])->name('home');
  
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class)->middleware('role:Admin');;
    Route::resource('products', ProductController::class);
});


Route::get('/login', [LoginController::class, 'index'])->name("login")->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name("login.auth");
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');


Route::get('/registration', [RegistrationController::class, 'index'])->name('registeration');
Route::post('/registration', [RegistrationController::class, 'create'])->name('registration.create');


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/search', [DashboardController::class, 'search'])->name('search');
Route::get('/dashboard/{product}', [DashboardController::class, 'show'])->name('dashboard/show');
Route::get('/dashboard/{category}/category', [DashboardController::class, 'oneCategory'])->name('dashboard/category');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

