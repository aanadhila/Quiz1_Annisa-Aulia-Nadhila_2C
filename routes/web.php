<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Auth::routes();

Route::get('/Home', [PageController::class, 'home']);

Route::prefix('Program')->group(function(){
    Route::get('/Karir',function(){
        return view('karir', ['title' => '- Halaman Karir']);
    });
    Route::get('/Magang',function(){
        return view('magang', ['title' => '- Halaman Magang']);
    });
    Route::get('/Kunjungan-Industri',function(){
        return view('KunjunganIndustri', ['title' => '- Halaman Kunjungan Industri']);
    });
    });

Route::get('/Tentang', [PageController::class, 'about']);


