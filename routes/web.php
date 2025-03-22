<?php
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/orders', function () {
    return view('orders');
})->middleware(['auth', 'verified'])->name('orders');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/orders', function () {
        return view('orders');
    })->name('orders');
    
    // Inventory Management Routes
    Route::get('/inventory', function () {
        return view('inventory.index');
    })->name('inventory');
    
    Route::get('/inventory/stock-in', function () {
        return view('inventory.stock-in');
    })->name('inventory.stock-in');
    
    Route::get('/inventory/stock-out', function () {
        return view('inventory.stock-out');
    })->name('inventory.stock-out');
    
    Route::get('/suppliers', function () {
        return view('suppliers');
    })->name('suppliers');
});

 
Route::resource('chirps', ChirpController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

require __DIR__.'/auth.php';
