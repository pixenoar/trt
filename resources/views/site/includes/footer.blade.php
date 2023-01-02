<section id="contacto">
    <div class="container-fluid bg-grad-orange-blue py-4 py-lg-5">
        <div class="container py-4 py-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center text-light">
                        <h4 class="h1 fw-bold">¿Necesitas una reforma?</h4>
                        <p class="fw-light fs-5 my-3">Solicitanos un presupuesto sin compromiso</p>
                        <a href="#" class="btn btn-outline-light btn-sm fw-bold mt-4" role="button">CONTÁCTANOS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="footer">
    <div class="container-fluid bg-footer-secondary d-none d-lg-block">
        <div class="container py-4 py-lg-5">
            <div class="row justify-content-center align-items-top g-3">
                <div class="col-lg-4">
                    <h5 class="text-white fw-bold mb-3">TODO REFORMAS TENERIFE</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link link-light px-0">La Empresa</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link link-light px-0">Nuestros Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link link-light px-0">Últimos Trabajos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link link-light px-0">Garantía</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link link-light px-0">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link link-light px-0">Política de Privacidad</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-white fw-bold mb-3">SERVICIOS</h5>
                    <ul class="nav flex-column">
                    @foreach($categorias as $categoria)
                        <li class="nav-item">
                            <a href="#" class="nav-link link-light px-0">{{ $categoria->nombre }}</a>
                        </li>
                    @endforeach
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-white fw-bold mb-3">DONDE ESTAMOS</h5>
                    <ul class="list-unstyled text-white">
                        <li>C/ Robledo 4, Res Villa Jardin 2</li>
                        <li>Radazul. Tenerife. Canarias. España</li>
                    </ul>
                    <h5 class="text-white fw-bold mt-5 mb-3">VÍAS DE CONTACTO</h5>
                    <ul class="list-unstyled text-white">
                        <li>+34 627 905 132</li>
                        <li>gestion@todoreformastenerife.com</li>
                    </ul>
                    <h5 class="text-white fw-bold mt-5 mb-3">HORARIOS</h5>
                    <ul class="list-unstyled text-white">
                        <li>Lunes a Viernes: 10 a 20 hs.</li>
                        <li>Sábados: 00 a 00 hs.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark">
        <div class="container py-4">
            <div class="row justify-content-center align-items-center g-3">
                <div class="col-lg-12">
                    <p class="text-white text-center mb-0"><span class="fw-bold">Todo Reformas Tenerife</span> © Todos los derechos reservados</p>
                </div>
            </div>
        </div>
    </div>
</section>