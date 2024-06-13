<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda.beranda');
})->name('beranda');

Route::get('/profil', function () {
    return view('profil.profil');
})->name('profil');

Route::get('/galeri', function () {
    return view('galeri.galeri');
})->name('galeri');

Route::get('/ekstrakulikuler', function () {
    return view('ekstrakulikuler.ekstrakulikuler');
})->name('ekstrakulikuler');

Route::get('/jurusan', function () {
    return view('jurusan.jurusan');
})->name('jurusan');

