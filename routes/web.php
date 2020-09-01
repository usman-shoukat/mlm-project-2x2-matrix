<?php

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

use Illuminate\Support\Facades\Hash;

Route::get('/', 'Controller@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/upliner', 'HomeController@upliner')->name('upliner');
Route::get('/reward', 'HomeController@reward')->name('reward');
Route::get('/wallet', 'HomeController@wallet')->name('wallet');
//-----------------------------------user add-----------------------//
Route::get('/user/add', 'UserController@create')->name('user.create');
Route::post('/user/create', 'UserController@store')->name('user.save');
//...................................admin route.....................//
Route::get('/token/add', 'TokenController@create')->name('token.create');
Route::post('/token/create', 'TokenController@store')->name('token.save');
Route::get('/alluser', 'TokenController@alluser')->name('all.user');
Route::get('/sreach', 'SearchController@search')->name('sreach');
//------------------------------------form download-----------------//
Route::get('/down', function() {
    $file = public_path() . "/Xhine Way Joining Form.pdf";
    $headers = array(
        'Content-Type: application/pdf',
    );
    return Response::download($file, 'Xhine Way Joining Form.pdf', $headers);

});
//------------------------------------password change-----------------------//
Route::get('/change-password', 'PasswordController@index')->name('change.password');
Route::post('/changePassword','PasswordController@changePassword')->name('changePassword');
//----------------------------------addbalances-------------//
Route::post('/add/{id}', 'UserController@addblns');
