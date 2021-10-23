<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Str;
use App\Http\Controllers\HomeController;
use App\Models\Bid;

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

Route::get('/','AuthController@index');
Route::post('/','AuthController@login')->name('login');
Route::post('/post-identitas','AuthController@post_identitas');
Route::get('/register','AuthController@register');
Route::post('/register','AuthController@proses_regist');
Route::get('/logout','AuthController@logout');
Route::get('/forgot-password','AuthController@forgot_password');
Route::post('/forgot-password','AuthController@kirim_forgot_password');
Route::get('/rubah-password/{email}/{token}','AuthController@rubah_password')->name('change-password');
Route::post('/rubah-password/{email}/{token}','AuthController@konf_rubah_password')->name('konf-change-password');
Route::get('/konfirmasi_email/{email}/{token}','AuthController@konfirmasi_email')->name('konfirmasi_email');



Route::group(['middleware' => 'auth'],function(){
    Route::group(['middleware' => 'checkrole:admin'], function (){
        Route::get('/dashboard','AdminController@index')->name('dashboard');
        Route::get('/data-user','AdminController@data_user')->name('data-user');
        Route::get('/data-user/delete/{id}','AdminController@delete_user')->name('delete-user');
        Route::get('/data-user/info/{id}','AdminController@info_user')->name('info-user');
        Route::post('/data-user/update','AdminController@update')->name('update-user');
        Route::get('/data-user/export_excel/','AdminController@export_user_excel');
        Route::get('/data-user/export_pdf/','AdminController@export_user_pdf');
        Route::get('/data-lelang','AdminController@lelang')->name('data-lelang');

        Route::get('/data-galery','AdminController@data_galery')->name('data-galery');
        Route::get('/data-galery/create-galery','AdminController@create_galery')->name('create-galery');
        Route::post('/data-galery/galery-store','AdminController@galery_store')->name('galery-store');
        Route::get('/data-galery/edit/{id}','AdminController@edit_galery')->name('edit_galery');
        Route::post('/data-galery/update/{id}','AdminController@update_galery')->name('galery-update');
        Route::get('/data-galery/delete/{id}','AdminController@delete_galery')->name('delete-galery');
        Route::get('/pesan-pengaduan','AdminController@pengaduan')->name('pesan-pengaduan');
        Route::get('/pesan-pengaduan/hapus/{id}','AdminController@hapus_pengaduan');
    });

    Route::group(['middleware' => 'checkrole:user,admin'], function(){
        Route::get('/profile','ProfileController@index')->name('profile');
        Route::get('/profile/edit-profile/{id}','ProfileController@edit_profile')->name('edit-profile');
        Route::post('/profile-update','ProfileController@profile_update')->name('profile-update');
        Route::get('/beranda/show-profile/{id}','ProfileController@show')->name('info-profile');
        Route::get('/beranda','HomeController@index')->name('beranda');
        Route::get('/beranda/{id}','HomeController@info')->name('info-lelang');
        Route::post('/beranda/bid','HomeController@bid')->name('proses-bid');
        Route::get('/history','HistoryController@index')->name('history');
        Route::get('/keranjang','KeranjangController@index')->name('keranjang');
        Route::get('/galery','GaleryController@index')->name('galery');
        Route::get('/lelangan','LelanganController@index')->name('lelangan');
        Route::get('/lelangan/create-lelang','LelanganController@create')->name('create-lelang');
        Route::post('/lelangan/store-lelang','LelanganController@store')->name('lelang-store');
        Route::get('/lelangan/delete/{id}','LelanganController@delete');
        Route::post('/lelangan/close','LelanganController@close');
        Route::get('/lelangan/open/{id}','LelanganController@open');
        Route::get('/lelangan/edit/{id}','LelanganController@edit');
        Route::get('/lelangan-close','LelanganController@data_close')->name('lelangan-close');
        Route::post('/lelangan/update','LelanganController@update');
        Route::get('/lelangan/export_excel/','LelanganController@export_excel');
        Route::get('/lelangan/export_pdf/','LelanganController@export_pdf');
        Route::get('/pengaduan','PengaduanController@index')->name('pengaduan');
        Route::post('/pengaduan','PengaduanController@store')->name('pengaduan-store');
        Route::get('/chat','ChatController@index')->name('chat');
    });
});
