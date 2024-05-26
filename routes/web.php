<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentification;
use App\Http\Controllers\ClientController;



Route::resource('clients', ClientController::class);
Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.delete');
Route::delete('/clients/{client}', [ClientController::class, 'destroy'])->name('clients.destroy');


// Route::middleware('auth')->group(function () {

// });
Route::get('/admin',[authentification::class,function(){
    return view('authentification');
}])->name('affichier_page_auth_admin');
Route::post('/admin',[authentification::class,"Login"])->name('Login_admin');
Route::middleware('auth')->group(function(){
});
Route::view('/', 'dashboard');