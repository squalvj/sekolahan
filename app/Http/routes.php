<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/siswa/register', 'crud@index');

Route::resource('siswa', 'crud');
Route::auth();
Route::get('/home', 'HomeController@index');

Route::get('/login', function() {
 
    $auth = Auth::guard('siswa'); // Atau \Auth::guard('doctor')
 
    $credentials = [
        'nip' =>  '04324321', // Nomor Induk Pegawai
        'password' =>  'sate',
    ];
 
    if ($auth->attempt($credentials)) {
        return 'Yay! Berhasil login (^o^)/';
    }
 
    return 'Gagal login.';
 
});