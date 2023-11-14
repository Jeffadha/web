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
Route::get('/struktural', 'FrontendController@struktur_show')->name('struktur_show');
Route::get('/login', 'LoginController@form_login')->name('form_login');
Route::post('/login-action', 'LoginController@login')->name('login_action');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::get('/list-berita', 'FrontendController@post_list')->name('beritaterkini.listpage');


//load data front
Route::post('/beritaterkini', 'FrontendController@web_beritaterkini')->name('beritaterkini.web');
Route::get('/allberitaterkini', 'FrontendController@list_beritaterkini')->name('beritaterkini.list');
Route::get('/gambar', 'FrontendController@data_gambar')->name('gambar.data');
Route::post('/announcement', 'FrontendController@web_pengumuman')->name('pengumuman.web');

//get detail page
Route::get('/page/{urlext}/{id}/{title}', 'FrontendController@detail_post_page')->name('detail.page');
// Route::get('/page', 'FrontendController@detail_post_page')->name('detail.page');
Route::post('/page/detail', 'FrontendController@detail_post')->name('detail.data');

Route::get('/annoouncement/{title}', 'FrontendController@detail_announcement_page')->name('detail.announ');
Route::post('/announcement/detail', 'FrontendController@detail_announcement')->name('detail.ann');
Route::get('/dashboard', 'BackendController@index')->name('dashboard');

Route::get('/berita-terkini', 'BeritaTerikiniController@index')->name('berita_terkini_page');
Route::get('/berita-terkini/create', 'BeritaTerikiniController@create')->name('berita_terkini_create');
Route::get('/berita-terkini/update-page/{id}', 'BeritaTerikiniController@update_page')->name('berita_terkini_update');
Route::post('/berita-terkini/data', 'BeritaTerikiniController@data_berita_terkini')->name('beritaterkini.data');
Route::post('/berita-terkini/save', 'BeritaTerikiniController@save')->name('beritaterkini.save');
Route::post('/berita-terkini/update', 'BeritaTerikiniController@update')->name('beritaterkini.update');
Route::delete('/berita-terkini/delete', 'BeritaTerikiniController@destroy')->name('beritaterkini.delete');

//pengumuman
Route::get('/pengumuman', 'PengumumanController@index')->name('pengumuman_page');
Route::get('/pengumuman/create', 'PengumumanController@create')->name('pengumuman_create');
Route::get('/pengumuman/update-page/{id}', 'PengumumanController@update_page')->name('pengumuman_update');
Route::post('/pengumuman/data', 'PengumumanController@data_pengumuman')->name('pengumuman.data');
Route::post('/pengumuman/save', 'PengumumanController@save')->name('pengumuman.save');
Route::post('/pengumuman/update', 'PengumumanController@update')->name('pengumuman.update');
Route::delete('/pengumuman/delete', 'PengumumanController@destroy')->name('pengumuman.delete');

//Image
Route::get('/image', 'GalleryController@index')->name('image_page');
Route::get('/image/create', 'GalleryController@create')->name('image_create');
Route::get('/image/update-page/{id}', 'GalleryController@update_page')->name('image_update');
Route::post('/image/data', 'GalleryController@data_image')->name('image.data');
Route::post('/image/save', 'GalleryController@save')->name('image.save');
Route::post('/image/update', 'GalleryController@update')->name('image.update');
Route::delete('/image/delete', 'GalleryController@destroy')->name('image.delete');

Route::get('/tags', 'BeritaTerikiniController@select_tags')->name('select.tags');
Route::get('/category', 'BeritaTerikiniController@select_category')->name('select.category');
