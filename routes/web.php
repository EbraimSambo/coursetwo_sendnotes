<?php

use App\Livewire\Notes\Create;
use App\Livewire\Notes\Edit;
use App\Livewire\Notes\Index;
use App\Livewire\Notes\SingleNotes;
use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('notes', Index::class)
    ->middleware(['auth'])
    ->name('notes');

Route::get('create', Create::class)
    ->middleware(['auth'])
    ->name('notes.create');

Route::get('show/{slug}', SingleNotes::class)
    ->middleware(['auth'])
    ->name('show');

Route::get('edit/{slug}/edit', Edit::class)
    ->middleware(['auth'])
    ->name('edit');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
