@extends('layouts.site')

@section('title')
Servicios - Todo Reformas Tenerife
@endsection

@section('description')
Resumen de todos los servicios ofrecidos por Todo Reformas Tenerife.
@endsection

@section('keywords')
reformas, servicios, tenerife, tiendas
@endsection

@section('contenido')

    <section>
        @include('site.includes.header')
        <div class="bg-servicios position-relative">
            <div class="bg-opacity position-absolute top-0 start-0"></div>
            <div class="position-absolute top-50 start-50 translate-middle">
                <h1 class="text-white text-center fw-black">SERVICIOS</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <p class="text-muted text-center text-lg-start mb-5">Le resumimos nuestra tabla de servicios, como podra comprobar, en el sector de las reformas contamos con experiencia en todas las areas necesarias. Aun así, si necesita cualquier servicio adicional o especial, no dude en consultarnos, nos encantan los retos.</p>
                <div class="row g-4">
                    @foreach($categorias as $categoria)
                        <div class="col-lg-4">
                            <a href="{{ route($categoria->ruta) }}">
                                <div class="position-relative">
                                    <img src="{{ asset($categoria->foto) }}" alt="{{ $categoria->nombre }}" class="img-fluid shadow-sm">
                                    <div class="position-absolute bottom-0 start-50 translate-middle-x h-50 w-100 bg-grad-black"></div>
                                    <div class="position-absolute bottom-0 start-0 px-4 py-3">
                                        <h2 class="h4 fw-bold text-white mb-0">{{ Str::upper($categoria->nombre) }}</h2>
                                        <p class="mb-0 text-white small">{{ $categoria->descripcion }}</p>
                                    </div> 
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <!-- footer -->

    @include('site.includes.footer')

    <!-- varios -->

    @include('site.includes.canvas-menu')

    @include('site.includes.boton-telefono')


@endsection