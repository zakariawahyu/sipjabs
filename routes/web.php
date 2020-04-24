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

Route::group(['middleware' => ['web']], function () {
    Auth::routes();
});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/', function () {
   if(Auth::user()->role == 'admin') {
        return redirect('admin');
    }elseif (Auth::user()->role == 'user') {
        return redirect('user');
    } else {
        return redirect('login');
    }
    });
});

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@proses_login');
Route::get('/logout', 'LoginController@logout')->name('logout')->middleware('cek');

Route::prefix('admin')->middleware('cek.admin', 'cek')->group(function(){
    Route::get('/', 'Admin\AdminController@index');
     Route::get('/help', 'Admin\ProfileController@help')->name('helpadmin');
    Route::resource('users' , 'Admin\UsersController',['as' => 'admin']);
    Route::resource('pegawai' , 'Admin\PegawaiController',['as' => 'admin']);
    Route::resource('unitkerja' , 'Admin\UnitKerjaController',['as' => 'admin']);
    Route::resource('jabatan' , 'Admin\JabatanController',['as' => 'admin']);
    Route::resource('unitbagian' , 'Admin\UnitBagianController',['as' => 'admin']);
    Route::resource('profile' , 'Admin\ProfileController',['as' => 'admin']);

});

Route::prefix('user')->middleware('cek.user')->group(function(){
    Route::get('/', 'User\UserController@index');
    Route::get('/help', 'User\ProfileController@help')->name('helpuser');
    Route::get('/search', 'User\FilterController@filtertallent')->name('filtertallent');
    Route::resource('profile' , 'User\ProfileController',['as' => 'user']);
    Route::resource('filter' , 'User\FilterController',['as' => 'user']);
    
});
