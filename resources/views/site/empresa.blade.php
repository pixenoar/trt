@extends('layouts.site')

@section('title')
    La Empresa - Todo Reformas Tenerife
@endsection

@section('contenido')

    <section id="header">
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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nesciunt dolores consequatur. Quasi commodi veritatis voluptatum quisquam qui exercitationem repellat optio molestiae aperiam cum, aliquam corrupti sapiente debitis nisi quod.</p>
            </div>
        </div>
    </section>

    @include('site.includes.canvas-menu')

    @include('site.includes.boton-telefono')


@endsection