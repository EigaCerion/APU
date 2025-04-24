<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\Mothers\Index;
use App\Livewire\Mothers\Create;
use App\Livewire\Mothers\Edit;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});


Route::get('/ibu', Index::class)->name('mothers.index');
Route::get('/ibu/tambah', Create::class)->name('mothers.create');
Route::get('/ibu/edit/{id}', Edit::class)->name('mothers.edit');


require __DIR__.'/auth.php';
