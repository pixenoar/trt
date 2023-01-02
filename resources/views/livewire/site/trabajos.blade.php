<div>

    <div class="row g-4 g-lg-5">
        @foreach($trabajos as $trabajo)
            <div class="col-lg-4">
                <div class="card shadow-sm border-0 rounded-0 h-100">
                    <a href="#modalTrabajo" wire:click="verTrabajo({{ $trabajo->id }})" data-bs-toggle="modal">
                        <div class="position-relative">
                            @if($trabajo->fotos->count())
                                <img src="{{ Storage::url($trabajo->fotos->sortBy('orden')->first()->path) }}" class="card-img-top rounded-0" alt="{{ $trabajo->nombre }}">
                            @endif
                            <div class="position-absolute bottom-0 start-0 p-3">
                                <a class="btn btn-light btn-sm shadow-sm" href="#" role="button">{{ $trabajo->categoria->nombre }}</a>
                            </div>
                        </div>
                    </a>
                    <div class="card-body py-4">
                        <a href="#modalTrabajo" wire:click="verTrabajo({{ $trabajo->id }})" data-bs-toggle="modal" class="text-decoration-none">
                            <h4 class="h5">{{ $trabajo->nombre }}</h4>
                        </a>
                        <p class="text-muted mb-0">{{ Str::of($trabajo->descripcion)->limit(84) }}</p>
                    </div>
                </div>
            </div>       
        @endforeach
    </div>

    @include('site.modal-trabajo')

</div>