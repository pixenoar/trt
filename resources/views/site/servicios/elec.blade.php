@extends('layouts.site')

@section('title')
Instalaciones y proyectos eléctricos Tenerife  - Todo Reformas Tenerife
@endsection

@section('description')
Empresa de reformas especializada en instalaciones eléctricas de BT, sellado de boletines y proyectos eléctricos.
@endsection

@section('keywords')
proyectos, electricos, electricidad, tenerife
@endsection

@section('contenido')

    <section>
        @include('site.includes.header')
        <div class="bg-elec position-relative">
            <div class="bg-opacity position-absolute top-0 start-0"></div>
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="text-center text-white">
                    <h1 class="fw-black">INSTALACIONES Y PROYECTOS ELÉCTRICOS EN TENERIFE</h1>
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
                        <img src="{{ asset('img/servicios/interior.jpg') }}" class="img-fluid shadow-sm" alt="Reforma de Casas">
                    </div>
                    <div class="col-lg-5">
                        <p class="text- text-center text-lg-start fs-4">Disponemos de un servicio de Ingeniería de Instalaciones con gran experiencia</p>
                        <p class="text-muted text-center text-lg-start">En proyectos eléctricos ofrecemos un servicio Integral de instalaciones hasta su finalización y legalización ante el departamento de Industria o la Administración correspondiente, encargándonos de todo el proceso, ya sea la realización del proyecto, como el control de la buena ejecución de la instalación, asesoramiento al instalador profesional, control, dirección, y acompañamiento en las inspecciones correspondientes y necesarias, así como la orientación de las mejores soluciones para el buen funcionamiento y el ahorro energético.</p>
                        <p class="text-muted text-center text-lg-start">Ofrecemos un servicio con total seriedad, profesionalidad y puntualidad, garantizando el cumplimiento de toda reglamentación siempre intentando ofrecer el mejor precio.</p>
                    </div>                  
                </div>

                <div class="pt-4 pt-lg-5">
                    <h3 class="h4 text-center fw-black my-5">REALIZAMOS</h3>
                    <div class="row justify-content-center align-items-center g-3">
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Sellado de Boletines de BT
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Proyectos de licencia de actividades
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Proyectos de licencia de obras 
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Proyectos de instalaciones
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Informes, valoraciones y tasaciones
                            </div>
                        </div>
                    </div>                    
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid bg-section py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <h3 class="h4 fw-black text-center mb-5">ÚLTIMOS TRABAJOS EN <span class="text-primary">{{ Str::upper($servicio->nombre) }}</span></h3>
                @livewire('site.trabajos-relacionados', ['moCategoria' => $servicio])
            </div>
        </div>
    </section>


    <!-- footer -->

    @include('site.includes.footer')

    <!-- varios -->

    @include('site.includes.canvas-menu')

    @include('site.includes.boton-telefono')


@endsection