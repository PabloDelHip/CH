<?php use App\Http\Controllers\Sitio; ?>
@extends('layout')

@section('contenido')

<div id="barra-Categoria" class=" .ocultar-movil">
    
</div>
<div class="parallax-window" id="parallax-oferta" data-parallax="scroll" data-image-src="{{ url('/img/depas.jpg') }}">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center" style="height: 300px;">
           
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
    border-bottom: 1px solid;">Reserva y viaja, Con el mejor hospedaje ¡No lo pienses más!</p>
            <p style="font-size: 25px;">¡Ven, conoce y disfruta del Caribe Mexicano!</p>
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
        <div class="row col-md-12 d-flex" >
            <nav style="width: 100%;">
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">4 huespedes - P. del Carmen</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">4 huespedes - P. del Carmen</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">2 huespedes - P. del Carmen </a>

                <a class="nav-item nav-link" id="uno-cancun-tab" data-toggle="tab" href="#uno-cancun" role="tab" aria-controls="uno-cancun" aria-selected="true">6 huespedes - Cancún</a>
                <a class="nav-item nav-link" id="dos-cancun-tab" data-toggle="tab" href="#dos-cancun" role="tab" aria-controls="dos-cancun" aria-selected="false">2 huespedes - Cancún</a>
                <a class="nav-item nav-link" id="tres-cancun-tab" data-toggle="tab" href="#tres-cancun" role="tab" aria-controls="tres-cancun" aria-selected="false">6 huespedes - Cancún </a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" style="padding: 18px;">
                <h3 style="font-size: 2.2em; color: #80e26f !important; font-weight: 700; ">Condominio Ícono Playa </h3>
                
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="col-12" style="border: 1px solid #EBEBEB !important;
                          border-radius: 4px !important;
                          box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important; padding: 24px !important;">
                      <p style="color: #767676;"><b>Lo mejor del alojamiento</b></p>
                        <p>Amplio departamento, 2 cajones de estacionamiento, Acceso controlado y  Exclusivo condominio con amplias y atractivas áreas verdes, Gimnasio equipado, Pista de Jogging, Alberca con jacuzzi y chapoteadero con asoleadero perimetral, Cancha de usos múltiples, Juegos infantiles, palapa junto a alberca con barra de servicio y asador. Hot Spot de Internet inalámbrico en áreas generales. aire acondicionado mini split, equipo contra incendio, conmutador entre departamentos y caseta, áreas públicas y administración, gimnasio equipado,  alberca con jacuzzi y chapoteadero con asoleadero , cancha de usos múltiples, juegos infantiles, palapa junto a alberca con barra de servicio y asador.</p>
                    </div>

                  </div>


                   <div class="col-12 col-md-6">

                     <div class="col-12" style="border: 1px solid #EBEBEB !important; border-radius: 4px !important; box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important; padding: 24px !important;">
                        <p style="color: #767676;"><b>Servicios</b></p>



                        <ul>
                          <li><i class="fas fa-home"></i> ESTUDIO B210</li>
                          <li><i class="fas fa-home"></i> Estudio en 2o nivel.</li>
                          <li><i class="fas fa-users"></i> Max 4 huéspedes.</li>
                          <li> <i class="fas fa-bath"></i> Estudio con 1 habitación y baño independiente</li>
                          <li><i class="fas fa-bed"></i> 1 cama matrimonial.</li>
                          <li><i class="fas fa-couch"></i> 2 sofá individuales.</li>
                          <li><i class="fas fa-utensils"></i> Cocineta equipado con utensilios.</li>
                          <li><i class="fas fa-lock"></i> Caja de Seguridad.</li>
                          <li><i class="fas fa-wifi"></i> WiFi / 2 Tv / Aire Acondicionado.</li>
                          <li>Secadora de cabello.</li>
                          <li><i class="fas fa-tint"></i> Centro de Lavado</li>
                        </ul>
                     </div>

                </div>
                  
                </div>

               

                

                <p class="mt-2" style="border-top: 1px solid #000; width: 100%; color: #767676;"><b>Fotografias</b></p>
                
              </div>
              <!-- ICONO PLAYA -->

              
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" style="padding: 18px;">
                <h3 style="font-size: 2.2em; color: #80e26f !important; font-weight: 700;">Condominio Sabor a Miel </h3>




                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="col-12" style="border: 1px solid #EBEBEB !important; border-radius: 4px !important; box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important;padding: 24px !important;">
                      <p style="color: #767676;"><b>Lo mejor del alojamiento</b></p>
                         <p>El Departamento Sabor a Miel es una estancia perfecta para descansar y relajarse, cuenta con equipamiento completo y confortable perfecto para disfrutar de las hermosas playas del Mar Caribe, con su hermosa vista desde el Roof Top. Está ubicado a solo 1 calle de la playa y de los clubes de playa "La Martina" y "Cannibal Royal". Cuenta con hamaca en el balcón y en la habitación, aires acondicionados en cada espacio.</p>
                    </div>

                  </div>


                   <div class="col-12 col-md-6">

                     <div class="col-12" style="border: 1px solid #EBEBEB !important; border-radius: 4px !important; box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important; padding: 24px !important;">
                        <p style="color: #767676;"><b>Servicios</b></p>
                       <ul>
                        <li><i class="fas fa-home"></i> Departamento en 3er nivel con elevador y terraza con hamaca.</li>
                        <li><i class="fas fa-bath"></i> 1 Habitación / 1 baño completo.</li>
                        <li><i class="fas fa-bed"></i> 1 Cama / 1 King / 1 sofá cama.</li>
                        <li><i class="fas fa-couch"></i> Sala con terraza y hamaca.</li>
                        <li><i class="fas fa-utensils"></i>Cocina integral de mármol / Comedor</li>
                        <li><i class="fas fa-tint"></i>Centro de Lavado</li>
                        <li><i class="fas fa-wifi"></i> WiFi / Tv / Aire Acondicionado.</li>
                        <li><i class="fas fa-swimming-pool"></i> Roof Garden con Alberca y Vista al Mar, Jacuzzi,, Asoleadero con camastros.</li>
                      </ul>
                     </div>

                </div>
                  
                </div>



                <p class="mt-2" style="border-top: 1px solid #000; width: 100%; color: #767676;"><b>Fotografias</b></p>
              </div>
              <!-- THE CITY -->


              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" style="padding: 18px;">
                  <h3 style="font-size: 2.2em; color: #80e26f !important; font-weight: 700;">Condominio The City </h3>
                  

                  {{-- <p class="mt-2" style="border-top: 1px solid #EBEBEB !important; color: #767676;"><b>Servicios (Estudio 2204 Sur)</b></p> --}}
                    



                     <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="col-12" style="border: 1px solid #EBEBEB !important; border-radius: 4px !important; box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important; padding: 24px !important;">
                      <p style="color: #767676;"><b>Lo mejor del alojamiento</b></p>
                         <p>My Menesse The City, Estudio ubicado en un exclusivo desarrollo en la zona centro de Playa del Carmen, sobre una de las principales avenidas totalmente renovada, donde se combina un ambiente residencial y turístico. Ubicación estratégica cerca de la emblemática 5a Avenida y su plaza Quinta Alegría, frente a supermercado, comercios y restaurantes, de ahí ubicarás la playa a solo unos pasos. Las amenidades a las que tendrás acceso pasando por el lobby y su atrio lleno de vegetación con alberca, gimnasio, spa, sala de cine, kids club y una segunda alberca en el Solarium con Sky bar y Zona Lounge.</p>
                    </div>

                  </div>


                   <div class="col-12 col-md-6">

                     <div class="col-12" style="border: 1px solid #EBEBEB !important; border-radius: 4px !important; box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important; padding: 24px !important;">
                        <p style="color: #767676;"><b>Servicios (Estudio 2204 Sur)</b></p>

                        <ul>
                      <li><i class="fas fa-home"></i> Estudio en 2o nivel con elevador y terraza.</li>
                      <li><i class="fas fa-users"></i> Max 2 huéspedes.</li>
                      <li><i class="fas fa-bath"></i> Estudio privado con baño independiente</li>
                      <li><i class="fas fa-bed"></i> 1 cama queen size.</li>
                      <li>Desayunador</li>
                      <li><i class="fas fa-utensils"></i> Cocineta equipado con utensilios.</li>
                      <li> <i class="fas fa-lock"></i> Caja de Seguridad.</li>
                      <li><i class="fas fa-wifi"></i> WiFi / Tv / Aire Acondicionado.</li>
                    </ul>

                    <p class="mt-2" style="color: #767676;"><b>Servicios (Estudio 2217 Sur)</b></p>
                    <ul>
                      <li><i class="fas fa-home"></i> Estudio en 2o nivel con elevador y terraza.</li>
                      <li><i class="fas fa-users"></i> Max 2 huéspedes.</li>
                      <li><i class="fas fa-bath"></i> Estudio privado con baño independiente</li>
                      <li><i class="fas fa-bed"></i> 1 cama queen size.</li>
                      <li>Desayunador</li>
                      <li><i class="fas fa-utensils"></i> Cocineta equipado con utensilios.</li>
                      <li><i class="fas fa-lock"></i> Caja de Seguridad.</li>
                      <li><i class="fas fa-wifi"></i> WiFi / Tv / Aire Acondicionado.</li>
                      <li>Secadora de cabello.</li>
                      <li><i class="fas fa-child"></i> Área verde / Chapoteadero / Juegos infantiles.</li>
                      <li><i class="fas fa-swimming-pool"></i> Solarium con Alberca, Sky Bar, GYM, Spa, Kids Club, Cine.</li>
                    </ul>
                     </div>

                  </div>
                  
                  </div>

                  <p class="mt-2" style="border-top: 1px solid #000; width: 100%; color: #767676;"><b>Fotografias</b></p>
                  
                 
              </div>
              <!-- SABOR A MIEL -->

              {{-- ******************************* --}}
              {{-- DEPARTAMENTOS DE CANCUN --}}
              {{-- *********************************** --}}

          <div class="tab-pane fade" id="uno-cancun" role="tabpanel" aria-labelledby="uno-cancun-tab" style="padding: 18px;">
                <h3 style="font-size: 2.2em; color: #80e26f !important; font-weight: 700; ">Condominio Cuspide </h3>
                
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="col-12" style="border: 1px solid #EBEBEB !important;
                          border-radius: 4px !important;
                          box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important; padding: 24px !important;">
                      <p style="color: #767676;"><b>Lo mejor del alojamiento</b></p>
                        <p>Este moderno y vanguardista apartamento se ubica en un desarrollo exclusivo, meticulosamente diseñado y planificado con amenidades para uso común. Cuenta con acabados de alta calidad, siempre conservando el estilo único del Caribe mexicano, la calidad, comodidad, distribución y una perfecta ubicación.
                      Las amenidades del Condominio las podrás disfrutar desde la llegada, cuenta con estacionamiento subterráneo, lobby con concierge y seguridad las 24 hrs., elevadores que te llevan al piso deseado y al Roof Top donde encontrarás las 2 albercas, gimnasio, sauna, sky bar, jacuzzi, cámara de masaje (costo extra), asador y sala lounge con vista al mar.</p>
                    </div>

                  </div>


                   <div class="col-12 col-md-6">

                         <div class="col-12" style="border: 1px solid #EBEBEB !important; border-radius: 4px !important; box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important; padding: 24px !important;">
                            <p style="color: #767676;"><b>Servicios</b></p>
                            <ul>
                              <li><i class="fas fa-home"></i> 3 recamaras con 2½ baños.</li>
                              <li><i class="fas fa-home"></i> Sala comedor con balcón.</li>
                              <li><i class="fas fa-tv"></i> sala de TV.</li>
                              <li> <i class="fas fa-utensils"></i> Cocina integral con cubierta de granito.</li>
                              <li><i class="fas fa-tint"></i> Cto. de lavado.</li>
                              <li><i class="fas fa-lock"></i> Seguridad 24 hrs.</li>
                            </ul>
                         </div>

                    </div>
                  
                </div>

               

                

                <p class="mt-2" style="border-top: 1px solid #000; width: 100%; color: #767676;"><b>Fotografias</b></p>
                
              </div>
              <!-- UNO CANCUN -->

              
              <div class="tab-pane fade" id="dos-cancun" role="tabpanel" aria-labelledby="dos-cancun-tab" style="padding: 18px;">
                <h3 style="font-size: 2.2em; color: #80e26f !important; font-weight: 700;">Condominio Suites Malecon</h3>




                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="col-12" style="border: 1px solid #EBEBEB !important; border-radius: 4px !important; box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important;padding: 24px !important;">
                        <p style="color: #767676;"><b>Lo mejor del alojamiento</b></p>
                           <p>Suite de 1 Recamara en 28m² Totalmente Amueblada para 2 hasta Adultos , Baño y Vestidor.</p>
                      </div>

                    </div>


                     <div class="col-12 col-md-6">

                       <div class="col-12" style="border: 1px solid #EBEBEB !important; border-radius: 4px !important; box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important; padding: 24px !important;">
                          <p style="color: #767676;"><b>Servicios</b></p>

                         <ul>
                          <li> <i class="fas fa-bed"></i> Recamara con cama King Size.</li>
                          <li><i class="fas fa-tv"></i> TV.</li>
                          <li><i class="fas fa-bath"></i> Baño.</li>
                          <li><i class="fas fa-tint"></i> Frigo bar.</li>
                        </ul>
                       </div>

                  </div>
                    
                  </div>



                  <p class="mt-2" style="border-top: 1px solid #000; width: 100%; color: #767676;"><b>Fotografias</b></p>
                </div>
              <!-- DOS CANCUN -->


              <div class="tab-pane fade" id="tres-cancun" role="tabpanel" aria-labelledby="tres-cancun-tab" style="padding: 18px;">
                  <h3 style="font-size: 2.2em; color: #80e26f !important; font-weight: 700;">Condominio Amara </h3>
                  

                  {{-- <p class="mt-2" style="border-top: 1px solid #EBEBEB !important; color: #767676;"><b>Servicios (Estudio 2204 Sur)</b></p> --}}
                    



                     <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="col-12" style="border: 1px solid #EBEBEB !important; border-radius: 4px !important; box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important; padding: 24px !important;">
                      <p style="color: #767676;"><b>Lo mejor del alojamiento</b></p>
                         <p>Hermoso lugar, comodidad y paz donde puedes relajarte, escuchar el viento, el mar, en nuestro departamento hubo todas las comodidades y amplitud, cada dia veiamos lus buques salir, asi como el maravilloso paisaje.</p>
                    </div>

                  </div>


                   <div class="col-12 col-md-6">

                     <div class="col-12" style="border: 1px solid #EBEBEB !important; border-radius: 4px !important; box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important; padding: 24px !important;">
                        <p style="color: #767676;"><b>Servicios</b></p>
                    <ul>
                      <li><i class="fas fa-home"></i> Departamento de 3 recamaras.</li>
                      <li><i class="fas fa-bath"></i> 2 1/2 baño.</li>
                      <li><i class="fas fa-car"></i> estacionamiento</li>
                      <li><i class="fas fa-bed"></i> elevador.</li>
                      <li><i class="fas fa-lock"></i>vigilancia 24 hrs</li>
                      <li><i class="fas fa-swimming-pool"></i> alberca frente al mar.</li>
                    </ul>
                     </div>

                  </div>
                  
                  </div>

                  <p class="mt-2" style="border-top: 1px solid #000; width: 100%; color: #767676;"><b>Fotografias</b></p>
                  
                 
              </div>
              {{-- TRES CANCUN --}}
            </div>
            <div class="row col-12" id="primer_grid" style="background-color: #f1f1f1;" >
              <div id="grid">
                <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_uno/1.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_uno/1.jpeg') }}" alt=""/></a>
                  </div>
                  <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_uno/2.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_uno/2.jpeg') }}" alt=""/></a>
                  </div>
                  <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_uno/3.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_uno/3.jpeg') }}" alt=""/></a>
                  </div>
                  <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_uno/4.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_uno/4.jpeg') }}" alt=""/></a>
                  </div>
                  <div class="w-100 mt-2"></div>
                  <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_uno/5.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_uno/5.jpeg') }}" alt=""/></a>
                  </div>
                  <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_uno/6.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_uno/6.jpeg') }}" alt=""/></a>
                  </div>
                   <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_uno/7.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_uno/7.jpeg') }}" alt=""/></a>
                  </div>
                  <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_uno/8.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_uno/8.jpeg') }}" alt=""/></a>
                  </div>

                  <div class="w-100 mt-2"></div>
                  <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_uno/9.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_uno/9.jpeg') }}" alt=""/></a>
                  </div>
                  <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_uno/10.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_uno/10.jpeg') }}" alt=""/></a>
                  </div>
                   <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_uno/11.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_uno/11.jpeg') }}" alt=""/></a>
                  </div>
                  <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_uno/12.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_uno/12.jpeg') }}" alt=""/></a>
                  </div>

                  <div class="w-100 mt-2"></div>
                  <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_uno/13.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_uno/13.jpeg') }}" alt=""/></a>
                  </div>
                  <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_uno/14.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_uno/14.jpeg') }}" alt=""/></a>
                  </div>
                   <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_uno/15.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_uno/15.jpeg') }}" alt=""/></a>
                  </div>
            </div>
            </div>

