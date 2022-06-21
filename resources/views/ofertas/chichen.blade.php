<?php use App\Http\Controllers\Sitio; ?>
@extends('layout')

@section('contenido')

<div id="barra-Categoria" class=" .ocultar-movil">
    
</div>
<div class="parallax-window" id="parallax-oferta" data-parallax="scroll" data-image-src="{{ url('/img/promo1.png') }}">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center" style="height: 449px;">
            <div class="col-12 text-center">
                <img src="../img/super.png" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@include('includes.migajas', array('miVar' => 'Tours > Cancún'))

<div class="container mt-5">
    <div class="row slider-oferta">
        <div class="col-12 text-center" style="background-color: #f9f9f9; -webkit-box-shadow: 0px 0px 11px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 11px 0px rgba(0,0,0,0.75);
box-shadow: 0px 0px 11px 0px rgba(0,0,0,0.75);">
            <p style="    font-size: 29px;
    color: #17B6E8;
    border-bottom: 1px solid;">Reserva y viaja. ¡No lo pienses más!</p>
            <p style="font-size: 25px;">¡Ven, conoce y disfruta del Caribe Mexicano!</p>
            <p style="font-weight: bold;">*INCLUYE*</p>
            <ul style="list-style: none;">
                <li>1) 6 NOCHES, 7 DÍAS EN DEPARTAMENTO AMUEBLADO</li>
                <li>2) TRASLADO REDONDO AEROPUERTO EN CAMIONETA DE LUJO</li>
                <li>3) TOUR PRIVADO CHICHEN ITZA DELUXE-TODO INCLUIDO.</li>
                <ul style="list-style: none;">
                  <li>* NADO EN CENOTE IK-KIL.</li>
                  <li>* COMIDA BUFFET.</li>
                </ul>
                <li>4) UN DÍA DE NAVEGACIÓN EN BOTE PRIVADO DE LUJO A ISLA MUJERES, ZONA CANCUN Y  MANGLARES DE LAGUNA NICHUPTÉ.</li>
                <li>5) TOUR PRIVADO A ZONA ARQUEOLÓGICA DE TULUM + COBÁ.</li>
                <li>6) TRASLADO A PLAYA DEL CARMEN, VISITA A 5TA AVENIDA + PUNTOS DE INTERES.</li>
                <li>7)TRASLADO REDONDO HOTEL/DEPARTAMENTO- PUERTO DE EMBARQUE.</li>
            </ul>
            <p style="font-weight: bold;">Precio por persona de $,9,900 pesos. (Paquete para 6 personas)</p>
            <p>Contáctanos, te damos más detalles y la oportunidad de pagar hasta en 3 parcialidades según te convenga.</p>
            <p>¡Reserva ya!</p>
        </div>
        <div class="row col-md-12 col-12">
                    <div class="col-12 text-center titulo mt-5">
                            <h2 style="font-weight: 300; font-size: 1.4em;"><b>CONTACTANOS</b></h2>
                    </div>
                    <div class="col-md-12 d-lg-flex justify-content-center">
                        <div style="background-color: #37B721; height: 2px; width: 100px;">
                                    
                        </div>
                    </div>
                    <div class="col-12 text-center mt-2">
                        <p><a href="mailto:reservas@cancundoit.com"> reservas@cancundoit.com</a></p>
                        <p><a href="mailto:enrique.ocampo@cancundoit.com">enrique.o@cancundoit.com</a></p>
                        <p class="mb-0">(998) 500 70 93</p>
                        <p class="m-0">Altitud 54 SA de CV</p>
                        <p class="m-0">Azuna Corporate Center Piso 11</p>
                        <p class="m-0">Av. Sayil esquina Av. Savignac,</p>
                        <p class="m-0">Malecon Tajamar, Cancún</p>
                        <p class="m-0">C.P. 77500</p>
                    </div>
                </div>
        <div class="col-md-6">
            <h2 class="text-center" style="border-bottom: 1px solid #b7b7b7;
    text-shadow: 3px 3px 3px #aaa; font-weight: bold;">DEPARTAMENTO</h2>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{ url('/img/depa1.jpeg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/depa2.jpeg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/depa3.jpeg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/depa4.jpeg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/depa5.jpeg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/depa6.jpeg')}}" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
        <div class="col-md-6">
            <h2 class="text-center" style="border-bottom: 1px solid #b7b7b7;
    text-shadow: 3px 3px 3px #aaa; font-weight: bold;">CAMIONETAS</h2>
            <div id="camionetas" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{ url('/img/camioneta1.jpeg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/camioneta2.jpeg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/camioneta3.jpeg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/camioneta4.png')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/camioneta5.jpeg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/camioneta6.jpeg')}}" alt="Third slide">
                </div>
                 <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/camioneta7.jpeg')}}" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#camionetas" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#camionetas" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>

         <div class="col-md-6 mt-4">
            <h2 class="text-center" style="border-bottom: 1px solid #b7b7b7;
    text-shadow: 3px 3px 3px #aaa; font-weight: bold;">CHICHÉN ITZÁ + TULUM + COBA</h2>
            <div id="chichen" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{ url('/img/chichenoferta1.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/chichenoferta2.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/chichenoferta3.jpg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/chichenoferta4.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/chichenoferta5.jpg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/tulumoferta1.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/tulumoferta2.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/tulumoferta3.jpg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/cobaoferta1.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/cobaoferta2.jpg')}}" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#chichen" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#chichen" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
       <div class="col-md-6 mt-4">
            <h2 class="text-center" style="border-bottom: 1px solid #b7b7b7;
    text-shadow: 3px 3px 3px #aaa; font-weight: bold;">YATE</h2>
            <div id="yate" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{ url('/img/yateoferta1.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/yateoferta2.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/yateoferta3.jpg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/yateoferta4.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/yateoferta5.jpeg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/yateoferta6.jpeg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/yateoferta8.jpeg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/yateoferta9.jpeg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/yateoferta10.jpeg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/yateoferta11.jpeg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/yateoferta12.jpeg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/yateoferta13.jpeg')}}" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#yate" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#yate" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>

        <div class="col-md-6 mt-4">
            <h2 class="text-center" style="border-bottom: 1px solid #b7b7b7;
    text-shadow: 3px 3px 3px #aaa; font-weight: bold;">PLAYA DEL CARMEN</h2>
            <div id="playa" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{ url('/img/playaoferta1.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/playaoferta2.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/playaoferta3.jpg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/playaoferta4.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/playaoferta5.jpg')}}" alt="Second slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#playa" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#playa" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>

        <div class="col-md-6 mt-4">
            <h2 class="text-center" style="border-bottom: 1px solid #b7b7b7;
    text-shadow: 3px 3px 3px #aaa; font-weight: bold;">CENOTE IK-KIL</h2>
            <div id="cenote" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{ url('/img/cenote-1.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/cenote-2.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/cenote-3.jpg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/cenote-4.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ url('/img/cenote-5.jpg')}}" alt="Second slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#cenote" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#cenote" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </div>
</div>



@stop
