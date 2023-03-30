<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('/login', "AuthController@index")->name('login');
Route::post('/login', "AuthController@submit");
Route::get('/logout', "AuthController@logout")->name("logout");
Route::get('/signup', "AuthController@signup")->name("signup");
Route::post('/signup', "AuthController@create")->name('create');

Route::group(['middleware' => ['is_admin']], function () {
    Route::get('/pages/admin-layout/dashboard', 'Admin\AdminDashboard@dashboard')->name('dashboard-admin');
});

Route::group(['middleware' => ['is_doctor']], function () {
    Route::get('/pages/doctor-layout/dashboard', 'Doctor\DoctorDashboard@dashboard')->name('dashboard-doctor');
});

Route::group(['middleware' => ['is_user']], function () {
    Route::get('/pages/users-layout/dashboard', 'Users\UsersDashboard@dashboard')->name('dashboard-users');
});