<hr>
<div class="col-12 row" id="segundo_grid" style="background-color: #f1f1f1;" >
        
      <div id="grid2">
  
    <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_icono/1.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_icono/1.jpeg') }}" alt=""/></a>
                  </div>
                  <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_icono/2.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_icono/2.jpeg') }}" alt=""/></a>
                  </div>
                  <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_icono/3.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_icono/3.jpeg') }}" alt=""/></a>
                  </div>
                  <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_icono/4.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_icono/4.jpeg') }}" alt=""/></a>
                  </div>
                  <div class="w-100 mt-2"></div>
                  <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_icono/5.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_icono/5.jpeg') }}" alt=""/></a>
                  </div>
                  <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_icono/6.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_icono/6.jpeg') }}" alt=""/></a>
                  </div>
                   <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_icono/7.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_icono/7.jpeg') }}" alt=""/></a>
                  </div>
                  <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_icono/8.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_icono/8.jpeg') }}" alt=""/></a>
                  </div>

                  <div class="w-100 mt-2"></div>
                  <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_icono/9.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_icono/9.jpeg') }}" alt=""/></a>
                  </div>
                  <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_icono/10.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_icono/10.jpeg') }}" alt=""/></a>
                  </div>
                   <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_icono/11.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_icono/11.jpeg') }}" alt=""/></a>
                  </div>
                  <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_icono/12.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_icono/12.jpeg') }}" alt=""/></a>
                  </div>

                  <div class="w-100 mt-2"></div>
                  <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_icono/13.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_icono/13.jpeg') }}" alt=""/></a>
                  </div>
                  <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_icono/14.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_icono/14.jpeg') }}" alt=""/></a>
                  </div>
                   <div class="col-md-3 col-12">
                    <a class="example-image-link" href="{{ url('/img/depa_icono/15.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_icono/15.jpeg') }}" alt=""/></a>
                  </div>
      </div>
