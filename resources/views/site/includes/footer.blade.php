@if(!request()->routeIs('site.contacto'))
    <section id="contacto">
        <div class="container-fluid bg-grad-orange-blue py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center text-light">
                            <h2 class="fw-bold">¿Necesitas una reforma?</h2>
                            <p class="fw-light fs-5 my-3">Solicitanos un presupuesto sin compromiso</p>
                            <a href="{{ route('site.contacto') }}" class="btn btn-light btn-sm fw-bold mt-4" role="button">CONTÁCTANOS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
<section id="footer">
    <div class="container-fluid bg-footer-secondary d-none d-lg-block">
        <div class="container py-4 py-lg-5">
            <div class="row justify-content-center align-items-top g-3">
                <div class="col-lg-4">
                    <h5 class="h6 text-white fw-bold mb-3">TODO REFORMAS TENERIFE</h5>
                    <ul class="nav flex-column small">
                        <li class="nav-item">
                            <a href="{{ route('site.empresa') }}" class="nav-link link-light px-0 py-1">Empresa</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('site.servicios') }}" class="nav-link link-light px-0 py-1">Nuestros Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('site.trabajos') }}" class="nav-link link-light px-0 py-1">Últimos Trabajos</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('site.garantia') }}" class="nav-link link-light px-0 py-1">Garantía</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('site.contacto') }}" class="nav-link link-light px-0 py-1">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('site.politica')}}" class="nav-link link-light px-0 py-1">Política de Privacidad</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="h6 text-white fw-bold mb-3">SERVICIOS</h5>
                    <ul class="nav flex-column">
                    @foreach($categorias as $categoria)
                        <li class="nav-item small">
                            <a href="{{ route($categoria->ruta) }}" class="nav-link link-light px-0 py-1">{{ $categoria->nombre }}</a>
                        </li>
                    @endforeach
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="h6 text-white fw-bold mb-3"><i class="bi bi-geo-alt me-1"></i> DONDE ESTAMOS</h5>
                    <ul class="list-unstyled text-white small">
                        <li>C/ Robledo 4, Res Villa Jardin 2</li>
                        <li>Radazul. Tenerife. Canarias. España</li>
                    </ul>
                    <h5 class="h6 text-white fw-bold mt-5 mb-3"><i class="bi bi-megaphone me-1"></i> VÍAS DE CONTACTO</h5>
                    <ul class="list-unstyled text-white small">
                        <li>627 905 132</li>
                        <li><img src="{{ asset('img/svg/email.svg') }}" alt="Correo Electrónico"></li>
                    </ul>
                    <h5 class="h6 text-white fw-bold mt-5 mb-3"><i class="bi bi-clock me-1"></i> HORARIOS</h5>
                    <ul class="list-unstyled text-white small">
                        <li>Lunes a Viernes: 09 a 18 hs.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark">
        <div class="container py-4">
            <div class="row align-items-center g-3">
                <div class="col-lg-8 order-2 order-lg-1">
                    <p class="text-white text-center text-lg-start small mb-0"><span class="fw-bold">Todo Reformas Tenerife</span> © Todos los derechos reservados</p>
                </div>
                <div class="col-lg-4 order-1 order-lg-2">
                    <nav class="nav justify-content-center justify-content-lg-end">
                        <a href="https://www.facebook.com/TodoReformasTenerife" target="_blank" class="nav-link link-light fs-5"><i class="bi bi-facebook"></i></a>
                        <a href="https://twitter.com/TotalReformas" target="_blank" class="nav-link link-light fs-5"><i class="bi bi-twitter"></i></a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>