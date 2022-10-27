<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');


route::group(['middleware' => ['auth','ceklevel:user,admin,staf']], function () {
    Route::get('/redirect','DashboardController@redirect')->name('redirect');
    Route::get('/dashboard','DashboardController@dashboard_index')->name('dashboard');
    Route::get('/listpermohonan','DashboardController@list_permohonan')->name('listpermohonan');
    Route::get('/tracking','DashboardController@tracking_permohonan')->name('tracking');
    Route::get('/usulan','DashboardController@usulan')->name('usulan');
    Route::get('/datadev','DashboardController@datadev')->name('datadev');
    Route::get('/monitoring','DashboardController@monitoring')->name('monitoring');
    Route::get('/layanan','DashboardController@layanan')->name('layanan');
    Route::get('/liburnasional','DashboardController@liburnasional')->name('liburnasional');
    Route::get('/masterplane','DashboardController@masterplane')->name('masterplane');
    Route::get('/prosesizin','DashboardController@prosesizin')->name('prosesizin');
    Route::get('/role','DashboardController@role')->name('role');

    #Manajemen User
    Route::get('/user','UsersController@index')->name('user');
    Route::get('/input-user','UsersController@create')->name('input-user');
    Route::post('/save-user','UsersController@store')->name('save-user');
    Route::get('/edit-user/{id}','UsersController@edit')->name('edit-user');
    Route::post('/update-user/{id}','UsersController@update')->name('update-user');
    Route::get('/delete-user/{id}','UsersController@destroy')->name('delete-user');

    #Buat Permohonan
    Route::get('/buat-permohonan','PermohonanController@index')->name('buat-permohonan');
    Route::post('/simpan-permohonan','PermohonanController@store')->name('simpan-permohonan');

    #Data Permohonan (Staff Pemroses)
    Route::get('/data-permohonan','PermohonanController@index_staf')->name('data-permohonan');

    Route::get('/posisi','DashboardController@posisi')->name('posisi');
    Route::get('/datapemohon','DashboardController@datapemohon')->name('datapemohon');
    Route::get('/statistik','DashboardController@statistik')->name('statistik');
    Route::get('/helpdesk','DashboardController@helpdesk')->name('helpdesk');
    Route::get('/caridata','DashboardController@caridata')->name('caridata');
});

Auth::routes();


#reklame
Route::get('/reklame', function () {
    return view('Pages.reklame.index');
})->name('reklame');
#reklame

#blog
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{slug}', [BlogController::class, 'show'])->name('blog.detail');
#blog

#reklame
Route::get('/daftarorang', function () {
    return view('Pages.daftarorang');
})->name('daftarorang');
#reklame