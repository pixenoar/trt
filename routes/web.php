<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Dash\ArticulosComponent;
use App\Http\Livewire\Dash\CategoriasComponent;

// --------

// FrontEnd

Route::view('/', 'site.index')->name('site.home');
Route::view('la-empresa', 'site.la-empresa')->name('site.home');


// BackEnd

Route::prefix('dashboard')->group(function(){

    Route::get('/', function () {
        return redirect()->route('dash.articulos');
    })->name('dashboard');

    Route::get('articulos', ArticulosComponent::class)->middleware(['auth'])->name('dash.articulos');
    Route::get('categorias', CategoriasComponent::class)->middleware(['auth'])->name('dash.categorias');

});

require __DIR__.'/auth.php';


Route::get('slink', function () {
    Artisan::call('storage:link');
});