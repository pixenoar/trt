<div>

    <div class="d-none d-lg-block text-center mb-5">
        <button type="button" wire:click="setCategoria(0)" class="btn btn-sm @if($categoria_id == 0) btn-dark @else btn-outline-dark  @endif">Todos</button>
        @foreach($moCategorias as $categoria)
            <button type="button" wire:click="setCategoria({{ $categoria->id }})" class="btn btn-sm @if($categoria_id == $categoria->id) btn-dark @else btn-outline-dark  @endif">{{ $categoria->nombre }}</button>
        @endforeach
    </div>

    <div class="d-lg-none text-end mb-4">
        <div class="dropdown-right">
            <button type="button" class="btn btn-primary btn-sm text-white" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,8"><i class="bi bi-filter"></i></button>
            <!--<a href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-filter-circle-fill fs-2"></i></a>-->
            <ul class="dropdown-menu border-0 shadow">
                <li class="px-2"><a href="javascript:void(0)" wire:click="setCategoria(0)" class="dropdown-item small fw-light @if($categoria_id == 0) active rounded-1 @endif">Todos</a></li>
                @foreach($moCategorias as $categoria)
                    <li class="px-2"><a href="javascript:void(0)" wire:click="setCategoria({{ $categoria->id }})" class="dropdown-item small fw-light @if($categoria_id == $categoria->id) active rounded-1 @endif"">{{ $categoria->nombre }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

    <div wire:loading.block wire:target="setCategoria">
        <div class="d-flex justify-content-center my-5">
            <div class="spinner-border spinner-border-sm text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>                     
        </div>
    </div>

    <div wire:loading.remove wire:target="setCategoria">
        <div class="row g-4">
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
    
    <div class="text-center mt-5">
        <button type="button" wire:click="cargar" class="btn btn-primary btn-sm fw-bold text-white" wire:target="cargar" wire:loading.class="disabled">
            <div wire:loading.remove wire:target="cargar">
                MOSTRAR MÁS
            </div>                        
            <div wire:loading wire:target="cargar">
                <div class="spinner-border spinner-border-sm text-light" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </button>
    </div>

    @include('site.modal-trabajo')

</div>