@extends('layouts.site')

@section('title')
Empresa - Todo Reformas Tenerife
@endsection

@section('description')
Somos una plataforma de trabajo compuesta por una agrupacion de empresas experta en diferentes areas de la construcción.
@endsection

@section('keywords')
empresa, reformas, servicios, tenerife
@endsection

@section('contenido')

    <section>
        @include('site.includes.header')
        <div class="bg-empresa position-relative">
            <div class="bg-opacity position-absolute top-0 start-0"></div>
            <div class="position-absolute top-50 start-50 translate-middle">
                <h1 class="text-white text-center fw-black">TODO REFORMAS TENERIFE</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <div class="row justify-content-around align-items-center g-4">
                    <div class="col-lg-5">
                        <img src="{{ asset('img/nosotros.jpg') }}" class="img-fluid shadow-sm" alt="Todo Reformas Tenerife">                         
                    </div>
                    <div class="col-lg-5 text-center text-lg-start">
                        <p class="text-muted"><span class="fw-bold">Todo Reformas Tenerife</span>, es una plataforma de trabajo compuesta por una agrupación de empresas expertas en diferentes áreas de la construcción. Cada una de ellas, aporta su dilatada experiencia y pone a su disposición sus técnicos especialistas en todos los sectores que su obra necesita.</p>
                        <p class="text-muted">Contamos con personal cualificado y con gran experiencia en el sector de la construcción, decoración, fachadas y trabajos verticales, fontanería, electricidad y artesanía en hierro y acero y todas las áreas necesarias para llevar a buen término su proyecto.</p>
                        <p class="text-muted">Ofrecemos rapidez, calidad, eficacia y garantía en todos sus trabajos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid bg-section py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <h2 class="h3 fw-black text-center mb-5"><span class="text-primary">¿PORQUE</span> ELEGIRNOS?</h2>
                <div class="row g-4 g-lg-5 mt-5">
                    <div class="col-lg-4">
                        <div class="row ">
                            <div class="col-2 col-lg-3">
                                <i class="bi bi-hand-thumbs-up text-primary display-5"></i>
                            </div>
                            <div class="col-10 col-lg-9">
                                <h3 class="fw-bold h5">TRANSPARENCIA</h3>
                                <p>Completa transparencia y sin costes ocultos en todos nuestros trabajos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row ">
                            <div class="col-2 col-lg-3">
                                <i class="bi bi-award text-primary display-5"></i>
                            </div>
                            <div class="col-10 col-lg-9">
                                <h3 class="fw-bold h5">EXPERIENCIA</h3>
                                <p>Somos una empresa formada por profesionales con más de 15 años de experiencia en el sector de las obras y reformas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row ">
                            <div class="col-2 col-lg-3">
                                <i class="bi bi-tools text-primary display-5"></i>
                            </div>
                            <div class="col-10 col-lg-9">
                                <h3 class="fw-bold h5">SERVICIOS</h3>
                                <p>Contamos con una amplia gama de servicios que adaptamos a sus necesidades específicas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row ">
                            <div class="col-2 col-lg-3">
                                <i class="bi bi-info-circle text-primary display-5"></i>
                            </div>
                            <div class="col-10 col-lg-9">
                                <h3 class="fw-bold h5">ATENCIÓN</h3>
                                <p>Todos nuestros presupuestos son personalizados partiendo de una visita al cliente.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row ">
                            <div class="col-2 col-lg-3">
                                <i class="bi bi-clock text-primary display-5"></i>
                            </div>
                            <div class="col-10 col-lg-9">
                                <h3 class="fw-bold h5">TIEMPOS</h3>
                                <p>Nos comprometemos a terminar el trabajo a tiempo y dentro del presupuesto.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row ">
                            <div class="col-2 col-lg-3">
                                <i class="bi bi-droplet text-primary display-5"></i>
                            </div>
                            <div class="col-10 col-lg-9">
                                <h3 class="fw-bold h5">LIMPIEZA</h3>
                                <p>Una obra no queda terminada para nosotros si no queda todo limpio y recogido, al finalizar la misma.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row ">
                            <div class="col-2 col-lg-3">
                                <i class="bi bi-shield-check text-primary display-5"></i>
                            </div>
                            <div class="col-10 col-lg-9">
                                <h3 class="fw-bold h5">SEGURIDAD</h3>
                                <p>Disponemos de Seguro de Responsabilidad Civil para todos nuestros trabajos y cumplimos con un Plan de Riesgos Laborales.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row ">
                            <div class="col-2 col-lg-3">
                                <i class="bi bi-file-text text-primary display-5"></i>
                            </div>
                            <div class="col-10 col-lg-9">
                                <h3 class="fw-bold h5">LEGAL</h3>
                                <p>Nuestro personal esta dado de alta en la Seguridad Social y contribuimos con nuestros impuestos al mantenimiento del bien social.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row ">
                            <div class="col-2 col-lg-3">
                                <i class="bi bi-patch-check text-primary display-5"></i>
                            </div>
                            <div class="col-10 col-lg-9">
                                <h3 class="fw-bold h5">GARANTÍA</h3>
                                <p>Contamos con personal cualificado y con gran experiencia que garantiza todos nuestros trabajos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <h3 class="h3 fw-black text-center mb-5"><span class="text-primary">PREGUNTAS</span> FRECUENTES</h3>
                
                
                <div class="accordion" id="faq">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingUno">
                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUno" aria-expanded="true" aria-controls="collapseUno">
                                ¿TIENE COSTO PEDIR UN PRESUPUESTO?
                            </button>
                        </h2>
                        <div id="collapseUno" class="accordion-collapse collapse show" aria-labelledby="headingUno" data-bs-parent="#faq">
                            <div class="accordion-body">
                                No tiene ningun costo, simplemente pasamos su consulta al gerente de producción y recibirá a la brevedad su presupuesto gratuitamente.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingDos">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDos" aria-expanded="false" aria-controls="collapseDos">
                                ¿QUÉ TIPO DE TRABAJO PODEMOS LLEVAR A CABO?
                            </button>
                        </h2>
                        <div id="collapseDos" class="accordion-collapse collapse" aria-labelledby="headingDos" data-bs-parent="#faq">
                            <div class="accordion-body">
                                Prácticamente toda la gama de obras de construcción y remodelación. Esto incluye pequeños proyectos de nueva construcción, por ejemplo una casa de huéspedes simple o doble piso, ampliación o reformas de su vivienda, etc. También ofrecemos todos los servicios de decoración, como la carpintería a medida, armarios empotrados, puertas, zócalos, decoración, suelo de cerámica, baños y cocinas totalmente equipadas de cualquier proveedor.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTres">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTres" aria-expanded="false" aria-controls="collapseTres">
                                ¿QUÉ CALIDADES Y MARCAS COMERCIALES UTILIZAMOS?
                            </button>
                        </h2>
                        <div id="collapseTres" class="accordion-collapse collapse" aria-labelledby="headingTres" data-bs-parent="#faq">
                            <div class="accordion-body">
                                Los materiales de construcción utilizados, dependerán en gran medida de la descripción de cada proyecto, nuestros técnicos le aconsejaran basandose en criterios de durabilidad y relación calidad/precio con marcas de reconocido prestigio como por ejemplo: pinturas Tkrom, Petrex 5, Telacril, Jafep, Padel.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingCuatro">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCuatro" aria-expanded="false" aria-controls="collapseCuatro">
                                ¿OFRECEN ASESORAMIENTO GRATUITO SI ES NECESARIO?
                            </button>
                        </h2>
                        <div id="collapseCuatro" class="accordion-collapse collapse" aria-labelledby="headingCuatro" data-bs-parent="#faq">
                            <div class="accordion-body">
                                Por supuesto. No se espera que usted sea un experto en todas las áreas que conforman una obra de reforma Si es necesario, le acompañaremos a elegir el material que desea instalar y nuestro técnico pondrá a su servicio toda su experiencia profesional, de forma que entre ambos puedan encontrar la mejor solución a su proyecto. Le asesoraremos en cuanto a materiales a utilizar, decoración, soluciones de fontanería o electricidad asi como aspectos prácticos
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingCinco">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCinco" aria-expanded="false" aria-controls="collapseCinco">
                                ¿QUÉ DEBO HACER AHORA?
                            </button>
                        </h2>
                        <div id="collapseCinco" class="accordion-collapse collapse" aria-labelledby="headingCinco" data-bs-parent="#faq">
                            <div class="accordion-body">
                                Dénos una llamada en <span class="fw-bold">627 905 132</span> o utilice nuestro formulario de contacto proporcionándonos una descripción detallada de lo que usted necesita y a continuación, uno de nuestros técnicos le hará una visita.
                            </div>
                        </div>
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