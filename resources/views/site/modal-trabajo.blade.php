<div wire:ignore.self class="modal fade" id="modalTrabajo" tabindex="-1" aria-labelledby="modalTrabajoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg ">
        <div class="modal-content border-0 rounded-0">

            <div class="modal-header border-0 justify-content-end">
                <a href="#" class="link-dark" data-bs-dismiss="modal"><i class="bi bi-x-lg fs-5"></i></a>
            </div>  
            
            
            <div class="modal-body p-0">
                @if($moTrabajo)

                    <div wire:loading.remove wire:target="verTrabajo">

                        <div id="galeria" class="carousel slide">
                            <div class="carousel-inner">
                                @foreach($moTrabajo->fotos->sortBy('orden') as $foto)
                                    <div class="carousel-item @if($loop->first) active @endif">
                                        <img src="{{ Storage::url($foto->path) }}" class="d-block w-100" alt="Foto">
                                    </div>
                                @endforeach   
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#galeria" data-bs-slide="prev">
                                <span class="bg-dark rounded p-2">
                                    <i class="bi bi-chevron-left fs-5"></i>
                                </span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#galeria" data-bs-slide="next">
                                <span class="bg-dark rounded p-2">
                                    <i class="bi bi-chevron-right fs-5"></i>
                                </span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            <div class="carousel-indicators">
                                @foreach($moTrabajo->fotos as $foto)
                                    <button type="button" data-bs-target="#galeria" data-bs-slide-to="{{ $loop->index }}" @if($loop->first) class="active" aria-current="true" @endif aria-label="Foto {{ $loop->index }}"></button>
                                @endforeach
                            </div>
                        </div>
                        <div class="p-4 p-lg-5">
                            <h4 class="fw-bold">{{ $moTrabajo->nombre }}</h1>
                            <p class="mb-0 text-muted">{{ $moTrabajo->descripcion }}</p>
                        </div>
                        

                    </div>

                    <div wire:loading.block wire:target="verTrabajo">
                        <div class="p-5 text-center">
                            <div class="spinner-border spinner-border-sm text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>                        
                        </div>
                    </div>
                @endif                    
            </div>

        </div>
    </div>
</div>