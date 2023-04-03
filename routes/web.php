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
Route::get('/articles', "ArticlesController@index")->name('articles');
Route::get('/login', "AuthController@index")->name('login');
Route::post('/login', "AuthController@submit");
Route::get('/logout', "AuthController@logout")->name("logout");
Route::get('/signup', "AuthController@signup")->name("signup");
Route::post('/signup', "AuthController@create")->name('create');

Route::group(['middleware' => ['is_admin']], function () {
    //CRUD Article
    Route::get('/pages/admin-layout/dashboard', 'Admin\AdminDashboard@dashboard')->name('dashboard-admin');
    Route::get('/pages/admin-layout/articles', 'Admin\AdminArticles@index')->name('articles-admin');
    Route::get('/pages/admin-layout/articles/create-articles', 'Admin\AdminArticles@create')->name('create-articles-admin');
    Route::post('/pages/admin-layout/articles/create-articles', 'Admin\AdminArticles@store_articles')->name('store_articles');
    Route::get('/pages/admin-layout/articles/edit-articles/{id}', 'Admin\AdminArticles@edit')->name('edit-articles-admin');
    Route::post('/pages/admin-layout/articles/edit-articles/{id}', 'Admin\AdminArticles@update')->name('update-articles');
    Route::get('/pages/admin-layout/articles/delete-articles/{id}', 'Admin\AdminArticles@delete')->name('delete-articles');
});

Route::group(['middleware' => ['is_doctor']], function () {
    Route::get('/pages/doctor-layout/dashboard', 'Doctor\DoctorDashboard@dashboard')->name('dashboard-doctor');
    Route::get('/pages/doctor-layout/medicine', 'Doctor\DoctorMedicines@index')->name('medicine-doctor');
    Route::post('/pages/doctor-layout/medicine', 'Doctor\DoctorMedicines@store_medicine')->name('store_medicine');
    Route::put('/pages/doctor-layout/medicine', 'Doctor\DoctorMedicines@update_medicine')->name('update_medicine');
    Route::get('/pages/doctor-layout/medicine/{id}', 'Doctor\DoctorMedicines@delete_medicine')->name('delete_medicine');
   
});

Route::group(['middleware' => ['is_user']], function () {
    Route::get('/pages/users-layout/dashboard', 'Users\UsersDashboard@dashboard')->name('dashboard-users');
});
