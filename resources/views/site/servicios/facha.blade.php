@extends('layouts.site')

@section('title')
Fachadas Tenerife Rehabilitación y Pintura  - Todo Reformas Tenerife
@endsection

@section('description')
Expertos en rehabilitación de fachadas en Tenerife. Pintura, impermeabilización y trabajos verticales sin andamios. Más Económico limpio y rápido.
@endsection

@section('keywords')
reformas, tenerife, pintura, fachadas, reparación, restauración, rehabilitación, impermeabilización, humedades
@endsection

@section('contenido')

    <section>
        @include('site.includes.header')
        <div class="bg-facha position-relative">
            <div class="bg-opacity position-absolute top-0 start-0"></div>
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="text-center text-white">
                    <h1 class="fw-black">PINTURA Y REPARACIÓN DE FACHADAS</h1>
                    <a href="{{ route('site.servicios') }}" class="text-decoration-none link-light small"><i class="bi bi-arrow-left-circle"></i> SERVICIOS</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid py-4 py-lg-5">
            <div class="container py-4 py-lg-5">

                <div class="row justify-content-around align-items-center gy-4 gy-lg-5">
                    <div class="col-lg-5">
                        <img src="{{ asset('img/servicios/fachadas/fachadas-1.jpg') }}" class="img-fluid shadow-sm" alt="Reforma de Casas">
                    </div>
                    <div class="col-lg-5">
                        <p class="text- text-center text-lg-start fs-4">Trabajos verticales sin andamios en Tenerife</p>
                        <p class="text-muted text-center text-lg-start">Hemos adoptado técnicas procedentes de la escalada y utilizando sistemas de suspensión ligero y material de seguridad avanzado, podemos ofrecer a nuestros clientes grandes ventajas con respecto a los tradicionales andamios y grúas; como pueden ser la rapidez, la limpieza, la reducción económica y molestias que ocasionan las obras.</p>
                        <p class="text-muted text-center text-lg-start">Nuestras soluciones con o sin andamio están destinadas a particulares, comunidades de propietarios, administradores de fincas y empresas en general, que deseen restaurar su fachada.</p>
                    </div>
                    <div class="col-lg-5 order-2 order-lg-1">
                        <p class="text- text-center text-lg-start fs-4">Facilitamos cualquier servicio en altura para lugares de dificil acceso</p>
                        <p class="text-muted text-center text-lg-start">Así, proporcionamos restauración y mantenimiento de monumentos, instalaciones y limpiezas en lugares de difícil acceso así como mantenimiento industrial de estructuras verticales.</p>
                        <p class="text-muted text-center text-lg-start">Disponemos de las licencias legales vigentes y nos hallamos inscritos en cuantos registros son necesarios para el desarrollo de nuestra actividad.</p>
                    </div>    
                    <div class="col-lg-5 order-1 order-lg-2">
                        <img src="{{ asset('img/servicios/fachadas/fachadas-2.jpg') }}" class="img-fluid shadow-sm" alt="Reforma de Casas">
                    </div>                    
                </div>

                <div class="pt-4 pt-lg-5">
                    <h3 class="h4 text-center fw-black my-5">RESUMEN DE NUESTROS TRABAJOS VERTICALES</h3>
                    <div class="row justify-content-center align-items-center g-3">
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Protección de fachadas y patrimonio
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Pintura en general 
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Rehabilitación de patios y fachadas con difícil acceso
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Saneamientos preventivos
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Instalación de redes de protección
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Impermeabilización de cubiertas y fachadas
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Fijación y anclaje de baldosas
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Instalación de todo tipo de elementos publicitarios
                            </div>
                        </div>
                    </div>                    
                </div>

            </div>
        </div>
    </section>

    <!-- últimos trabajos -->

    @livewire('site.trabajos-relacionados', ['moCategoria' => $servicio])


    <!-- footer -->

    @include('site.includes.footer')

    <!-- varios -->

    @include('site.includes.canvas-menu')

    @include('site.includes.boton-telefono')


@endsection