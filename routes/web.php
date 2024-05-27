<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentification;
use App\Http\Controllers\Store\ClientCrudController;
use App\Http\Controllers\Equipe\admin_equipe_wac;
use App\Http\Controllers\Store\Admin_store;
use App\Http\Controllers\Store\Product_dashbord_controller;
use App\Http\Controllers\Store\CategorieController;
use App\Http\Controllers\Store\Commandes_dashbord_controller;
use App\Models\Product;

//accuiel//////////////////////////////////////////////////////////////////
Route::get('/', function(){
    return view('accueil');
})->name('home');
//login_admins///////////////////////////////////////////////////////////
Route::middleware('guest')->group(function(){
    Route::get('/admin',[authentification::class,function(){
       return view('login_admin_page');}])->name('login_admin_page');
    Route::post('/admin',[authentification::class,"Login"])->name('login_admin');
    Route::get('/admin',[authentification::class,function(){
        return view('login_admin_page');
        }])->name('login');
    });
//logout_admins////////////////////////////////////////////////////////////
Route::middleware(['auth','admins_logout'])->group(function () {
    Route::get('/logout_admins',[authentification::class,'logout_admins'])->name('logout_admins');
});
//admin_dashbord_store/////////////////////////////////////////////////////
        // midlleware_admin_store
    Route::middleware(['auth','admin_store'])->group(function () {
        Route::prefix('/admin_store')->group(function(){
            //crud_clients
            Route::controller(ClientCrudController::class)->group(function () {
               Route::get('/','dashboard')->name('dashbord_admin_store');
               Route::resource('clients', ClientCrudController::class);
                Route::delete('/clients/{id}', [ClientCrudController::class, 'destroy'])->name('clients.delete');
                Route::delete('/clients/{client}', [ClientCrudController::class, 'destroy'])->name('clients.destroy');
                Route::get('/liste', [ClientCrudController::class, 'index'])->name('clients');
            });
            //crud_product
            Route::resource('products',Product_dashbord_controller::class);
            //crud_commande
            Route::resource('commandes',Commandes_dashbord_controller::class);
            //profile_admin_crud
            Route::resource('profile',Admin_store::class);
            Route::post('/profile/password', [Admin_store::class, 'updatePassword'])->name('profile.updatePassword');
        });
       });
//Category
Route::middleware(['auth', 'admin_store'])->prefix('admin_store')->group(function () {
    // Index
    Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index');
    // Create
    Route::get('/categories/create', [CategorieController::class, 'create'])->name('categories.create');
    Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store');
    // Show
    Route::get('/categories/{categorie}', [CategorieController::class, 'show'])->name('categories.show');
    // Delete
    Route::delete('/categories/{categorie}', [CategorieController::class, 'destroy'])->name('categories.destroy');
});
//store(site web)////////////////////////////////////////////////////////
Route::prefix('/store')->group(function(){
    Route::get('/', function(){
        return view('store/site_web/user/login');
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
        Route::get('/profile', function(){
        return view('store/Home');
    })->name('display_profile');
    
});
//admin_dashbord_equiep_wac////////////////////////////////////////////////
 // midlleware_admin_equipe_wac
    Route::middleware(['auth','admin_equipe_wac'])->group(function(){
    Route::controller(admin_equipe_wac::class)->group(function () {
        Route::prefix('/admin_equipe_wac')->group(function(){
        Route::get('/','index')->name('dashbord_admin_wac');
        });
    });
});
//admin_dashbord_equiep_rca/////////////////////////////////////////////////
 // midlleware_admin_equipe_rca
 Route::middleware(['auth','admin_equipe_rca'])->group(function () {
    Route::controller(ClientCrudController::class)->group(function () {
        Route::prefix('/admin_equipe_rca')->group(function(){
        Route::get('/','index')->name('admin_equipe_rca');
        });
    });
   });
//equipe(site web)//////////////////////////////////////////////////////////////
// Route::middleware('auth')->group(function () {

// });
Route::get('/casadebrystore', function(){
    return view('store/site_web/index');
})->name('store_home');