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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index')->name('categories');

Route::get('/details/{id}', 'DetailController@index')->name('detail');

Route::get('/cart', 'CartController@index')->name('cart');

Route::get('/success', 'CartController@success')->name('success');

Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/dashboard/products', 'DashboardProductController@index')->name('dashboard-products');
Route::get('/dashboard/products/add', 'DashboardProductController@create')->name('dashboard-products-create');
Route::get('/dashboard/products/{id}', 'DashboardProductController@details')->name('dashboard-products-details');

Route::get('/dashboard/transactions', 'DashboardTransactionController@index')->name('dashboard-transaction');
Route::get('/dashboard/transactions/{id}', 'DashboardTransactionController@details')->name('dashboard-transaction-details');

Route::get('/dashboard/settings', 'DashboardSettingController@store')->name('dashboard-settings-store');
Route::get('/dashboard/account', 'DashboardSettingController@account')->name('dashboard-settings-account');



Auth::routes();


