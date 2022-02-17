<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterController;
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




// Route::group(['middleware' => ['admin']],function(){
//     Route::get('/','HomeController@dashboard');

//     //karyawan
//     Route::get('/karyawan','KaryawanController@index');

//     //member
//     Route::get('/member','MemberController@index');
//     Route::get('/member/tambah','MemberController@tambah');
//     Route::post('/member/proses','MemberController@proses');
//     Route::get('/member/edit/{id_member}','MemberController@edit');
//     Route::post('/member/update/{id_member}','MemberController@update');
//     Route::get('/member/hapus/{id_member}','MemberController@hapus');


//     //kategori
//     Route::get('/kategori','KategoriController@kategori');
//     Route::get('/kategori/tambah','KategoriController@tambah');
//     Route::post('/kategori/proses','KategoriController@proses');
//     Route::get('/kategori/edit/{id_kategori}','KategoriController@edit');
//     Route::put('/kategori/update/{id_kategori}','KategoriController@update');
//     Route::get('/kategori/hapus/{id_kategori}','KategoriController@hapus');

//     //buku
//     Route::get('/buku','BookController@index');
//     Route::get('/buku/detail/{id_kategori}','BookController@detail');
//     Route::get('/buku/detail/tambah/{id_kategori}','BookController@tambah');
//     Route::get('/buku/detail/edit/{id_buku}','BookController@edit');
//     Route::post('/buku/detail/update/{id_buku}','BookController@update');
//     Route::post('/buku/proses','BookController@proses');

//     //peminjaman buku
//     Route::get('/peminjaman','PinjamController@index');
//     Route::get('/peminjaman/tambah','PinjamController@tambah');
//     Route::post('/peminjaman/proses','PinjamController@proses');
//     Route::get('ubah_status/{id_peminjaman}','PinjamController@update');
// });


Route::group(['middleware' => ['logged']],function(){
    Route::get('/login', 'AuthController@login');
    Route::get('/register', 'AuthController@register');
    Route::post('/register/proses', 'AuthController@proses');
    Route::post('/login/proses','AuthController@prosesLogin');
});
Route::get('logout','AuthController@logout');


Route::get('/','PortfolioController@index');
Route::post('kontak/proses','KontakController@proses');

Route::group(['middleware' => ['admin']],function(){
    Route::get('/dashboard','DashboardController@index');
    Route::get('/profil','ProfilController@index');

    Route::get('/skill','SkillController@index');
    Route::get('/skill/tambah','SkillController@tambah');
    Route::post('/skill/proses','SkillController@proses');
    Route::get('/skill/edit/{id}','SkillController@edit');
    Route::post('/skill/update/{id}','SkillController@update');
    Route::get('/skill/hapus/{id}','SkillController@hapus');

    Route::get('/pendidikan','PendidikanController@index');
    Route::get('/pendidikan/tambah','PendidikanController@tambah');
    Route::post('/pendidikan/proses','PendidikanController@proses');
    Route::get('/pendidikan/edit/{id_pendidikan}','PendidikanController@edit');
    Route::post('/pendidikan/update/{id_pendidikan}','PendidikanController@update');
    Route::get('/pendidikan/hapus/{id_pendidikan}','PendidikanController@hapus');

    Route::get('/pengalaman','PengalamanController@index');
    Route::get('/pengalaman/tambah','PengalamanController@tambah');
    Route::post('/pengalaman/proses','PengalamanController@proses');
    Route::get('/pengalaman/edit/{id_pengalaman}','PengalamanController@edit');
    Route::post('/pengalaman/update/{id_pengalaman}','PengalamanController@update');
    Route::get('/pengalaman/hapus{id_pengalaman}','PengalamanController@hapus');

    Route::get('/project','ProjectController@index');
    Route::get('/project/tambah','ProjectController@tambah');
    Route::post('/project/proses','ProjectController@proses');

    Route::get('/kontak','KontakController@index');
});