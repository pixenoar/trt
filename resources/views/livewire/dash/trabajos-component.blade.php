<div>
    
    <div class="p-4 p-lg-5">
        
        <h5 class="fw-bold mb-3">Trabajos</h5>

        <div class="d-flex justify-content-between align-items-center">
            <div>
                <input type="text" class="form-control" id="busqueda" wire:model="busqueda" placeholder="buscar...">
            </div>
            <div>
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalCreate">Nuevo</button>
            </div>
        </div>

        <div class="card border-0 shadow-sm my-3">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Categoría</th>
                                <th scope="col">Creado</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($trabajos as $trabajo)
                                <tr @if(!$trabajo->estado) class="table-danger" @endif>
                                    <td>{{ $trabajo->nombre }}</td>
                                    <td>{{ $trabajo->categoria->nombre }}</td>
                                    <td>{{ $trabajo->created_at->format('d/m/Y H:i') }}</td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" wire:click="estado({{ $trabajo->id }})" @if($trabajo->estado) checked @endif>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" wire:click="show({{ $trabajo->id }})"  class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalShow"><i class="bi bi-eye"></i></button>
                                        <button type="button" wire:click="edit({{ $trabajo->id }})"  class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="bi bi-pencil"></i></button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No se encontraron trabajos</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>

        {{ $trabajos->links() }}


        @include('dash.trabajos.create')

        @include('dash.trabajos.edit')

        @include('dash.trabajos.show')

    </div>

</div>
