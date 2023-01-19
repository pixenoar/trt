@extends('layouts.site')

@section('title')
Contacto - Todo Reformas Tenerife
@endsection

@section('description')
Contáctanos como prefieras, por teléfono o por email y solicítanos una visita o un presupuesto.
@endsection

@section('keywords')
reformas, tenerife, contacto
@endsection

@section('contenido')

    <section>
        @include('site.includes.header')
        <div class="bg-contacto position-relative">
            <div class="bg-opacity position-absolute top-0 start-0"></div>
            <div class="position-absolute top-50 start-50 translate-middle">
                <h1 class="text-white text-center fw-black">CONTACTO</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <p class="text-muted text-center text-lg-start mb-5">Contáctanos como prefieras, por teléfono o por email y solicítanos una visita o un presupuesto. Recuerde que un presupuesto preciso para reformas importantes, solo es posible tras concertar una visita para que veamos la zona de la reforma y que nos detalle su idea.</p>
                <div class="row justify-content-center g-5">
                    <div class="col-lg-5">
                        @livewire('site.contacto')
                    </div>                    
                    <div class="col-lg-5">
                        <div class="card p-2">
                            <div class="card-body">
                                <h2 class="h5 fw-bold"><i class="bi bi-geo-alt text-primary me-2"></i> DONDE ESTAMOS</h2>
                                <ul class="list-unstyled mb-0">
                                    <li>C/ Robledo 4, Res Villa Jardin 2</li>
                                    <li>Radazul. Tenerife. Canarias. España</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card p-2 my-3">
                            <div class="card-body">
                                <h2 class="h5 fw-bold"><i class="bi bi-megaphone text-primary me-2"></i> VÍAS DE CONTACTO</h2>
                                <ul class="list-unstyled mb-0">
                                    <li>+34 627 905 132</li>
                                    <li><img src="{{ asset('img/svg/email-black.svg') }}" alt="Correo Electrónico"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card p-2 mb-3">
                            <div class="card-body">
                                <h2 class="h5 fw-bold"><i class="bi bi-clock text-primary me-2"></i> HORARIOS</h2>
                                <ul class="list-unstyled mb-0">
                                    <li>Lunes a Viernes: 09 a 18 hs.</li>
                                </ul>
                            </div>
                        </div>
                        <a href="https://wa.me/+34627905132" target="_blank" class="btn btn-success text-white w-100" role="button"><i class="bi bi-whatsapp me-2"></i> Contáctanos por WhatsApp</a>
                    </div>

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