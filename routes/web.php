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

Route::prefix('admin')->namespace('Admin')->middleware('cek.admin', 'cek')->group(function(){
    Route::get('/', 'AdminController@index');
    Route::get('/help', 'ProfileController@help')->name('helpadmin');
    Route::get('/cetak/{id}', 'TallentController@cetak_pdf')->name('admin.tallent.cetak');
    Route::patch('/reset/{id}', 'ProfileController@resetPass')->name('admin.reset.pass');
    Route::get('/deleteusers/{id}', 'UsersController@destroy')->name('admin.users.delete');
    Route::get('/getpegawai', 'PegawaiController@dataTables')->name('admin.pegawai.get');
    Route::resource('users' , 'UsersController',['as' => 'admin']);
    Route::resource('pegawai' , 'PegawaiController',['as' => 'admin']);
    Route::resource('unitkerja' , 'UnitKerjaController',['as' => 'admin']);
    Route::resource('jabatan' , 'JabatanController',['as' => 'admin']);
    Route::resource('unitbagian' , 'UnitBagianController',['as' => 'admin']);
    Route::resource('profile' , 'ProfileController',['as' => 'admin']);
    Route::resource('tallent' , 'TallentController',['as' => 'admin']);

});

Route::prefix('user')->namespace('User')->middleware('cek.user')->group(function(){
    Route::get('/', 'UserController@index');
    Route::get('/help', 'ProfileController@help')->name('helpuser');
    Route::get('/search', 'FilterController@filtertallent')->name('filtertallent');
    Route::get('/cartpegawai/{id}', 'CartController@addCart')->name('user.cart.add');
    Route::get('/deletecart/{id}', 'CartController@destroy')->name('user.cart.delete');
    Route::get('/cetak/{id}', 'TallentController@cetak_pdf')->name('user.tallent.cetak');
    Route::patch('/reset/{id}', 'ProfileController@resetPass')->name('user.reset.pass');
    Route::resource('profile' , 'ProfileController',['as' => 'user']);
    Route::resource('filter' , 'FilterController',['as' => 'user']);
    Route::resource('cart' , 'CartController',['as' => 'user']);
    Route::resource('tallent' , 'TallentController',['as' => 'user']);
    
});
