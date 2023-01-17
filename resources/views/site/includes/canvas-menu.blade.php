<div class="offcanvas offcanvas-end w-75 bg-dark shadow-lg px-2 py-3" tabindex="-1" id="offCanvasNavbar" aria-labelledby="offCanvasNavbarLabel">
    <div class="offcanvas-body">
        <a href="{{ route('site.home') }}">
            <img src="{{ asset('img/svg/logo.svg') }}" class="img-fluid d-block mx-auto w-75" alt="Logo">
        </a>
        <ul class="nav flex-column my-4">
            @if(!request()->routeIs('site.home'))
            <li class="nav-item border-bottom border-secondary py-1">
                <a href="{{ route('site.home') }}" class="nav-link link-light ps-1">Inicio</a>
            </li>
            @endif
            <li class="nav-item border-bottom border-secondary py-1">
                <a href="{{ route('site.empresa') }}" class="nav-link @if(request()->routeIs('site.empresa')) link-primary fw-bold @else link-light @endif ps-1">Empresa</a>
            </li>
            <li class="nav-item border-bottom border-secondary py-1">
                <a href="#collapseInstitucional" class="nav-link @if(request()->routeIs('site.servicios')) link-primary fw-bold @else link-light @endif dropdown-toggle ps-1" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseInstitucional">Servicios</a>
                <div class="collapse" id="collapseInstitucional">
                    <ul class="nav flex-column small ms-3 my-2">
                    @foreach($categorias as $categoria)
                        <li class="nav-item">
                            <a href="{{ route($categoria->ruta) }}" class="nav-link link-light">{{ $categoria->nombre }}</a>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </li>
            <li class="nav-item border-bottom border-secondary py-1">
                <a href="{{ route('site.trabajos') }}" class="nav-link @if(request()->routeIs('site.trabajos')) link-primary fw-bold @else link-light @endif ps-1">Últimos Trabajos</a>
            </li>
            <li class="nav-item border-bottom border-secondary py-1">
                <a href="{{ route('site.garantia') }}" class="nav-link @if(request()->routeIs('site.garantia')) link-primary fw-bold @else link-light @endif ps-1">Garantía</a>
            </li>
            <li class="nav-item border-bottom border-secondary py-1">
                <a href="{{ route('site.contacto') }}" class="nav-link @if(request()->routeIs('site.contacto')) link-primary fw-bold @else link-light @endif ps-1">Contacto</a>
            </li>
            <li class="nav-item py-1">
                <a href="#" class="nav-link link-light ps-1">Política de Privacidad</a>
            </li>
        </ul>
        <a href="{{ route('site.contacto') }}" class="btn btn-primary btn-sm fw-bold text-white w-100" role="button">SOLICITAR PRESUPUESTO</a>
    </div>
</div>