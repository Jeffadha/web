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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'FrontendController@home')->name('home');
Route::get('/profil', 'FrontendController@profil_show')->name('profil_show');
Route::get('/campus', 'FrontendController@campus_show')->name('campus_show');
Route::get('/login', 'LoginController@form_login')->name('form_login');
Route::post('/login-action', 'LoginController@login')->name('login_action');
Route::get('/logout', 'LoginController@logout')->name('logout');

//load data front
Route::post('/beritaterkini', 'FrontendController@web_beritaterkini')->name('beritaterkini.web');

//get detail page
Route::get('/page/{urlext}/{id}/{title}', 'FrontendController@detail_post_page')->name('detail.page');
// Route::get('/page', 'FrontendController@detail_post_page')->name('detail.page');
Route::post('/page/detail', 'FrontendController@detail_post')->name('detail.data');

Route::get('/dashboard', 'BackendController@index')->name('dashboard');
Route::get('/berita-terkini', 'BeritaTerikiniController@index')->name('berita_terkini_page');
Route::get('/berita-terkini/create', 'BeritaTerikiniController@create')->name('berita_terkini_create');
Route::get('/berita-terkini/update-page/{id}', 'BeritaTerikiniController@update_page')->name('berita_terkini_update');
Route::post('/berita-terkini/data', 'BeritaTerikiniController@data_berita_terkini')->name('beritaterkini.data');
Route::post('/berita-terkini/save', 'BeritaTerikiniController@save')->name('beritaterkini.save');
Route::post('/berita-terkini/update', 'BeritaTerikiniController@update')->name('beritaterkini.update');

Route::get('/tags', 'BeritaTerikiniController@select_tags')->name('select.tags');
Route::get('/category', 'BeritaTerikiniController@select_category')->name('select.category');
