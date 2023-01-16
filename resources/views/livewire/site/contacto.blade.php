<div>

    <form wire:submit.prevent="enviar">
        <div class="row justify-content-center align-items-center g-3">
            <div class="col-lg-12">
                <div class="form-floating">
                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" wire:model.defer="nombre" placeholder="Nombre">
                    <label for="nombre">Nombre</label>
                    @error('nombre')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-floating">
                    <input type="text" class="form-control @error('telefono') is-invalid @enderror" id="telefono" wire:model.defer="telefono" placeholder="Teléfono">
                    <label for="telefono">Teléfono</label>
                    @error('telefono')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" wire:model.defer="email" placeholder="E-mail">
                    <label for="email">E-Mail</label>
                    @error('email')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-floating">
                    <textarea class="form-control @error('mensaje') is-invalid @enderror" wire:model.defer="mensaje" id="mensaje" placeholder="Mensaje" style="height: 16rem"></textarea>
                    <label for="mensaje">Mensaje</label>
                    @error('mensaje')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12">
                <button type="submit" class="btn btn-primary text-white fw-bold w-100" wire:target="enviar" wire:loading.class="disabled">
                    <div wire:loading.remove wire:target="enviar">
                        ENVIAR
                    </div>                        
                    <div wire:loading wire:target="enviar">
                        <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Enviando...</span>
                        </div>
                    </div>
                </button>
            </div>
            @if (session()->has('enviado'))
            <div class="col-lg-12">
                <div class="alert alert-success">
                    {{ session('enviado') }}
                </div>
            </div>
            @endif
        </div>
    </form>

</div>