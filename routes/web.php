<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentification;

// Route::middleware('auth')->group(function () {

// });
Route::get('/admin',[authentification::class,function(){
    return view('authentification');
}])->name('affichier_page_auth_admin');
Route::post('/admin',[authentification::class,"Login"])->name('Login_admin');
