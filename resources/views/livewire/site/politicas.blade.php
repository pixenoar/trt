<div>
    @if(!$cookie)

        <div class="fixed-bottom bg-dark w-100 p-4">

            <div class="d-flex justify-content-center align-items-center">
                <div class="px-2">
                    <p class="text-white small mb-0">Utilizamos cookies de terceros para ofrecerte una mejor experiencia y servicio.</p>
                </div>
                <div class="px-2">
                    <button wire:click="aceptar" type="button" class="btn btn-primary btn-sm text-white">Aceptar</button>
                </div>
            </div>

        </div>

    @endif

</div>