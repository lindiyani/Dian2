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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tuan', function () {
    return view("mark");
});

Route::get('/testmodel', function () {
	$query =App\post::all();
    return $query;
});

Route::get('/tugassiswa', function () {
	$query1 =App\anggota::all();
    return $query1;
});

Route::get('/mama', function () {
	$query1 =App\siswa::all();
    return $query1;
});

Route::get('/lala', function () {
	return view("lll");
});
 


