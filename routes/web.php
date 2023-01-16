<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Dash\TrabajosComponent;
use App\Http\Livewire\Dash\CategoriasComponent;

// FrontEnd

Route::get('/', [SiteController::class, 'index'])->name('site.home');
Route::get('empresa', [SiteController::class, 'empresa'])->name('site.empresa');
Route::redirect('empresa.php', 'empresa');
Route::get('servicios', [SiteController::class, 'servicios'])->name('site.servicios');
Route::redirect('servicios.php', 'servicios');

Route::get('reformas-casas', [SiteController::class, 'serviciosReDeCa'])->name('site.servicios.reforma-de-casas');
Route::redirect('reformas-casas.php', 'reformas-casas');
Route::get('oficinas-locales', [SiteController::class, 'serviciosOfyLo'])->name('site.servicios.oficinas-y-locales');
Route::redirect('oficinas-locales.php', 'oficinas-locales');
Route::get('fachadas', [SiteController::class, 'serviciosFacha'])->name('site.servicios.fachadas');
Route::redirect('fachadas.php', 'fachadas');
Route::get('instalaciones-electricas', [SiteController::class, 'serviciosElec'])->name('site.servicios.electricidad');
Route::redirect('instalaciones-electricas.php', 'instalaciones-electricas');

Route::get('ultimos-trabajos', [SiteController::class, 'trabajos'])->name('site.trabajos');
Route::redirect('ultimostrabajos.php', 'ultimos-trabajos');
Route::get('garantia', [SiteController::class, 'garantia'])->name('site.garantia');
Route::redirect('garantia.php', 'garantia');
Route::get('contacto', [SiteController::class, 'contacto'])->name('site.contacto');
Route::redirect('contacto.php', 'contacto');

// BackEnd

Route::prefix('dashboard')->group(function(){

    Route::get('/', function () {
        return redirect()->route('dash.trabajos');
    })->name('dashboard');

    Route::get('trabajos', TrabajosComponent::class)->middleware(['auth'])->name('dash.trabajos');
    Route::get('categorias', CategoriasComponent::class)->middleware(['auth'])->name('dash.categorias');

});

// Autenticación

require __DIR__.'/auth.php';







Route::get('slink', function () {
    Artisan::call('storage:link');
});