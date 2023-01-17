@extends('layouts.site')

@section('title')
Forjados de Acero inoxidable en Tenerife  - Todo Reformas Tenerife
@endsection

@section('description')
Realizamos trabajos en acero inoxidable en Tenerife. Pasamanos, cercas, muebles, etc.
@endsection

@section('keywords')
acero, inox, inoxidable, forjados, cercas, tenerife
@endsection

@section('contenido')

    <section>
        @include('site.includes.header')
        <div class="bg-acero position-relative">
            <div class="bg-opacity position-absolute top-0 start-0"></div>
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="text-center text-white">
                    <h1 class="fw-black">FORJADOS ACERO INOXIDABLE</h1>
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
                        <p class="text- text-center text-lg-start fs-4">Forjados y trabajos de acero inoxidable en Tenerife</p>
                        <p class="text-muted text-center text-lg-start">Realizamos cualquier trabajo por encargo en acero inoxidable o forjado. Estaremos encantados de ayudarle en la elaboración de su propio diseño original.</p>
                    </div>                  
                </div>

                <div class="pt-4 pt-lg-5">
                    <h3 class="h4 text-center fw-black my-5">REALIZAMOS</h3>
                    <div class="row justify-content-center align-items-center g-3">
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Cercas
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Pasamanos
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Muebles 
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Diseños originales
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