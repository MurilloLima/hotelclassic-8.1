<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('site.index');
Route::get('sobre/', [HomeController::class, 'about'])->name('site.about');
Route::get('acomodacoes/', [HomeController::class, 'accommodations'])->name('site.accommodations');
Route::get('eventos/', [HomeController::class, 'events'])->name('site.events');
Route::get('contatos/', [HomeController::class, 'contact'])->name('site.contact');