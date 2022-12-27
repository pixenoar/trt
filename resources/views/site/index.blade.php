@extends('layouts.site')

@section('title')
    Todo Reformas Tenerife - Seriedad y garantía en reformas
@endsection

@section('contenido')

    <section id="home">

        <div class="container-fluid position-relative bg-home vh-100 px-0">
            <!-- header -->
            @include('site.includes.header')
            <!-- gradient -->
            <div class="position-absolute bottom-0 start-50 translate-middle-x h-50 w-100 bg-grad-black"></div>            
            <!-- logo + frase -->
            <div class="position-absolute bottom-0 start-50 translate-middle-x w-75 mb-5">
                <div class="text-center mb-5">
                    <img src="{{ asset('img/svg/logo.svg') }}" alt="Logo" class="img-fluid mb-3 mb-lg-5"></a>
                    <h1 class="display-5 fw-bold text-light d-none d-lg-block">SERIEDAD Y GARANTÍA EN REFORMAS</h1>
                    <h2 class="h5 text-white">CASAS, OFICINAS, FACHADAS, ELECTRICIDAD, PINTURA Y MUCHO MÁS</h2>
                    <a href="#quien-soy" class="btn btn-primary text-white fw-bold mt-5 d-none d-lg-inline-block" role="button">SOLICITAR PRESUPUESTO</a>
                    <a href="#quien-soy" class="btn btn-primary btn-sm text-white fw-bold mt-3 d-lg-none" role="button">SOLICITAR PRESUPUESTO</a>
                </div>
            </div>
        </div>

    </section>

    <section id="empresa">
        <div class="container-fluid bg-section py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <div class="row justify-content-around align-items-center g-4">
                    <div class="col-lg-5">
                        <img src="{{ asset('img/nosotros.jpg') }}" class="img-fluid shadow-sm rounded" alt="Todo Reformas Tenerife">                         
                    </div>
                    <div class="col-lg-5 text-center text-lg-start">
                        <h3 class="h2 fw-black mb-4 mt-4 mt-lg-0"><span class="text-primary">SOBRE</span> NOSOTROS</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum nam at ex distinctio debitis molestias corporis sint esse totam dicta incidunt voluptates libero rem explicabo necessitatibus soluta, natus architecto! Nesciunt.</p>
                        <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non reprehenderit molestiae voluptatem incidunt praesentium est unde excepturi pariatur illum, voluptatum accusamus, libero quisquam quos. Repudiandae quam minus molestiae officiis corporis.</p>
                        <a href="{{ route('site.empresa') }}" class="btn btn-primary btn-sm fw-bold text-white mt-4" role="button">MÁS INFORMACIÓN</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="servicios">
        <div class="container-fluid py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <h3 class="h2 fw-black text-center mb-5"><span class="text-primary">NUESTROS</span> SERVICIOS</h3>
                <div class="row g-4 g-lg-5">
                    @foreach($categorias as $categoria)
                        <div class="col-lg-4">
                            <a href="">
                                <div class="position-relative">
                                    <img src="{{ asset($categoria->foto) }}" alt="{{ $categoria->nombre }}" class="img-fluid shadow-sm rounded">
                                    <div class="position-absolute bottom-0 start-50 translate-middle-x h-25 w-100 bg-grad-black rounded"></div>
                                    <div class="position-absolute bottom-0 start-0 px-4 py-3">
                                        <h3 class="h4 fw-bold text-white mb-0">{{ Str::upper($categoria->nombre) }}</h3>
                                    </div> 
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-5">
                    <a href="" class="btn btn-primary btn-sm fw-bold text-white" role="button">TODOS LOS SERVICIOS</a>
                </div>
            </div>
        </div>
    </section>

    <section id="trabajos">
        <div class="container-fluid bg-section py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <h3 class="h2 fw-black text-center mb-5"><span class="text-primary">ÚLTIMOS</span> TRABAJOS</h3>
                @livewire('site.trabajos')
                <div class="text-center mt-5">
                    <a href="#" class="btn btn-primary btn-sm fw-bold text-white" role="button">TODOS LOS TRABAJOS</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contacto">
        <div class="container-fluid bg-grad-orange-blue py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center text-light">
                            <h4 class="h1 fw-bold">¿Necesitas una reforma?</h4>
                            <p class="fw-light fs-5 my-3">Solicitanos un presupuesto sin compromiso</p>
                            <a href="#" class="btn btn-outline-light fw-bold mt-4" role="button">CONTÁCTANOS</a>
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
                        <h5 class="text-white fw-bold mt-5 mb-3">HORARIOS</h5>
                        <ul class="list-unstyled text-white">
                            <li>Lunes a Viernes: 09 a 18 hs.</li>
                            <li>Sábados: 09 a 13 hs.</li>
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

    @include('site.includes.canvas-menu')

    @include('site.includes.boton-telefono')


@endsection