<div>

    @if($trabajos->count())

        <section>
            <div class="container-fluid bg-section py-4 py-lg-5">
                <div class="container py-4 py-lg-5">
                    <h3 class="h4 fw-black text-center mb-5">ÚLTIMOS TRABAJOS EN <span class="text-primary">{{ Str::upper($moCategoria->nombre) }}</span></h3>

                    <div class="row justify-content-center g-4">
                        @foreach($trabajos as $trabajo)
                            <div class="col-lg-4">
                                <div class="card shadow-sm rounded-0 h-100">
                                    <a href="#modalTrabajo" wire:click="verTrabajo({{ $trabajo->id }})" data-bs-toggle="modal">
                                        @if($trabajo->fotos->count())
                                            <img src="{{ Storage::url($trabajo->fotos->sortBy('orden')->first()->path) }}" class="card-img-top rounded-0" alt="{{ $trabajo->nombre }}">
                                        @endif
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

                </div>
            </div>
        </section>

        @include('site.modal-trabajo')

    @endif

</div>