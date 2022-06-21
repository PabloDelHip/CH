<?php use App\Http\Controllers\Sitio; ?>
@extends('en.layout')

@section('contenido')

<div id="barra-Categoria" class=" .ocultar-movil">
    
</div>
<div class="parallax-window" id="tamano-parallax" style="height: 450px;" data-parallax="scroll" data-image-src="{{ url('/img/hot-sale.png') }}">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center" style="height: 449px;">
            <div class="col-12 text-center">
                <img src="../img/hot-sale.png" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@include('includes.migajas', array('miVar' => 'Tours > Cancún'))

<div class="container mt-5">
    <div class="row slider-oferta">
        <div class="col-12 text-center">
            <p style="    font-size: 29px;
    color: #17B6E8;
    border-bottom: 1px solid;">Book and travel in November 2018. Do not think twice!</p>
            <p style="font-size: 25px;">Come, meet and enjoy the Mexican Caribbean!</p>
            <p style="font-weight: bold;">*IT INCLUDES*</p>
            <ul style="list-style: none;">
                <li>1) 6 NIGHTS, 7 DAYS IN FURNISHED DEPARTMENT</li>
                <li>2) TRANSFER ROUND AIRPORT IN TRUCK DELUXE</li>
                <li>3) PRIVATE TOUR CHICHEN ITZA DELUXE-ALL INCLUDED.</li>
                <li>4) A DAY OF NAVIGATION IN PRIVATE LUXURY BOAT TO ISLA MUJERES, CANCUN ÁREA AND MANGROVES OF LAGUNA NICHUPTÉ.</li>
                <li>5) PRIVATE TOUR TO ARCHAEOLOGICAL ZONE OF TULUM + COBÁ.</li>
                <li>6) TRANSFER TO PLAYA DEL CARMEN, VISIT A 5TA AVENIDA + POINTS OF INTEREST.</li>
                <li>7) TRANSFER ROUND HOTEL / DEPARTMENT-PORT OF SHIPMENT.</li>
            </ul>
            <p style="font-weight: bold;">Price per person of $ 590 US DOLARS (Package for 6 people)</p>
            <p>Contact us, we give you more details and the opportunity to pay up to 3 payments according to your convenience.</p>
            <p>Reserve now!</p>
        </div>
        <div class="col-6">
            <h2 class="text-center" style="border-bottom: 1px solid #b7b7b7;
    text-shadow: 3px 3px 3px #aaa; font-weight: bold; text-transform: uppercase;">Department</h2>
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
        <div class="col-6">
            <h2 class="text-center" style="border-bottom: 1px solid #b7b7b7;
    text-shadow: 3px 3px 3px #aaa; font-weight: bold; text-transform: uppercase;">trucks</h2>
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

          <div class="col-6 mt-4">
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
       <div class="col-6 mt-4">
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

        
    </div>
</div>



@stop
