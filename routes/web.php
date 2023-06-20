<?php

use Illuminate\Support\Facades\Route;


//create routes view for home about and other pages
Route::view('/','pages/home')->name('home');
Route::view('/about','pages/about')->name('about');
Route::view('/internships','pages/internships')->name('internships');
Route::view('/services','pages/services')->name('services');
