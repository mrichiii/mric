<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Halo Laravel';
});

Route::get('/about', function () {
    return 'Ini adalah halaman <b>about</b>';
});

Route::get('/mahasiswa', function () {
    return 'Ini adalah halaman <b>mahasiswa </b>';
});

Route::get('/profile', function () {
    $nama = 'Muhammad Richie Hadiansah';
    return 'Ini adalah halaman <b>profile</b>, nama saya adalah ' . $nama;
});