</div>

<div class="col-12 row" id="tercer_grid" style="background-color: #f1f1f1;" >
  
<div id="grid3">
  
     <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/1.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/1.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/2.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/2.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/3.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/3.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/4.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/4.jpeg') }}" alt=""/></a>
                    </div>
                  
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/5.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/5.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/6.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/6.jpeg') }}" alt=""/></a>
                    </div>
                     <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/7.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/7.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/8.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/8.jpeg') }}" alt=""/></a>
                    </div>


                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/9.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/9.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/10.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/10.jpeg') }}" alt=""/></a>
                    </div>
                     <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/11.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/11.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/12.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/12.jpeg') }}" alt=""/></a>
                    </div>


                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/13.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/13.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/14.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/14.jpeg') }}" alt=""/></a>
                    </div>
                     <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/15.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/15.jpeg') }}" alt=""/></a>
                    </div>


                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/16.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/16.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/17.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/17.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="w-100 mt-2"></div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/18.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/18.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/19.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/19.jpeg') }}" alt=""/></a>
                    </div>
                     <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/20.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/20.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/21.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/21.jpeg') }}" alt=""/></a>
                    </div>

                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/22.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/22.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/23.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/23.jpeg') }}" alt=""/></a>
                    </div>
                     <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/24.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/24.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/25.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/25.jpeg') }}" alt=""/></a>
                    </div>

      
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/26.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/26.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/27.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/27.jpeg') }}" alt=""/></a>
                    </div>
                     <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/28.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_city/28.jpeg') }}" alt=""/></a>
                    </div>
