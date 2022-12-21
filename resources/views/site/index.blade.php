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
            <div class="position-absolute bottom-0 start-50 translate-middle-x h-50 w-100 bg-home-grad"></div>            
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

    <section id="la-empresa">
        <div class="container-fluid bg-section py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <div class="row justify-content-around align-items-center g-4">
                    <div class="col-lg-5">
                        <img src="{{ asset('img/marcos-tabossi.jpg') }}" class="img-fluid shadow-sm rounded" alt="Marcos Tabossi">                         
                    </div>
                    <div class="col-lg-5 text-center text-lg-start">
                        <h3 class="h2 fw-black mb-4 mt-4 mt-lg-0"><span class="text-primary">SOBRE</span> NOSOTROS</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum nam at ex distinctio debitis molestias corporis sint esse totam dicta incidunt voluptates libero rem explicabo necessitatibus soluta, natus architecto! Nesciunt.</p>
                        <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non reprehenderit molestiae voluptatem incidunt praesentium est unde excepturi pariatur illum, voluptatum accusamus, libero quisquam quos. Repudiandae quam minus molestiae officiis corporis.</p>
                        <a href="" class="btn btn-primary btn-sm fw-bold text-white mt-4" role="button">MÁS INFORMACIÓN</a>
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
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-lg-4">
                            <a href="">
                                <div class="position-relative">
                                    <img src="{{ asset('img/servicio.jpg') }}" alt="" class="img-fluid shadow-sm rounded">
                                    <div class="position-absolute bottom-0 start-50 translate-middle-x h-50 w-100 bg-home-grad rounded"></div>
                                    <div class="position-absolute bottom-0 start-0 px-4 py-3">
                                        <h3 class="h4 fw-bold text-white mb-0">REFORMA DE CASAS</h3>
                                    </div> 
                                </div>
                            </a>
                        </div>
                    @endfor
                </div>
                <div class="text-center mt-5">
                    <a href="" class="btn btn-primary btn-sm fw-bold text-white" role="button">TODOS LOS SERVICIOS</a>
                </div>
            </div>
        </div>
    </section>

    <section id="articulos">
        <div class="container-fluid bg-section py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <h3 class="h2 fw-black text-center mb-5"><span class="text-primary">ÚLTIMOS</span> TRABAJOS</h3>
                @livewire('site.articulos')
                <div class="text-center mt-5">
                    <a href="" class="btn btn-primary btn-sm fw-bold text-white" role="button">TODOS LOS TRABAJOS</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contacto">
        <div class="container-fluid bg-grad py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center text-light">
                            <h4 class="h1 fw-bold">¿Necesitas una reforma?</h4>
                            <p class="fw-light fs-5 my-3">Solicitanos un presupuesto sin compromiso</p>
                            <a href="https://wa.me/+542324477461" target="_blank" class="btn btn-outline-light fw-bold mt-4" role="button">CONTÁCTANOS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="container-fluid bg-dark">
            <div class="container py-4">
                <div class="row justify-content-center g-3">
                    <div class="col-lg-8">
                        <p class="text-white text-center text-lg-start mb-0"><span class="fw-bold">Vocación de Orientar</span> © Todos los derechos reservados</p>
                    </div>
                    <div class="col-lg-4">
                        <ul class="nav justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://wa.me/+542324477461" target="_blank" class="nav-link link-light"><i class="bi bi-whatsapp"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.instagram.com/vocaciondeorientar" target="_blank" class="nav-link link-light"><i class="bi bi-instagram"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.linkedin.com/in/marcostabossi" target="_blank" class="nav-link link-light"><i class="bi bi-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('site.includes.canvas-menu')

    @include('site.includes.boton-telefono')


@endsection