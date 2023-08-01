<?php

use App\Http\Controllers\TeamRedirectController;
use Illuminate\Support\Facades\Route;


//create routes view for home about and other pages
// Route::view('/','pages/home')->name('home');
// Route::view('/about','pages/about')->name('about');
// Route::view('/internships','pages/internships')->name('internships');
// Route::view('/services','pages/services')->name('services');

Route::get('/', [TeamRedirectController::class, "redirectWebsite"]);

Route::get('/{id}', [TeamRedirectController::class, "redirectMembers"]);
Route::get('/dept/{id}', [TeamRedirectController::class, "redirectDepartments"]);
