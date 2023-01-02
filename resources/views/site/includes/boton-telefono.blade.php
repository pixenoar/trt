<div class="position-fixed bottom-0 end-0 me-4 me-lg-5 mb-4 mb-lg-5">
    <a href="#modalTelefono" data-bs-toggle="modal">
        <img src="{{ asset('img/svg/logo-telefono.svg') }}" alt="Teléfono">
    </a>
</div>

<div wire:ignore.self class="modal fade" id="modalTelefono" tabindex="-1" aria-labelledby="modalTelefonoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-0">

            <div class="modal-header border-0 justify-content-end">
                <a href="#" class="link-dark" data-bs-dismiss="modal"><i class="bi bi-x-lg fs-5"></i></a>
            </div>  
            
            <div class="modal-body">
                <div class="text-center">
                    <h2 class="fw-bold mb-0">+34 627 905 132</h3>
                    <span>Lun. a Vie. 10 a 20 hs.</span>
                    <a href="tel:+34627905132" class="btn btn-primary text-white fw-bold w-100 my-4" role="button">LLAMAR</a>
                    <p class="small">Por favor, si llama y no podemos contestar, intentelo de nuevo pasado unos minutos.</p>                    
                </div>

            </div>

        </div>
    </div>
</div>