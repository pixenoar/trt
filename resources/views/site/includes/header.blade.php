<div class="fixed-top d-flex justify-content-between align-items-center bg-dark shadow px-4 px-lg-5 py-3">
    <div>
        <a href="{{ route('site.home') }}">
            <img src="{{ asset('img/svg/logo.svg') }}" alt="Logo" class="img-fluid w-25">
        </a>
    </div>
    <div class="d-none d-lg-block">
        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route('site.empresa') }}" class="nav-link @if(request()->routeIs('site.empresa')) link-primary fw-black @else link-light @endif">La Empresa</a>
            </li>
            <li class="nav-item dropdown-center">
                <a href="#" class="nav-link @if(request()->routeIs('institucional.*')) link-secondary fw-bold @else link-light @endif dropdown-toggle" id="dropdown-institucional" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Servicios
                </a>
                <ul class="dropdown-menu shadow-sm" aria-labelledby="dropdown-institucional">
                @foreach($categorias as $categoria)
                    <li><a href="#" class="dropdown-item small">{{ $categoria->nombre }}</a></li>
                @endforeach
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link link-light">Trabajos</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link link-light">Garantía</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link link-light">Contacto</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link link-light btn btn-primary fw-bold ms-3">Presupuesto</a>
            </li>
        </ul>
    </div>
    <div class="d-lg-none">
        <a href="javascript:void(0)"><i class="bi bi-list fs-2 text-light" data-bs-target="#offCanvasNavbar" data-bs-toggle="offcanvas" aria-controls="offCanvasNavbar"></i></a>
    </div>
</div>