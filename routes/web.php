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

Route::get('/','App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/acercade','App\Http\Controllers\HomeController@about')->name("home.about");

Route::get('/reportesencuestadores', 'App\Http\Controllers\SurveyorController@index')->name("surveyor.index");
Route::get('/encuestadores/{id}', 'App\Http\Controllers\SurveyorController@show')->name("surveyor.show");
Route::get('/encuestadores/export/{id}', 'App\Http\Controllers\SurveyorController@exportToExcel')->name('surveyor.export');
Route::get('/encuestadores/edit/{id}', 'App\Http\Controllers\SurveyorController@editFields')->name('surveyor.edit');


Route::get('/listaporgenero', 'App\Http\Controllers\ListaPorGeneroController@index')->name("listaporgenero.index");
Route::post('/listaporgenero/guardar', 'App\Http\Controllers\ListaPorGeneroController@store')->name("listaporgenero.store");
Route::get('/listaporgenero/{id}', 'App\Http\Controllers\ListaPorGeneroController@show')->name("listaporgenero.show");
Route::get('/listaporgenero/export/{id}', 'App\Http\Controllers\ListaPorGeneroController@exportToExcel')->name('listaporgenero.export');
Route::get('/listaporgenero/edit/{id}', 'App\Http\Controllers\ListaPorGeneroController@editFields')->name('listaporgenero.edit');


Route::get('/listaporedad', 'App\Http\Controllers\ListaPorEdadController@index')->name("listaporedad.index");
Route::post('/listaporedad/guardar', 'App\Http\Controllers\ListaPorEdadController@store')->name("listaporedad.store");
Route::get('/listaporedad/{id}', 'App\Http\Controllers\ListaPorEdadController@show')->name("listaporedad.show");


Route::get('/muestraestratificada', 'App\Http\Controllers\MuestraEstratificadaController@index')->name("muestraestratificada.index");


Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');


Auth::routes(['register' => true]);
Route::middleware(['auth'])->group(function () {
    Route::post('/reportesencuestadores/guardar', 'App\Http\Controllers\SurveyorController@store')->name("surveyor.store");
});


Route::middleware('admin')->group(function () {
    Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
    Route::get('/admin/users','App\Http\Controllers\Admin\AdminUserController@index')->name("admin.user.index");
    Route::post('/admin/users/store','App\Http\Controllers\Admin\AdminUserController@store')->name("admin.user.store");
});
