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
Route::get('/list-pengumuman', 'FrontendController@announcement_list')->name('pengumuman.listpage');
Route::get('/prodi', 'FrontendController@prodi_show')->name('prodi_show');
Route::get('/sarjana', 'FrontendController@sarjana_show')->name('sarjana_show');
Route::get('/diploma', 'FrontendController@diploma_show')->name('diploma_show');
Route::get('/detail/prodi/{id}', 'FrontendController@detail_prodi_show')->name('detail_prodi_show');


//load data front
Route::post('/beritaterkini', 'FrontendController@web_beritaterkini')->name('beritaterkini.web');
Route::get('/allberitaterkini', 'FrontendController@list_beritaterkini')->name('beritaterkini.list');
Route::get('/allpengumuman', 'FrontendController@list_pengumuman')->name('pengumuman.list');
Route::get('/gambar', 'FrontendController@data_gambar')->name('gambar.data');
Route::post('/announcement', 'FrontendController@web_pengumuman')->name('pengumuman.web');

//get detail page
Route::get('/page/{urlext}/{id}/{title}', 'FrontendController@detail_post_page')->name('detail.page');
// Route::get('/page', 'FrontendController@detail_post_page')->name('detail.page');
Route::get('/page/detail', 'FrontendController@detail_post')->name('detail.data');

Route::get('/announcement/{id}', 'FrontendController@detail_announcement_page')->name('detail.announ');
Route::post('/announcement/detail', 'FrontendController@detail_announcement')->name('detail.ann');
Route::get('/dashboard', 'BackendController@index')->name('dashboard');

Route::get('/berita-terkini', 'BeritaTerikiniController@index')->name('berita_terkini_page');
Route::get('/berita-terkini/create', 'BeritaTerikiniController@create')->name('berita_terkini_create');
Route::get('/berita-terkini/update-page/{id}', 'BeritaTerikiniController@update_page')->name('berita_terkini_update');
Route::post('/berita-terkini/data', 'BeritaTerikiniController@data_berita_terkini')->name('beritaterkini.data');
Route::post('/berita-terkini/save', 'BeritaTerikiniController@save')->name('beritaterkini.save');
Route::post('/berita-terkini/update/{id}', 'BeritaTerikiniController@update')->name('beritaterkini.update');
Route::get('/berita-terkini/delete/{id}', 'BeritaTerikiniController@delete')->name('beritaterkini.delete');

//pengumuman
Route::get('/pengumuman', 'PengumumanController@index')->name('pengumuman_page');
Route::get('/pengumuman/create', 'PengumumanController@create')->name('pengumuman_create');
Route::get('/pengumuman/update-page/{id}', 'PengumumanController@update_page')->name('pengumuman_update');
Route::post('/pengumuman/data', 'PengumumanController@data_pengumuman')->name('pengumuman.data');
Route::post('/pengumuman/save', 'PengumumanController@save')->name('pengumuman.save');
Route::post('/pengumuman/update/{id}', 'PengumumanController@update')->name('pengumuman.update');
Route::get('/pengumuman/delete/{id}', 'PengumumanController@delete')->name('pengumuman.delete');

//Image
Route::get('/image', 'GalleryController@index')->name('image_page');
Route::get('/image/create', 'GalleryController@create')->name('image_create');
Route::get('/image/update-page/{id}', 'GalleryController@update_page')->name('image_update');
Route::post('/image/data', 'GalleryController@data_image')->name('image.data');
Route::post('/image/save', 'GalleryController@save')->name('image.save');
Route::post('/image/update', 'GalleryController@update')->name('image.update');
Route::get('/image/delete/{id}', 'GalleryController@delete')->name('image.delete');

//pmb
Route::get('/pmb', 'PmbController@index')->name('pmb_page');
Route::post('/pmb/data', 'PmbController@data_pmb')->name('pmb.data');
Route::get('/pmb/update-page/{id}', 'PmbController@update_page')->name('pmb_update');
Route::post('/pmb/update/{id}', 'PmbController@update')->name('pmb.update');

//prodi
Route::get('/admin/prodi', 'ProdiController@index')->name('prodi_page');
Route::post('/admin/prodi_data', 'ProdiController@data_prodi')->name('prodi.data');
Route::get('/admin/prodi_create', 'ProdiController@create')->name('prodi.create');
Route::post('/admin/prodi_save', 'ProdiController@save')->name('prodi.save');
Route::get('/admin/prodi_edit/{id}', 'ProdiController@update_page')->name('prodi.edit');
Route::post('/admin/prodi_update/{id}', 'ProdiController@update')->name('prodi.update');
Route:: get('/admin/prodi_delete/{id}', 'ProdiController@delete')->name('prodi.delete');

// get data

Route::get('/tags', 'BeritaTerikiniController@select_tags')->name('select.tags');
Route::get('/category', 'BeritaTerikiniController@select_category')->name('select.category');
