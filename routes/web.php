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
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class, 'home' ]);

//route prefix
Route::prefix('category')->group(function(){
    Route::get('/marbel-edu-games', function(){
        return 'Ini Adalah Halaman Kategori Marbel Education Games';
    });
    Route::get('/marbel-and-friends-kids-games', function(){
        return 'Ini Adalah Halaman Kategori marbel and friends kids games';
    });
    Route::get('/riri-story-books', function(){
        return 'Ini Adalah Halaman Kategori riri story books';
    });
    Route::get('/kolak-kids-songs', function(){
        return 'Ini Adalah Halaman Kategori kolak kids songs';
    });
});

//route parameter
route::get('/news/{berita}',[NewsController::class, 'news']);

//route prefix
Route::prefix('program')->group(function(){
    Route::get('/karir', function(){
        return 'Halaman Karir';
    });
    Route::get('/magang', function(){
        return 'Halaman Magang';
    });
    Route::get('/Kunjungan-Industri', function(){
        return 'Halaman Kunjungan Industri';
    });
    
});

use App\Http\Controllers\AboutController;
//route biasa
Route::get('/about-us',[AboutController::class,'about']);

use App\Http\Controllers\ContactController;
Route::resource('/contact-us', ContactController::class,[
    'only'=>['index','create','store']
]);