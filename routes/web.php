<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentification;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminStore;

//accuiel
Route::get('/', function(){
    return view('accueil');
})->name('home');

//login_admin_page
    Route::get('/admin',[authentification::class,function(){
    return view('login_admin_page');
    }])->name('login_admin_page');
    Route::post('/admin',[authentification::class,"Login"])->name('login_admin');
    Route::get('/admin',[authentification::class,function(){
        return view('login_admin_page');
        }])->name('login_admin_page');
//admin_dashbord
    // Route::middleware('auth')->group(function () {
      Route::middleware('admin_store')->group(function () {
        Route::controller(AdminStore::class)->group(function () {
            Route::prefix('/admin_store')->group(function(){
            Route::get('/','index')->name('dashbord_admin_store');
            });
        });
       });
// });
//store
Route::prefix('/store')->group(function(){
    Route::get('/', function(){
        return view('store/Home');
    })->name('store_home');
    //geust_client
        //middleware
        Route::get('/login', function(){
        return view('store/Home');
    })->name('login_client');
        Route::get('/register', function(){
        return view('store/Home');
    })->name('register_client');
    //auth_client
        //midlleware
        Route::get('/profile', function(){
        return view('store/Home');
    })->name('login_client');
    
});








Route::resource('clients', ClientController::class);
Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.delete');
Route::delete('/clients/{client}', [ClientController::class, 'destroy'])->name('clients.destroy');
Route::get('/liste', [ClientController::class, 'index'])->name('clients');


// Route::middleware('auth')->group(function () {

// });

Route::middleware('auth')->group(function(){
});

