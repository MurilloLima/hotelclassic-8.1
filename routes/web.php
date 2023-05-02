<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('site.index');
Route::get('sobre/', [HomeController::class, 'about'])->name('site.about');
Route::get('acomodacoes/', [HomeController::class, 'accommodations'])->name('site.accommodations');
Route::get('eventos/', [HomeController::class, 'events'])->name('site.events');
Route::get('contatos/', [HomeController::class, 'contact'])->name('site.contact');

Route::get('/dashboard', function () {
    return view('admin.pages.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
