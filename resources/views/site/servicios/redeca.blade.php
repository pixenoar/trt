@extends('layouts.site')

@section('title')
Reforma de casas en Tenerife - Todo Reformas Tenerife
@endsection

@section('description')
Empresa de Reformas en Tenerife. Reforma de casas, viviendas y chalest. Rehabilitaciones completas o parciales.
@endsection

@section('keywords')
reformas, casas, pisos, tenerife
@endsection

@section('contenido')

    <section>
        @include('site.includes.header')
        <div class="bg-redeca position-relative">
            <div class="bg-opacity position-absolute top-0 start-0"></div>
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="text-center text-white">
                    <h1 class="fw-black">REFORMA DE CASAS EN TENERIFE</h1>
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
                        <img src="{{ asset('img/servicios/redeca/redeca-1.jpg') }}" class="img-fluid shadow-sm" alt="Reforma de Casas">
                    </div>
                    <div class="col-lg-5">
                        <p class="text-muted text-center text-lg-start">Somos especialistas en reformas de Casas, chalets y viviendas unifamiliares en Tenerife.</p>
                        <p class="text-muted text-center text-lg-start">Diseñando espacios para vivir, descansar, disfrutar. Asesorando con soluciones estéticas actuales. Desde las primeras líneas, para llegar luego a los presupuestos que mejor se adapten al momento y a sus necesidades.</p>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{ asset('img/servicios/redeca/redeca-2.jpg') }}" class="img-fluid shadow-sm" alt="Reforma de Casas">
                    </div>                    
                    <div class="col-lg-5">
                        <p class="text-muted text-center text-lg-start">La experiencia y un buen equipo son imprescindibles para hacer con agilidad los trabajos, desde los permisos de obra, pedidos de materiales a distribuidores y coordinación de obra. De tabiques a paredes de vidrio. De instalación eléctrica a la domótica.</p>
                        <p class="text-muted text-center text-lg-start">Consúltenos y descubrirá lo que podemos hacer por usted.</p>
                    </div>                    
                </div>

                <div class="pt-4 pt-lg-5">
                    <h3 class="h4 text-center fw-black my-5">NUESTROS SERVICIOS</h3>
                    <div class="row justify-content-center align-items-center g-3">
                        <div class="col-lg-4">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Proyectos y licencias
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Electricidad y boletín oficial 
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Fontanería con boletín oficial
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Carpintería
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Pintura
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Alicatados
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