<?php

use App\Http\Controllers\NoteController;
use App\Livewire\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class)->name('login');

Route::middleware('auth')->group(function () {
  Route::get('/', [NoteController::class, 'index']);
  Route::get('/note/{id}', [NoteController::class, 'show']);
  Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
  });
});

