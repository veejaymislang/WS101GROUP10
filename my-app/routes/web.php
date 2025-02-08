<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User; // Import the User model

// Default welcome page
Route::get('/', function () {
    return view('welcome');
});

// Dashboard route with authentication and email verification
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes with authentication middleware
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes for other views
Route::view('/form', 'auth.register');
Route::view('/list', 'list');
Route::view('/contactus', 'contactus');
Route::view('/media', 'media');
Route::view('/blog', 'blog');
Route::view('/styling', 'styling');
Route::view('/services', 'services');


// Users route: Pass users data to the view
Route::get('/users', function () {
    $users = User::all(); // Retrieve all users from the database
    return view('users', compact('users')); // Pass users to the view
});

require __DIR__.'/auth.php';
