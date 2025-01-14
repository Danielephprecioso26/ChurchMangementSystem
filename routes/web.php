<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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
Route::get('/login', function () {
    return view('session/login-session');
})->name('login');

//Admin routes
Route::middleware('auth:sanctum', \App\Http\Middleware\RoleMiddleware::class . ':admin')->group(function () {

    // Authentication routes
    Route::get('/', [HomeController::class, 'dashboard']);
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store'])->name('user.update');
    Route::get('/login', function () {
		return view('dashboard');
	})->name('user.login');


});

//Staff1 routes
Route::middleware('auth:sanctum', \App\Http\Middleware\RoleMiddleware::class . ':admin,staff1')->group(function () {

    // Authentication routes
    Route::get('/', [HomeController::class, 'dashboard']);
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');
    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store'])->name('user.update');
    Route::get('/login', function () {
		return view('dashboard');
	})->name('user.login');

    
});

//Satff2 routes
Route::middleware('auth:sanctum', \App\Http\Middleware\RoleMiddleware::class . ':admin,staff2')->group(function () {

    // Authentication routes
    Route::get('/', [HomeController::class, 'dashboard']);
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');
  
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store'])->name('user.register');
    Route::get('/login', [SessionsController::class, 'create'])->name('user.login');
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

