<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Dash\TrabajosComponent;
use App\Http\Livewire\Dash\CategoriasComponent;

// --------

// FrontEnd

//Route::view('/', 'site.index')->name('site.home');
Route::get('/', [SiteController::class, 'index'])->name('site.home');
Route::view('empresa', 'site.empresa')->name('site.empresa');
Route::redirect('empresa.php', 'empresa');


// BackEnd

Route::prefix('dashboard')->group(function(){

    Route::get('/', function () {
        return redirect()->route('dash.trabajos');
    })->name('dashboard');

    Route::get('trabajos', TrabajosComponent::class)->middleware(['auth'])->name('dash.trabajos');
    Route::get('categorias', CategoriasComponent::class)->middleware(['auth'])->name('dash.categorias');

});

require __DIR__.'/auth.php';


Route::get('slink', function () {
    Artisan::call('storage:link');
});