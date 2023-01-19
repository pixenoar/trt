@extends('layouts.site')

@section('title')
Política de Privacidad - Todo Reformas Tenerife
@endsection

@section('description')
Descripción de las políticas de privacidad.
@endsection

@section('keywords')
politica, privacidad, todo, reformas, tenerife
@endsection

@section('contenido')

    <section>
        @include('site.includes.header')
    </section>

    <section>
        <div class="container-fluid py-4 py-lg-5">
            <div class="container py-4 py-lg-5">
                <h1 class="h4 text-center fw-black my-5">POLÍTICA DE PRIVACIDAD Y PROTECCION DE DATOS</h1>
                <div class="text-center text-lg-start">
                    <p class="text-muted">En cumplimiento del artículo 10 de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y Comercio Electrónico, a continuación se exponen los datos de la empresa.</p>
                    <h2 class="h5 fw-black my-5">POLÍTICA DE PRIVACIDAD</h1>
                    <p class="text-muted">El ordenador donde está alojada la web utiliza cookies para mejorar el servicio prestado por Todo Reformas Tenerife. Estas cookies se instalan automáticamente en el ordenador empleado por los Socios y Usuarios pero no almacenan ningún tipo de información relativa a éstos. Todo Reformas se compromete a guardar la máxima reserva y confidencialidad sobre la información que le sea facilitada y a utilizarla únicamente para los fines indicados. elivelimen shop presume que los datos han sido introducidos por su titular o por persona autorizada por éste, así como que son correctos y exactos.</p>
                    <h2 class="h5 fw-black my-5">POLÍTICA DE PROTECCIÓN DE DATOS</h1>
                    <p class="text-muted">El objetivo de nuestra política de privacidad es respetar al máximo la legislación vigente de protección de datos personales. Si usted tiene cualquier duda sobre la confidencialidad o el tratamiento que reciben sus datos puede ponerse en contacto con nosotros: <img src="{{ asset('img/svg/email-black.svg') }}" alt="Correo Electrónico"></p>
                    <p class="text-muted">Los datos recabados mediante los formularios de contacto o e-mail solo se utilizan para el fin solicitado y solo se envían informaciones relacionadas con la actividad o con la finalidad para la que fueron recabados. Estos datos no son incorporados a ningún fichero, ya que son eliminados una vez terminada la actividad para la que fueron recabados.</p>
                    <p class="text-muted">Los usuarios pueden dirigir una comunicación a la dirección de correo electrónico: <img src="{{ asset('img/svg/email-black.svg') }}" alt="Correo Electrónico"> para solicitar el ejercicio de los derechos de acceso, rectificación, oposición y cancelación.</p>
                    <p class="text-muted">TODO REFORMAS TENERIFE nunca transmitirá, cederá o venderá los datos de los usuarios a ninguna otra empresa bajo ninguna circunstancia.</p>
                    <p class="text-muted">Los Usuarios garantizan y responden, en cualquier caso, de la veracidad, exactitud, vigencia y autenticidad de los Datos Personales facilitados.</p>
                    <h2 class="h5 fw-black my-5">POLÍTICA DE COOKIES</h1>
                    <p class="text-muted">El acceso y la navegación en el sitio, o el uso de los servicios del mismo, implican la aceptación de las Condiciones Generales (y por tanto de la Política de Privacidad y Política de Cookies). Por favor, léelas atentamente.</p>
                    <p class="text-muted">¿Qué es una Cookie? Las cookies son archivos que contienen pequeñas cantidades de información que se descargan en el dispositivo del usuario que se utiliza cuando visitas un sitio web. Su finalidad principal es reconocer al usuario cada vez que accede a www.todoreformastenerife.com y nos permite, además, mejorar la calidad y la usabilidad de nuestra web. Las cookies son esenciales para el funcionamiento de Internet; no pueden dañar el equipo/dispositivo del usuario y, si se encuentran activadas en la configuración de tu navegador.</p>
                    <p class="text-muted">Uso de Cookies por parte de www.todoreformastenerife.com</p>
                    <p class="text-muted">Mediante el acceso a www.todoreformastenerife.com , aceptas de manera expresa que podamos usar este tipo de cookies en tus dispositivos.</p>
                    <p class="text-muted">a) Cookies Propias: No usamos</p>
                    <p class="text-muted">b) Cookies de Google Analytics. El sitio utiliza el servicio Google Analytics, que es prestado por Google, Inc., entidad cuya oficina principal está en 1600 Amphitheatre Parkway, Mountain View (California), CA 94043, Estados Unidos ("Google").</p>
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