<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laprak2', function () {
    return view('about', [
        "name" => "Nama: Innaiya azkiya H",
        "email" => "Email: innaiyaxxx@mail.com",
        "alamat" => "Alamat: Solok, sumatera barat",
        "prodi" => "Program Studi: Teknologi rekayasa perangkat lunak"

    ]);
});
