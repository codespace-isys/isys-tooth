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
    
    //CRUD Medicine
    Route::get('/pages/doctor-layout/medicine', 'Doctor\DoctorMedicines@index')->name('medicine-doctor');
    Route::post('/pages/doctor-layout/medicine', 'Doctor\DoctorMedicines@store_medicine')->name('store_medicine');
    Route::put('/pages/doctor-layout/medicine/{id}', 'Doctor\DoctorMedicines@update_medicine')->name('update_medicine');
    Route::get('/pages/doctor-layout/medicine/{id}', 'Doctor\DoctorMedicines@delete_medicine')->name('delete_medicine');
    
    //CRUD Indication
    Route::get('/pages/doctor-layout/indication', 'Doctor\DoctorIndication@index')->name('indication-doctor');
    Route::post('/pages/doctor-layout/indication', 'Doctor\DoctorIndication@store_indication')->name('store_indication');
    Route::put('/pages/doctor-layout/indication/{id}', 'Doctor\DoctorIndication@update_indication')->name('update_indication');
    Route::get('/pages/doctor-layout/indication/{id}', 'Doctor\DoctorIndication@delete_indication')->name('delete_indication');

    //CRUD Sickness
    Route::get('/pages/doctor-layout/sickness', 'Doctor\DoctorSickness@index')->name('sickness-doctor');
    Route::get('/pages/doctor-layout/sickness/create-sickness', 'Doctor\DoctorSickness@create')->name('create-sickness-doctor');
    Route::post('/pages/doctor-layout/Sickness/store-sickness', 'Doctor\DoctorSickness@store_sickness')->name('store-sickness');
    Route::get('/pages/doctor-layout/Sickness/edit-sickness/{id}', 'Doctor\DoctorSickness@edit_sickness')->name('edit-sickness');
    Route::post('/pages/doctor-layout/Sickness/update-sickness/{id}', 'Doctor\DoctorSickness@update_sickness')->name('update-sickness');
    Route::get('/pages/doctor-layout/Sickness/delete-sickness/{id}', 'Doctor\DoctorSickness@delete_sickness')->name('delete-sickness');
});

Route::group(['middleware' => ['is_user']], function () {
    Route::get('/pages/users-layout/dashboard', 'Users\UsersDashboard@dashboard')->name('dashboard-users');
});
