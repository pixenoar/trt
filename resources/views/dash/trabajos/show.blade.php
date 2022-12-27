<div wire:ignore.self class="modal fade" id="modalShow" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalShowLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalShowLabel">Vista Previa</h5>
            </div>
            <div class="modal-body p-4">
                @if($moTrabajo)
                    <h3 class="fw-light">{{ $moTrabajo->nombre }}</h3>
                    <p class="fw-light mb-0">{{ $moTrabajo->descripcion }}</p>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" wire:click="$refresh('moTrabajo')" class="btn btn-dark mx-0" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>