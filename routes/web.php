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




Route::get('reformas-casas', [SiteController::class, 'reformaDeCasas'])->name('site.servicios.reformadecasas');
Route::redirect('reformas-casas.php', 'reformas-casas');

Route::get('oficinas-locales', [SiteController::class, 'oficinasLocales'])->name('site.servicios.oficinasylocales');
Route::redirect('oficinas-locales.php', 'oficinas-locales');

Route::get('fachadas', [SiteController::class, 'fachadas'])->name('site.servicios.fachadas');
Route::redirect('fachadas.php', 'fachadas');

Route::get('instalaciones-electricas', [SiteController::class, 'electricidad'])->name('site.servicios.electricidad');
Route::redirect('instalaciones-electricas.php', 'instalaciones-electricas');

Route::get('hogar', [SiteController::class, 'pinturaDecoracion'])->name('site.servicios.pinturaydecoracion');
Route::redirect('hogar.php', 'hogar');

Route::get('forjado-acero-inox', [SiteController::class, 'forjadosAceros'])->name('site.servicios.forjadosyaceros');
Route::redirect('forjado-acero-inox.php', 'forjado-acero-inox');

Route::get('certificado-energetico-tenerife', [SiteController::class, 'certificadoEnergetico'])->name('site.servicios.certificadoenergetico');
Route::redirect('certificado-energetico-tenerife.php', 'certificado-energetico-tenerife');

Route::get('pladur', [SiteController::class, 'pladur'])->name('site.servicios.pladur');
Route::redirect('pladur.php', 'pladur');

Route::get('obra-nueva', [SiteController::class, 'obraNueva'])->name('site.servicios.obranueva');
Route::redirect('obra-nueva.php', 'obra-nueva');

Route::get('casas-madera', [SiteController::class, 'casasDeMadera'])->name('site.servicios.casasdemadera');
Route::redirect('casas-madera.php', 'casas-madera');


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