</div>
</div>

      {{-- ******************************* --}}
      {{-- DEPARTAMENTOS DE Malecon --}}
      {{-- *********************************** --}}

      <div class="col-12 row" id="quinto_grid" style="background-color: #f1f1f1;" >
  
<div id="grid4">
  
     <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_city/1.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_malecon/1.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_malecon/2.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_malecon/2.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_malecon/3.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_malecon/3.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_malecon/4.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_malecon/4.jpeg') }}" alt=""/></a>
                    </div>
                  
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_malecon/5.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_malecon/5.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_malecon/6.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_malecon/6.jpeg') }}" alt=""/></a>
                    </div>
                     <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_malecon/7.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_malecon/7.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_malecon/8.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_malecon/8.jpeg') }}" alt=""/></a>
                    </div>


                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_malecon/9.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_malecon/9.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_malecon/10.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_malecon/10.jpeg') }}" alt=""/></a>
                    </div>
                     <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_malecon/11.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_malecon/11.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_malecon/12.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_malecon/12.jpeg') }}" alt=""/></a>
                    </div>


                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_malecon/13.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_malecon/13.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_malecon/14.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_malecon/14.jpeg') }}" alt=""/></a>
                    </div>
                     <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_malecon/15.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_malecon/15.jpeg') }}" alt=""/></a>
                    </div>


                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_malecon/16.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_malecon/16.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_malecon/17.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_malecon/17.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="w-100 mt-2"></div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_malecon/18.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_malecon/18.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_malecon/19.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_malecon/19.jpeg') }}" alt=""/></a>
                    </div>
                     <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_malecon/20.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_malecon/20.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_malecon/21.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_malecon/21.jpeg') }}" alt=""/></a>
                    </div>
