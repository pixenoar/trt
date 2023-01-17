@extends('layouts.site')

@section('title')
Casas de Madera - Todo Reformas Tenerife
@endsection

@section('description')
Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
@endsection

@section('keywords')
reformas, casas, pisos, tenerife
@endsection

@section('contenido')

    <section>
        @include('site.includes.header')
        <div class="bg-madera position-relative">
            <div class="bg-opacity position-absolute top-0 start-0"></div>
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="text-center text-white">
                    <h1 class="fw-black">CASAS DE MADERA</h1>
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
                        <p class="text- text-center text-lg-start fs-4">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</p>
                        <p class="text-muted text-center text-lg-start">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.</p>
                        <p class="text-muted text-center text-lg-start">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.</p>
                    </div>
                    <div class="col-lg-5 order-2 order-lg-1">
                        <p class="text- text-center text-lg-start fs-4">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</p>
                        <p class="text-muted text-center text-lg-start">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.</p>
                        <p class="text-muted text-center text-lg-start">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.</p>
                    </div>    
                    <div class="col-lg-5 order-1 order-lg-2">
                        <img src="{{ asset('img/servicios/interior.jpg') }}" class="img-fluid shadow-sm" alt="Reforma de Casas">
                    </div>                    
                </div>

                <div class="pt-4 pt-lg-5">
                    <h3 class="h4 text-center fw-black my-5">LOREM IPSUM</h3>
                    <div class="row justify-content-center align-items-center g-3">
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Lorem Ipsum es simplemente el texto
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Lorem Ipsum es simplemente el texto
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Lorem Ipsum es simplemente el texto
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Lorem Ipsum es simplemente el texto
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