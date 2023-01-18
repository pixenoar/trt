
    <div class="container-fluid d-flex justify-content-between align-items-center bg-white shadow-sm px-4 px-lg-5 py-2">
        <div>
            <a href="{{ route('dashboard') }}">
                <img src="{{ asset('img/svg/logo-dash.svg') }}" alt="Logo" class="img-fluid">
            </a>
        </div>
        <div>
            <ul class="nav">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link px-0" id="acount" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="-10,-5"><i class="bi bi-person-circle fs-4"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="acount">
                        <li><h6 class="dropdown-header fw-bold">{{ Auth::user()->name.' '.Auth::user()->surname }}</h6></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a href="javascript:void(0)" class="dropdown-item small" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-left me-1"></i> Cerrar Sesión</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                    </ul>
                </li>
            </ul>
        </div>
    </div>