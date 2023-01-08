@extends('layouts.site')

@section('title')
Garantía - Todo Reformas Tenerife
@endsection

@section('description')
Ofrecemos garantia en Todos nuestros trabajos, ya sean grandes o pequeños.
@endsection

@section('keywords')
empresa, reformas, servicios, tenerife
@endsection

@section('contenido')

    <section>
        @include('site.includes.header')
        <div class="bg-trabajos position-relative">
            <div class="bg-opacity position-absolute top-0 start-0"></div>
            <div class="position-absolute top-50 start-50 translate-middle">
                <h1 class="text-white text-center fw-black">ÚLTIMOS TRABAJOS</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid bg-section py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                @livewire('site.trabajos-interior')
            </div>
        </div>
    </section>


    <!-- footer -->

    @include('site.includes.footer')

    <!-- varios -->

    @include('site.includes.canvas-menu')

    @include('site.includes.boton-telefono')


@endsection