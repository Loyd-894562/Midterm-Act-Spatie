<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/clients',[ClientController::class, 'index']);
    Route::get('/clients/create', [ClientController::class, 'create']);
    Route::post('/clients', [ClientController::class, 'store']);

    Route::middleware('can:manage-suppliers')->group(function(){
    Route::get('/suppliers/create', [SupplierController::class, 'create']);
    Route::post('/suppliers', [SupplierController::class, 'store']);
    Route::get('/suppliers/edit/{suppliers}', [SupplierController::class, 'edit']);
    Route::put('/suppliers/{suppliers}',[SupplierController::class, 'update']);
    Route::delete('/suppliers/{suppliers}', [SupplierController::class, 'destroy']);
    });

    Route::get('/suppliers', [SupplierController::class, 'index']);
    Route::get('/suppliers/{suppliers}',[SupplierController::class, 'show']);

    Route::middleware('can:manage-products')->group(function(){
    Route::get('/products/create', [ProductController::class, 'create']);
    Route::post('/products', [ProductController::class, 'store']);
    Route::get('/products/edit/{products}', [ProductController::class, 'edit']);
    Route::put('/products/{products}',[ProductController::class, 'update']);
    Route::delete('/products/{products}', [ProductController::class, 'destroy']);
    });

    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/products/{products}',[ProductController::class, 'show']);

    Route::middleware('can:manage-users')->group(function(){
        Route::get('/users', [UserController::class, 'index']);
        Route::get('/users/create', [UserController::class, 'create']);
        Route::post('/users', [UserController::class, 'store']);
        Route::get('/users/edit/{users}', [UserController::class, 'edit']);
        Route::put('/users/{users}',[UserController::class, 'update']);
        Route::delete('/users/{users}', [UserController::class, 'destroy']);
        Route::get('/users/{users}',[UserController::class, 'show']);
        });
    
        
});

require __DIR__.'/auth.php';
