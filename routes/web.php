<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

// Change the default route to point to the register page
Route::redirect('/', '/register')->name('home');

// Keep the dashboard route, but change it to redirect to /note
Route::get('/dashboard', function () {
    return redirect('/note');
})->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function(){
    Route::resource('note', NoteController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';