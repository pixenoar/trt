@extends('layouts.site')

@section('title')
Garantía - Todo Reformas Tenerife
@endsection

@section('description')
Ofrecemos garantía en todos nuestros trabajos, ya sean grandes o pequeños.
@endsection

@section('keywords')
empresa, reformas, servicios, tenerife
@endsection

@section('contenido')

    <section>
        @include('site.includes.header')
        <div class="bg-garantia position-relative">
            <div class="bg-opacity position-absolute top-0 start-0"></div>
            <div class="position-absolute top-50 start-50 translate-middle">
                <h1 class="text-white text-center fw-black">GARANTÍA</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <div class="text-center text-lg-start">
                    <p class="text-muted">La mayor parte de nuestros negocios proviene de referencias y clientes que repiten nuevamente con nosotros. Nuestro objetivo no sólo es mantener altos niveles de calidad, sino también la mejora continua en todos los niveles. Somos muy conscientes de que en el entorno competitivo actual, las empresas no vale nada sin que los clientes estén plenamente satisfechos con el servicio recibido.</p>
                    <p class="text-muted">Es nuestro compromiso proporcionar los mayores niveles de servicio en todo momento, sin importar cuán grande o pequeño sea un trabajo.</p>
                    <p class="text-muted">Al finalizar cualquier obra de rehabilitación en general emitimos un certificado de Garantía con una cobertura mínima de 12 meses. En algunos tipos de instalaciones, como techos, ventanas de doble acristalamiento y la representación a prueba de agua, ofrecemos una Garantía aún mayor.</p>
                    <p class="text-muted">Asesoramos a nuestros clientes y le ayudamos a elegir sólo productos y materiales de fabricantes de confianza que estén cubiertos por la garantía completa. Nos responsabilizamos de la instalación completa de los aparatos eléctricos y equipos que conformen la obra.</p>
                </div>
                <h2 class="h4 text-center fw-black my-5">GARANTIZAMOS NUESTROS TRABAJOS EN</h2>
                <div class="row justify-content-center align-items-center g-3">
                    <div class="col-lg-6">
                        <div class="alert alert-secondary m-0" role="alert">
                            <i class="bi bi-check-circle me-1"></i> Equipos de calefacción/AA, fontaneria y accesorios
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary m-0" role="alert">
                            <i class="bi bi-check-circle me-1"></i> Instalación de equipos y accesorios eléctricos
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary m-0" role="alert">
                            <i class="bi bi-check-circle me-1"></i> Electrodomésticos (suministrado e instalado por nosotros)
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary m-0" role="alert">
                            <i class="bi bi-check-circle me-1"></i> Saneamientos preventivos
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary m-0" role="alert">
                            <i class="bi bi-check-circle me-1"></i> Instalación de redes de protección
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary m-0" role="alert">
                            <i class="bi bi-check-circle me-1"></i> Impermeabilización de cubiertas y fachadas
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary m-0" role="alert">
                            <i class="bi bi-check-circle me-1"></i> Pinturas exteriores e interiores
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="alert alert-secondary m-0" role="alert">
                            <i class="bi bi-check-circle me-1"></i> Ejecuciones de obra
                        </div>
                    </div>
                </div>
                <div class="alert alert-primary text-center fw-bold my-5" role="alert">
                    <i class="bi bi-info-circle-fill me-1"></i> DISPONEMOS DE SEGURO DE RESPONSABILIDAD CIVIL Y PLAN DE RIESGOS LABORALES
                </div>
                <p class="text-muted text-center text-lg-start">En caso de necesitar información adicional, hacernos un comentario o simplemente si usted no está satisfecho con el nivel de servicio que proporcionamos, por favor no dude en ponerse en contacto con nosotros vía e-mail, teléfono o por escrito. Uno de nuestros Asesores le atenderá de inmediato.</p>
            </div>
        </div>
    </section>


    <!-- footer -->

    @include('site.includes.footer')

    <!-- varios -->

    @include('site.includes.canvas-menu')

    @include('site.includes.boton-telefono')


@endsection