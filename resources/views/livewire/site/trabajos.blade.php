<div>

    <div wire:loading.remove wire:target="setCategoria">
        <div class="row g-4 g-lg-5">
            @foreach($trabajos as $trabajo)
                <div class="col-lg-4">
                    <div class="card shadow-sm border-0 h-100">
                        <a href="">
                            <div class="position-relative">
                                <img src="{{ asset('img/servicio.jpg') }}" class="card-img-top" alt="{{ $trabajo->nombre }}">
                                <div class="position-absolute bottom-0 start-0 p-3">
                                    <a class="btn btn-light btn-sm" href="#" role="button">{{ $trabajo->categoria->nombre }}</a>
                                </div>
                            </div>
                        </a>
                        <div class="card-body py-4">
                            <a href="" class="text-decoration-none">
                                <h4 class="h5">{{ $trabajo->nombre }}</h4>
                            </a>
                            <p class="text-muted mb-0">{{ $trabajo->descripcion }}</p>
                        </div>
                    </div>
                </div>       
            @endforeach
        </div>
    </div>

</div>