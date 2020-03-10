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
    return view('Frontend.index');
});

Route::get('/event', 'FrontendController@event');
Route::get('/kategori/{kategori}', 'FrontendController@kategori');

Route::get('/blog', 'FrontendController@artikel');
Route::get('/blog/{blog}', 'FrontendController@singleartikel');

Route::get('/contact', function () {
    return view('Frontend.contact');
});
// Route::get('/single-artikel', function () {
//     return view('Frontend.single-artikel');
// });

Route::get('/event/{event}', 'FrontendController@singleevent');

Route::post('/contact-us', 'ContactController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/admin', function () {
//     return view('Backend.Admin.index');
// });

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', function () {
        return view('Backend.Admin.index');
    });
    Route::get('/artikel', 'ArtikelController@index');
    Route::get('/artikel/{id}/edit', 'ArtikelController@edit');
    Route::post('/artikel-store', 'ArtikelController@store');
    Route::get('/kategori', 'KategoriController@index');
    Route::post('/kategori-store', 'KategoriController@store');
    Route::get('/kategori/{id}/edit', 'KategoriController@edit');
    Route::get('/pesan-publik', 'ContactController@index');
    Route::get('/profile', function () {
        return view('Backend.Admin.Profil.profil');
    });
});
Route::get('event-kategori', 'KategoriController@index');

Route::group(['prefix' => 'penjual', 'middleware' => ['auth', 'role:member']], function () {
    Route::get('/', function () {
        return view('Backend.Penjual.index');
    });
    Route::get('/event', 'EventController@index');
    Route::post('/event-store', 'EventController@store');
    Route::get('/event/{id}/edit', 'EventController@edit');
    Route::get('/tiket/{id}/edit', 'TiketController@edit');
    Route::get('/tiket', 'TiketController@index');
    Route::get('/get-tiket', 'TiketController@event');
    Route::post('/tiket-store', 'TiketController@store');
});
