<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\MainController;


/****
 *  Original Home (from Laravel)
 */
//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});

//
//Route::get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});



//// Example
//Route::get('/example', function() {
//    return Inertia::render('Example');
//})->middleware(['auth', 'verified'])->name('example');

// Counter (without auth)


/***
 *  New Web Routes from Monica
 */
//Route::get('/', [MainController::class, 'home'])->name('home');
//
//Route::get('/about', [MainController::class, 'about'])->name('about');
//
//Route::get('/services', [MainController::class, 'services'])->name('services');
//
//Route::get('/faq', [MainController::class, 'faq'])->name('faq');
//Route::get('/contact', [MainController::class, 'contact'])->name('contact');
//
//



Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/about', function () {
    return Inertia::render('About');
});

Route::get('/services', function () {
    return Inertia::render('Services');
});

Route::get('/faq', function () {
    return Inertia::render('Faq');
});

Route::get('/contact', function () {
    return Inertia::render('Contact');
});




require __DIR__.'/auth.php';
