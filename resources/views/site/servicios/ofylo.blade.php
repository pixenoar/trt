@extends('layouts.site')

@section('title')
Reforma de locales en Tenerife - Todo Reformas Tenerife
@endsection

@section('description')
Realizamos reformas de locales comerciales en Tenerife, tanto parciales como integrales, ya sean tiendas, oficinas, restaurantes y mucho más.
@endsection

@section('keywords')
reformas, tenerife, tiendas, restaurantes, fachadas, rehabilitacion, locales, integrales
@endsection

@section('contenido')

    <section>
        @include('site.includes.header')
        <div class="bg-redeca position-relative">
            <div class="bg-opacity position-absolute top-0 start-0"></div>
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="text-center text-white">
                    <h1 class="fw-black">REFORMA DE OFICINAS Y LOCALES EN TENERIFE</h1>
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
                        <p class="text-muted text-center text-lg-start fs-4">Con la máxima garantía, rapidez y calidad.</p>
                        <p class="text-muted text-center text-lg-start">Realizamos reformas de locales comerciales en Tenerife, tanto parciales como integrales, ya sean tiendas, oficinas, restaurantes y mucho más.</p>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{ asset('img/servicios/redeca/redeca-2.jpg') }}" class="img-fluid shadow-sm" alt="Reforma de Casas">
                    </div>                    
                    <div class="col-lg-5">
                        <p class="text-muted text-center text-lg-start">Si ha pensado en abrir nueva oficina, comercio, rstaurante o en realizar en ellas un reforma, no dude en contactar con nosotros. Nuestra empresa posee dilatada expericia en el diseño y reforma negocios.</p>
                        <p class="text-muted text-center text-lg-start">Los espacios de negocio, empiezan con un diseño eficaz, que integre confort y estética; siendo ésta, nuestra mejor carta de presentación. Entendemos las necesidades de nuestros clientes, por ello, garantizamos la mejor atención y la asesoría continua</p>
                    </div>                    
                </div>

                <div class="pt-4 pt-lg-5">
                    <h3 class="h4 text-center fw-black my-5">LE ASESORAMOS EN</h3>
                    <div class="row justify-content-center align-items-center g-3">
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Diseños y estudios de mercado
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Optimizción y reducción de costes 
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Interiorismo y aprovechamiento del espacio
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Seleccion de materiales
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Ejecución y optimización de instalaciones
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Tratamientos y acabados de paramentos
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Carpinterías de madera, de aluminio, metálica, acero inox. Vidrios
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Domótica e iluminación. Seguridad
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