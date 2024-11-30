<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.landing-page');
})->name('home');

Route::get('/tentang-kami', function () {
    return view('pages.about');
})->name('about');

// Product
Route::get('/hbim', function () {
    return view('pages.products.hbim');
})->name('hbim');

Route::get('/point-clouds', function () {
    return view('pages.products.point-clouds');
})->name('point-clouds');

Route::get('/plan-section', function () {
    return view('pages.products.plan-section');
})->name('plan-section');

// Sites
Route::get('/situs-museum-sejarah', function () {
    return view('pages.sites.m-sejarah');
})->name('situs.museum-sejarah');

Route::get('/situs-museum-seni-rupa-dan-keramik', function () {
    return view('pages.sites.m-seni-rupa');
})->name('situs.museum-seni-rupa-dan-keramik');

Route::get('/situs-museum-tekstil', function () {
    return view('pages.sites.m-tekstil');
})->name('situs.museum-tekstil');

Route::get('/situs-museum-wayang', function () {
    return view('pages.sites.m-wayang');
})->name('situs.museum-wayang');

Route::get('/situs-museum-bahari', function () {
    return view('pages.sites.m-bahari');
})->name('situs.museum-bahari');

// Archive
Route::get('/arsip-sejarah', function () {
    return view('pages.archives.histories.index');
})->name('arsip.sejarah');

// Sub Archive History
Route::get('/arsip-museum-sejarah', function () {
    return view('pages.archives.histories.m-sejarah');
})->name('arsip.museum-sejarah');

Route::get('/arsip-museum-tekstil', function () {
    return view('pages.archives.histories.m-tekstil');
})->name('arsip.museum-tekstil');

Route::get('/arsip-museum-seni-rupa-dan-keramik', function () {
    return view('pages.archives.histories.m-seni-rupa');
})->name('arsip.museum-seni-rupa-dan-keramik');

Route::get('/arsip-museum-wayang', function () {
    return view('pages.archives.histories.m-wayang');
})->name('arsip.museum-wayang');

Route::get('/arsip-museum-bahari', function () {
    return view('pages.archives.histories.m-bahari');
})->name('arsip.museum-bahari');

Route::get('/arsip-referensi', function () {
    return view('pages.archives.references.index');
})->name('arsip.referensi');

Route::get('/sumber-referensi', function () {
    return view('pages.archives.references.sumber-referensi');
})->name('sumber.referensi');

Route::get('/literatur-sejarah', function () {
    return view('pages.archives.references.literatur-sejarah');
})->name('literatur.sejarah');

// Glosarium
Route::get('/glosarium', function () {
    return view('pages.archives.glosarium.index');
})->name('arsip.glosarium');

// State of Conservations
Route::get('/keadaan-bangunan', function () {
    return view('pages.state-of-conservations.index');
})->name('keadaan-bangunan.index');

Route::get('/keadaan-bangunan-museum-sejarah', function () {
    return view('pages.state-of-conservations.m-sejarah');
})->name('keadaan-bangunan.museum-sejarah');

Route::get('/keadaan-bangunan-museum-tekstil', function () {
    return view('pages.state-of-conservations.m-tekstil');
})->name('keadaan-bangunan.museum-tekstil');

Route::get('/keadaan-bangunan-museum-seni-rupa-dan-keramik', function () {
    return view('pages.state-of-conservations.m-seni-rupa');
})->name('keadaan-bangunan.museum-seni-rupa-dan-keramik');

Route::get('/keadaan-bangunan-museum-wayang', function () {
    return view('pages.state-of-conservations.m-wayang');
})->name('keadaan-bangunan.museum-wayang');

Route::get('/keadaan-bangunan-museum-bahari', function () {
    return view('pages.state-of-conservations.m-bahari');
})->name('keadaan-bangunan.museum-bahari');

Route::get('/test', function () {
    return view('pages.test');
})->name('test');

Route::get('/test', function () {
    return view('pages.test',['clientId' => env('AUTODESK_CLIENT_ID'),'clientSecret' => env('AUTDOESK_CLIENT_SECRET')]);
});