</div>
</div>


{{-- ******************************* --}}
      {{-- DEPARTAMENTOS DE Amara --}}
      {{-- *********************************** --}}

      <div class="col-12 row" id="sexto_grid" style="background-color: #f1f1f1;" >
  
<div id="grid5">
  
     <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_amara/1.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_amara/1.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_amara/2.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_amara/2.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_amara/3.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_amara/3.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_amara/4.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_amara/4.jpeg') }}" alt=""/></a>
                    </div>
                  
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_amara/5.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_amara/5.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_amara/6.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_amara/6.jpeg') }}" alt=""/></a>
                    </div>
                     <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_amara/7.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_amara/7.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_amara/8.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_amara/8.jpeg') }}" alt=""/></a>
                    </div>


                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_amara/9.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_amara/9.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_amara/10.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_amara/10.jpeg') }}" alt=""/></a>
                    </div>
                     <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_amara/11.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_amara/11.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_amara/12.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_amara/12.jpeg') }}" alt=""/></a>
                    </div>


                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_amara/13.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_amara/13.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_amara/14.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_amara/14.jpeg') }}" alt=""/></a>
                    </div>
                     <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_amara/15.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_amara/15.jpeg') }}" alt=""/></a>
                    </div>

</div>
</div>


{{-- ******************************* --}}
      {{-- DEPARTAMENTOS DE CUSPIDE --}}
      {{-- *********************************** --}}

      <div class="col-12 row" id="cuarto_grid" style="background-color: #f1f1f1;" >
  
<div id="grid6">
  
     <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_cuspide/1.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_cuspide/1.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_cuspide/2.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_cuspide/2.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_cuspide/3.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_cuspide/3.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_cuspide/4.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_cuspide/4.jpeg') }}" alt=""/></a>
                    </div>
                  
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_cuspide/5.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_cuspide/5.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_cuspide/6.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_cuspide/6.jpeg') }}" alt=""/></a>
                    </div>
                     <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_cuspide/7.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_cuspide/7.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_cuspide/8.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_cuspide/8.jpeg') }}" alt=""/></a>
                    </div>


                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_cuspide/9.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_cuspide/9.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_cuspide/10.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_cuspide/10.jpeg') }}" alt=""/></a>
                    </div>
</div>
</div>
        </div>
    </div>
</div>



@stop
