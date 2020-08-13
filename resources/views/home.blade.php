@extends('layouts.app')

@section('content')
<div class="bradcam_area" id="us">
    <div class="bradcam_shap">
        <img src="img/ilstrator/bradcam_ils.png" alt="">
    </div>
</div>

@if (session('contact'))
<div class="container pt-5">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <h4>Recibimos tu mensaje!</h4>
                <p>
                    En breve nos pondremos en contacto. Muchas gracias!!
                </p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>
@endif
<div class="compapy_info minus_padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-md-5">
                <div class="man_thumb">
                    <img src="img/ilstrator/delivery_man2.png" alt="">
                </div>
            </div>
            <div class="col-xl-7 col-md-7">
                <div class="company_info">
                    <h3>Dedicados al servicio de mensajería en motocicleta.<br>
                    </h3>
                    <p>
                        Nos enfocamos en brindar seguridad, confianza y excelentes resultados.
                        En todos los envíos dentro de Quintana Roo. Trabajamos día a día ofreciendo
                        un servicio de primer nivel al contar con mensajeros calificados, siempre listos para atenderte.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="services"></div>
</div>

<div class="accordion_area" >
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="faq_ask">
                    <h3>Servicios</h3>
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Afiliados
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style="">
                                <div class="card-body">
                                    ¿Tienes un negocio y necesitas servicio de repartidor? Afíliate con nosotros
                                    y ya no tendrás que preocuparte por hacer llegar tus productos hasta donde
                                    tus clientes estén. ¡Obtén el servicio express pagando desde $$ mensuales!
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Servicios Premium
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                <div class="card-body">
                                    Moto Envía te ofrece el servicio de envíos internacionales.
                                    ¿Necesitas recibir un paquete desde otro país? Moto envía se encargará
                                    de la logística y trámites aduanales para que puedas recibir tu
                                    paquete hasta la comodidad de tu hogar.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Membresía de prepago
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                                <div class="card-body">
                                    ¡Suscríbete a nuestra membresía para consumidores!
                                    Por tan sólo $2,000 MXN anuales, obtén 5 servicios cada mes y
                                    despreocúpate, todo lo tendrás al alcance de tu mano. <br>
                                    <small>*Aplican restricciones</small>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Cotizaciones
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion" style="">
                                <div class="card-body">
                                    ¡Cotiza sin compromiso! En Moto Envía ofrecemos los mejores precios y tiempos
                                    del mercado, además obtendrás tu cotización el mismo día en que la realices.
                                    <br>
                                    <small>*Tiempos aproximados*</small>
                                    <ul>
                                        <li style="list-style: disc; margin-left: 20px">Internacional: de 13 a 16 días hábiles.</li>
                                        <li style="list-style: disc; margin-left: 20px">Desde EU: de 8 a 10 días hábiles.</li>
                                        <li style="list-style: disc; margin-left: 20px">Dentro del país: de 3 a 5 días hábiles.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Flotilla
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion" style="">
                                <div class="card-body">
                                    En Moto Envía contamos con una extensa y completa flotilla para
                                    adecuarnos a tus necesidades y los requerimientos de tus envíos
                                    <br>
                                    <ul>
                                        <li style="list-style: disc; margin-left: 20px">Motocicletas.</li>
                                        <li style="list-style: disc; margin-left: 20px">Autos.</li>
                                        <li style="list-style: disc; margin-left: 20px">Remolques.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <a data-toggle="modal" data-target="#exampleModalCenter"
                               href="#!" class="genric-btn info-border circle arrow"
                            >
                                <i class="fa fa-shipping-fast"></i> <span>Cotiza tu envío!</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="accordion_thumb">
                    <img src="img/ilstrator/services.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="shipping"></div>
</div>

