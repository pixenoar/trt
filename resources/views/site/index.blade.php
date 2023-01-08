@extends('layouts.site')

@section('title')
Reformas Tenerife - Seriedad y garantía en reformas
@endsection

@section('description')
Empresa de Reformas en Tenerife, pisos, locales, fachadas. Certificacion energetica. Presupuesto sin compromiso.
@endsection

@section('keywords')
reformas, tenerife, empresa, rehabilitacion, locales, baños, cocinas, fachadas
@endsection

@section('contenido')

    <section id="home">

        <div class="container-fluid position-relative bg-home vh-100 px-0">
            <!-- header -->
            @include('site.includes.header')
            <!-- gradient -->
            <div class="position-absolute bottom-0 start-50 translate-middle-x h-75 w-100 bg-grad-black"></div>            
            <!-- logo + frase -->
            <div class="position-absolute bottom-0 start-50 translate-middle-x w-75 mb-5">
                <div class="text-center mb-5">
                    <img src="{{ asset('img/svg/logo.svg') }}" alt="Logo" class="img-fluid mb-3 mb-lg-5"></a>
                    <h1 class="display-5 fw-bold text-light d-none d-lg-block">SERIEDAD Y GARANTÍA EN REFORMAS</h1>
                    <h2 class="h5 text-white">VIVIENDAS, OFICINAS, FACHADAS, ELECTRICIDAD, PINTURA Y MUCHO MÁS</h2>
                    <a href="#" class="btn btn-primary text-white fw-bold mt-5 d-none d-lg-inline-block" role="button">SOLICITAR PRESUPUESTO</a>
                    <a href="#" class="btn btn-primary btn-sm text-white fw-bold mt-3 d-lg-none" role="button">SOLICITAR PRESUPUESTO</a>
                </div>
            </div>
        </div>

    </section>

    <section id="empresa">
        <div class="container-fluid bg-section py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <div class="row justify-content-around align-items-center g-4">
                    <div class="col-lg-5">
                        <img src="{{ asset('img/nosotros.jpg') }}" class="img-fluid shadow-sm" alt="Todo Reformas Tenerife">                         
                    </div>
                    <div class="col-lg-5 text-center text-lg-start">
                        <h3 class="h2 fw-black mb-4 mt-4 mt-lg-0"><span class="text-primary">SOBRE</span> NOSOTROS</h3>
                        <p class="text-muted">Todo Reformas Tenerife, empresa de Reformas con amplia experiencia. Llevamos en este oficio que nos apasiona, más de 15 años. Le invitamos a que nos conozca y compruebe usted mismo nuestros servicios; que van desde la renovación de la pintura de su piso, hasta reformas completas de viviendas y locales, rehabilitación de fachadas, instalación de cuartos de baño, cocinas, la reparación de grandes fachadas, pilares, etc. Presupuesto sin compromiso.</p>
                        <p class="text-muted">Contamos con un equipo muy preparado en todas las áreas necesarias para completar cualquier trabajo de reformas en Tenerife. Esta formación y experiencia, nos aporta una alta competitividad y flexibilidad que se traduce en costes ajustados en cada uno de nuestros trabajos.</p>
                        <p class="text-muted">Nos esforzámos en cumplir a tiempo y dentro del presupuesto todos nuestros trabajos, ya sean reformas grandes o pequeñas.</p>
                        <a href="{{ route('site.empresa') }}" class="btn btn-primary btn-sm fw-bold text-white mt-4" role="button">MÁS SOBRE NOSOTROS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="servicios">
        <div class="container-fluid py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <h3 class="h2 fw-black text-center mb-5"><span class="text-primary">NUESTROS</span> SERVICIOS</h3>
                <div class="row g-4">
                    @foreach($categorias->take(6) as $categoria)
                        <div class="col-lg-4">
                            <a href="#">
                                <div class="position-relative">
                                    <img src="{{ asset($categoria->foto) }}" alt="{{ $categoria->nombre }}" class="img-fluid shadow-sm">
                                    <div class="position-absolute bottom-0 start-50 translate-middle-x h-50 w-100 bg-grad-black"></div>
                                    <div class="position-absolute bottom-0 start-0 px-4 py-3">
                                        <h3 class="h4 fw-bold text-white mb-0">{{ Str::upper($categoria->nombre) }}</h3>
                                    </div> 
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-5">
                    <a href="{{ route('site.servicios') }}" class="btn btn-primary btn-sm fw-bold text-white" role="button">TODOS LOS SERVICIOS</a>
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

    <!-- footer -->

    @include('site.includes.footer')

    <!-- Varios -->

    @include('site.includes.canvas-menu')

    @include('site.includes.boton-telefono')


@endsection