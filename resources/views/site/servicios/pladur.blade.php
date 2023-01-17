@extends('layouts.site')

@section('title')
Trabajos Pladur Tenerife  - Todo Reformas Tenerife
@endsection

@section('description')
Realizamos cualquier trabajo en Pladur o Escayola en Tenerife. Muebles, oficinas pladur.
@endsection

@section('keywords')
pladur, tenerife, trabajos, trabajo
@endsection

@section('contenido')

    <section>
        @include('site.includes.header')
        <div class="bg-pladur position-relative">
            <div class="bg-opacity position-absolute top-0 start-0"></div>
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="text-center text-white">
                    <h1 class="fw-black">PLADUR Y ESCAYOLA EN TENERIFE</h1>
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
                        <p class="text- text-center text-lg-start fs-4">Trabajos en Pladur</p>
                        <p class="text-muted text-center text-lg-start">Realizamos todo tipo de trabajos a medida en Pladur. Desde una simple estanteria hasta los elementos decorativos mas complejos que pueda solicitarnos.</p>
                        <p class="text-muted text-center text-lg-start">Disponemos de escayolistas profesionales y especialistas en trabajos de pladur. Trabajamos tanto para particulares como para empresas y comunidades de vecinos, siempre realizando trabajos limpios y utilizando los mejores materiales del mercado. Nos adaptamos por completo a las necesidades y gustos de nuestros clientes, y respetamos los plazos en la realización de nuestros trabajos.</p>
                    </div>
                    <div class="col-lg-5 order-2 order-lg-1">
                        <p class="text- text-center text-lg-start fs-4">Prefesionales especializados</p>
                        <p class="text-muted text-center text-lg-start">Si busca profesionales especializados en trabajos de escayola y pladur, llámenos y pídanos presupuesto sin compromiso. Realizamos murales y molduras de pladur, techos de escayola y decoraciones de escayola (apliques, escuadras, cornisas, candilejas, columnas, capiteles, cortineros, frisos, plafones, bóvedas, etc...), así como instalamos techos desmontables de escayola, muebles etc.</p>
                        <p class="text-muted text-center text-lg-start">Realizamos trabajos de escayola y pladur en toda la isla de Tenerife</p>
                    </div>    
                    <div class="col-lg-5 order-1 order-lg-2">
                        <img src="{{ asset('img/servicios/interior.jpg') }}" class="img-fluid shadow-sm" alt="Reforma de Casas">
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