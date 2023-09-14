<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\loginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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
    return view('login');
});

Route::controller(loginController::class)->group(function(){   // login controller group
    Route::post('login','login');
});

Route::controller(AdminController::class)->group(function(){   // admin controller group
    Route::get('admin/dashboard','dashboard');
    Route::get('admin/viewProduct/{id}','viewProduct');
    Route::get('addtocart/{id}','addtocart');
 

});

Route::controller(UserController::class)->group(function(){     // user controller group

    Route::get('user/dashboard','dashboard');
    Route::get('user/viewProduct/{id}','viewProduct');
    Route::get('addtocart/{id}','addtocart');
    Route::get('logout','logout');

});


