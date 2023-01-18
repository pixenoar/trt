<div class="fixed-top d-flex justify-content-between align-items-center bg-light shadow-sm border-bottom px-4 px-lg-5 py-2 py-lg-3">
    <div>
        <a href="{{ route('site.home') }}">
            <img src="{{ asset('img/svg/logo-small.svg') }}" alt="Logo" class="img-fluid">
        </a>
    </div>
    <div class="d-none d-lg-block">
        <ul class="nav">
            @if(!request()->routeIs('site.home'))
                <li class="nav-item">
                    <a href="{{ route('site.home') }}" class="nav-link link-dark">Inicio</a>
                </li>
            @endif
            <li class="nav-item">
                <a href="{{ route('site.empresa') }}" class="nav-link @if(request()->routeIs('site.empresa')) link-primary fw-bold @else link-dark @endif">Empresa</a>
            </li>
            <li class="nav-item dropdown-center">
                <a href="#" class="nav-link @if(request()->routeIs('site.servicios') || request()->routeIs('site.servicios.*')) link-primary fw-bold @else link-dark @endif dropdown-toggle" id="dropdown-institucional" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Servicios
                </a>
                <ul class="dropdown-menu shadow-sm" aria-labelledby="dropdown-institucional">
                @foreach($categorias->take(10) as $categoria)
                    <li><a href="{{ route($categoria->ruta) }}" class="dropdown-item small @if(request()->routeIs($categoria->ruta)) active @endif">{{ $categoria->nombre }}</a></li>
                @endforeach
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('site.trabajos') }}" class="nav-link @if(request()->routeIs('site.trabajos')) link-primary fw-bold @else link-dark @endif">Trabajos</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('site.garantia') }}" class="nav-link @if(request()->routeIs('site.garantia')) link-primary fw-bold @else link-dark @endif">Garantía</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('site.contacto') }}" class="nav-link @if(request()->routeIs('site.contacto')) link-primary fw-bold @else link-dark @endif">Contacto</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('site.contacto') }}" class="nav-link link-light btn btn-primary ms-3">Presupuesto</a>
            </li>
        </ul>
    </div>
    <div class="d-lg-none">
        <i class="bi bi-list fs-1" data-bs-target="#offCanvasNavbar" data-bs-toggle="offcanvas" aria-controls="offCanvasNavbar"></i>
    </div>
</div>