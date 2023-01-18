@extends('layouts.site')

@section('title')
Pintores Tenerife. Pintamos pisos desde 400 € - Todo Reformas Tenerife
@endsection

@section('description')
Pintores profesionales en Tenerife. Pintamos toda clase de superficies, interior y exterior.
@endsection

@section('keywords')
pinturores, pintura, tenerife
@endsection

@section('contenido')

    <section>
        @include('site.includes.header')
        <div class="bg-pintu position-relative">
            <div class="bg-opacity position-absolute top-0 start-0"></div>
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="text-center text-white">
                    <h1 class="fw-black">EMPRESA DE PINTORES EN TENERIFE</h1>
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
                        <img src="{{ asset('img/servicios/pintura/pintura-1.jpg') }}" class="img-fluid shadow-sm" alt="Reforma de Casas">
                    </div>
                    <div class="col-lg-5">
                        <p class="text- text-center text-lg-start fs-4">¿Está pensando en cambiar de estilo su casa?</p>
                        <p class="text-muted text-center text-lg-start">Somos una empresa con más de 15 años de experiencia en el mundo de la pintura. Un grupo de expertos pintores en Tenerife dedicados a la realización de todo tipo de trabajos para hogares, comercios y empresas.</p>
                        <p class="text-muted text-center text-lg-start">Le brindamos un servicio de pintura global, rápido y a unos precios muy competitivos, pero sobre todo realizado por profesionales en pintura y empapelado, que realizarán un excelente trabajo para su total satisfacción.</p>
                    </div>
                    <div class="col-lg-5 order-2 order-lg-1">
                        <p class="text- text-center text-lg-start fs-4">Tenemos el mejor equipo de pintores profesionales</p>
                        <p class="text-muted text-center text-lg-start">Nuestro equipo de pintores profesionales cuenta con toda la experiencia que usted está buscando, y se encuentra altamente cualificado para ofrecer el trabajo y acabado de pintura perfecto en cualquier inmueble que necesite, ya sea su hogar, su oficina, o su empresa o negocio. Una parte fundamental en la decoración de cualquier espacio es la pintura.</p>
                        <p class="text-muted text-center text-lg-start">Nosotros le asesoremos sin compromiso en todos los trabajos necesarios para pintar su casa, y le proporcionaremos un presupuesto ajustado a sus necesidades al mejor precio del mercado.</p>
                        <p class="text-muted text-center text-lg-start">No trabajamos con precios definidos , elaboramos cada presupuesto despues de la conversacion con el cliente ya que cada casa es diferente y por ello cada cliente especial. Asi logramos conseguir la mejor relacion calidad precio.</p>
                    </div>    
                    <div class="col-lg-5 order-1 order-lg-2">
                        <img src="{{ asset('img/servicios/pintura/pintura-2.jpg') }}" class="img-fluid shadow-sm" alt="Reforma de Casas">
                    </div>                    
                </div>

                <div class="pt-4 pt-lg-5">
                    <h3 class="h4 text-center fw-black my-5">NUESTROS SERVICIOS INCLUYEN</h3>
                    <div class="row justify-content-center align-items-center g-3">
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Asesoramiento en calidades, tonos y tecnicas de pintura
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Tapamos hasta el más mínimo detalle (muebles, suelos, rodapiés, puertas, ventanas, radiadores, etc.) 
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Restauramos las superficies afectadas de grietas, humedades, zonas ahuecadas, etc.
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Aplicamos pintura de la máxima calidad, transpirable, duradera y resistente
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Pintura específica que requiere cada superficie, con las capas necesarias para su correcta terminación
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Si fuese preciso, realizaríamos las correcciones necesarias hasta que el acabado final sea de su agrado
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-check-circle me-1"></i> Limpieza y recogida de desechos
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