<div>

    <div wire:loading.remove wire:target="setCategoria">
        <div class="row g-4 g-lg-5">
            @foreach($articulos as $articulo)
                <div class="col-lg-4">
                    <div class="card shadow-sm border-0 h-100">
                        <a href="">
                            <div class="position-relative">
                                <img src="{{ asset('img/servicio.jpg') }}" class="card-img-top" alt="{{ $articulo->titulo }}">
                                <div class="position-absolute bottom-0 start-0 p-3">
                                    <a class="btn btn-light btn-sm" href="#" role="button">{{ $articulo->categoria->nombre }}</a>
                                </div>
                            </div>
                        </a>
                        <div class="card-body py-4">
                            <a href="" class="text-decoration-none">
                                <h4 class="h5">{{ $articulo->titulo }}</h4>
                            </a>
                            
                            <p class="text-muted mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>       
            @endforeach
        </div>
    </div>

</div>