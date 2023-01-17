@extends('layouts.site')

@section('title')
Certificado Energético Tenerife
@endsection

@section('description')
Empresa de Reformas experta en certifiados energéticos en Tenerife.
@endsection

@section('keywords')
certificado, energetico, tenerife, energético
@endsection

@section('contenido')

    <section>
        @include('site.includes.header')
        <div class="bg-certi position-relative">
            <div class="bg-opacity position-absolute top-0 start-0"></div>
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="text-center text-white">
                    <h1 class="fw-black">CERTIFICADO ENERGÉTICO TENERIFE</h1>
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
                        <p class="text- text-center text-lg-start fs-4">Es una obligación</p>
                        <p class="text-muted text-center text-lg-start">El Real Decreto 235/2013, de 5 de abril obliga a todos los propietarios de viviendas, locales y edificios en venta o alquiler a obtener el certificado energético. Por tanto esta certificación de eficiencia energética es necesaria para vender o alquilar la mayoría de los inmuebles.</p>
                    </div>                    
                </div>

                <div class="pt-4 pt-lg-5">
                    <h3 class="h4 text-center fw-black my-5">PASOS BÁSICOS PARA OBTENER EL CERTIFICADO</h3>
                    <div class="row justify-content-center align-items-center g-3">
                        <div class="col-lg-12">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-1-circle-fill me-1"></i> Buscar un técnico competente y solicitar presupuesto
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-2-circle-fill me-1"></i> Cuando lo tenga, comunícarlo a su comunidad autónoma 
                                <br><span class="small">Este certificado no tiene validez hasta que no es revisado por la administración, que comprueba que la evaluación se ha ejecutado de forma correcta y la calificación de la vivienda es la adecuada.</span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-3-circle-fill me-1"></i> Número de registro asignado
                                <br><span class="small">En el plazo de unos dos días hábiles aproximadamente, obtendrás la etiqueta energética con el número de registro asignado, lo que significa que su vivienda ya está certificada y registrada con la supervisión administrativa correspondiente. El certificado de eficiencia energética tendrá una validez máxima de diez años, y será el propietario el responsable de su renovación.</span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="alert alert-primary m-0" role="alert">
                                <i class="bi bi-4-circle-fill me-1"></i> Una vez lo tenga ya puede incluirlo en sus anuncios de venta o alquiler inmuebles
                                <br><span class="small">Será un dato más a tener en cuenta por los posibles inquilinos, y además es obligatorio que esté indicado.</span>
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