<div class="features_area" >
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center">
                    <h3>Enviamos lo que quieras a <br>
                        cualquier parte de Quintana Roo</h3>
                    <p>
                        Horarios de atención: lunes a domingo, de 8:00 am a 10:00 pm.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-md-3 col-lg-2 col-xl-2 text-center">
                <div class="single_feature">
                    <div class="icon">
                        <img src="img/icons/doc.png" width="50px" alt="">
                    </div>
                    <h4>Documentos</h4>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 col-xl-2 text-center">
                <div class="single_feature">
                    <div class="icon">
                        <img src="img/icons/package.png" width="50px" alt="">
                    </div>
                    <h4>Paquetes</h4>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 col-xl-2 text-center">
                <div class="single_feature">
                    <div class="icon">
                        <img src="img/icons/water.png" width="50px" alt="">
                    </div>
                    <h4>Bebidas</h4>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 col-xl-2 text-center">
                <div class="single_feature">
                    <div class="icon">
                        <img src="img/icons/food.png" width="49px" alt="">
                    </div>
                    <h4>Comidas</h4>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 col-xl-2 text-center">
                <div class="single_feature">
                    <div class="icon">
                        <img src="img/icons/medkit.png" width="58px" alt="">
                    </div>
                    <h4>Medicinas</h4>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2 col-xl-2 text-center">
                <div class="single_feature">
                    <div class="icon">
                        <img src="img/icons/laundry.png" width="50px" alt="">
                    </div>
                    <h4>Lavanderia</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="padding: 50px 0; ">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="man_thumb">
                <img src="img/ilstrator/motoenvia.jpg" class="img-fluid" alt="Responsive image">
            </div>
        </div>
    </div>
    <div id="mission"></div>
</div>


<div class="compapy_info minus_padding" >
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-md-5">
                <div class="man_thumb">
                    <img src="img/ilstrator/moto.png" alt="">
                </div>
            </div>
            <div class="col-xl-7 col-md-7">
                <div class="company_info">
                    <h3>Nuestra Misión<br>
                    </h3>
                    <p>Garantizar un transporte seguro de mensajería y paquetería, con una
                        distribución eficiente, con el sello de calidad y servicio de (Moto Envía)
                        lograr el desarrollo integral de los <b>empleados</b>, la estabilidad de la <b>empresa</b>,
                        las justas utilidades de los <b>socios</b> y la satisfacción de <b>nuestros clientes</b>.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="vision"></div>
</div>

<div class="compapy_info minus_padding" >
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-md-7">
                <div class="company_info">
                    <h3>Visión<br>
                    </h3>
                    <p>Desarrollar Servicios diferenciales, exclusivos y personalizados
                        para llevar a cabo una labor 100% eficiente en el menor lapso de
                        tiempo y costo. Formar equipos de trabajo que conozcan y se comprometan
                        con nuestros clientes para llevar a cabo el propósito de nuestra empresa
                    </p>
                </div>
            </div>
            <div class="col-xl-5 col-md-5">
                <div class="man_thumb">
                    <img src="img/ilstrator/boxes.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <section class="contact-section section_padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h2 class="contact-title" style="font-weight: 300">Cotiza tu envío!</h2>
                        </div>
                        <div class="col-lg-4">
                            <form class="form-contact contact_form"  method="post" id="distance_form">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" id="origin_input" required class="form-control" placeholder="Introduce un origen">
                                            <input id="origin" name="origin" required type="hidden"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="destination_input" required class="form-control" placeholder="Introduce un destino">
                                            <input id="destination" name="destination" required type="hidden"/>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col">
                                                    <select class="custom-select" name="shipping_method" id="shipping_method" required>
                                                        <option value="">Elija un método de envío</option>
                                                        @foreach($shipping_methods as $shipping_method)
                                                            <option data-cost="{{ $shipping_method->cost }}" value="{{ $shipping_method->cost }}">{{ $shipping_method->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="distancia">Distancia (KM)</span>
                                                </div>
                                                <input style="text-align: right;" type="text" name="distance" id="distance" class="form-control" aria-describedby="distancia" readonly="readonly">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="costo">Costo</span>
                                                </div>
                                                <input style="text-align: right; " type="text" class="form-control" id="cost" aria-describedby="costo" readonly="readonly">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <input type="text" id="name" name="name" required class="form-control" placeholder="Nombre">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="phone" name="phone" required class="form-control" placeholder="Teléfono">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="email" name="email" required class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3 text-center" style="margin-bottom: 25px !important;">
                                    <button type="button" id="quote" class="button button-contactForm btn_4 boxed-btn" style="padding: 9px 22px">Solicitar Servicio</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-8">
                            <div id="address-map-container" class="box-shadow" style="width:100%;height:400px; ">
                                <div style="width: 100%; height: 100%" id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
