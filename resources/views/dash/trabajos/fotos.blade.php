<div wire:ignore.self class="modal fade" id="modalFotos" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalFotosLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalFotosLabel">Fotos</h5>
            </div>
            <div class="modal-body p-4">
                @if($moTrabajo)
                <form wire:submit.prevent="storeFoto">
                    <div class="row g-3">
                        <div class="col-lg-12">
                            <div class="border rounded p-3">
                                <label for="foto" class="form-label">Adjuntar foto</label>
                                <input id="foto" type="file" wire:model.defer="foto" class="form-control @error('foto') is-invalid @enderror">
                                <div class="form-text">La orientación de la foto debe ser horizontal.</div>
                                @error('foto')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>  
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary text-white w-100" wire:target="storeFoto" wire:loading.class="disabled">
                                <div wire:loading.remove wire:target="storeFoto">
                                    Subir foto
                                </div>                        
                                <div wire:loading wire:target="storeFoto">
                                    Subiendo...
                                </div>
                            </button>
                        </div>                  
                    </div>
                </form>
                    <div class="table-responsive mt-5">
                        <table class="table table-striped align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($moTrabajo->fotos->sortBy('orden') as $foto)
                                    <tr>
                                        <td>
                                            <img src="{{ Storage::url($foto->path) }}" width="96" alt="Foto">
                                        </td>
                                        <td>
                                            <button type="button" wire:click="fotoUp({{ $foto->id }})"  class="btn btn-dark btn-sm @if($loop->first) disabled @endif"><i class="bi bi-caret-up-fill"></i></button>
                                            <button type="button" wire:click="fotoDown({{ $foto->id }})"  class="btn btn-dark btn-sm @if($loop->last) disabled @endif"><i class="bi bi-caret-down-fill"></i></button>
                                            <button type="button" wire:click="delete({{ $foto->id }})"  class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDelete"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2" class="text-center">No se encontraron fotos</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" wire:click="close" class="btn btn-dark mx-0" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>