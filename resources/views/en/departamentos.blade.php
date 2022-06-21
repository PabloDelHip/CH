<?php use App\Http\Controllers\Sitio; ?>
@extends('en.layout')

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
    border-bottom: 1px solid;">Book and travel, with the best accommodation Do not think twice!</p>
            <p style="font-size: 25px;">Come, meet and enjoy the Mexican Caribbean!</p>
        </div>
        <div class="row col-md-12 col-12">
                    <div class="col-12 text-center titulo mt-5">
                            <h2 style="font-weight: 300; font-size: 1.4em;"><b>CONTACT US</b></h2>
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
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">4 guests - P. del Carmen</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">4 guests - P. del Carmen</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">2 guests - P. del Carmen </a>

                <a class="nav-item nav-link" id="uno-cancun-tab" data-toggle="tab" href="#uno-cancun" role="tab" aria-controls="uno-cancun" aria-selected="true">6 guests - Cancún</a>
                <a class="nav-item nav-link" id="dos-cancun-tab" data-toggle="tab" href="#dos-cancun" role="tab" aria-controls="dos-cancun" aria-selected="false">2 guests - Cancún</a>
                <a class="nav-item nav-link" id="tres-cancun-tab" data-toggle="tab" href="#tres-cancun" role="tab" aria-controls="tres-cancun" aria-selected="false">6 guests - Cancún </a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" style="padding: 18px;">
                <h3 style="font-size: 2.2em; color: #80e26f !important; font-weight: 700; ">Condominium Ícono Playa </h3>
                
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="col-12" style="border: 1px solid #EBEBEB !important;
                          border-radius: 4px !important;
                          box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important; padding: 24px !important;">
                      <p style="color: #767676;"><b>The best of the accommodation</b></p>
                        <p>Spacious apartment, 2 parking spaces, controlled access and exclusive condominium with large and attractive green areas, equipped gym, Jogging track, swimming pool with jacuzzi and wading pool with perimeter solarium, multipurpose court, playground, palapa next to pool with bar of service and rotisserie. Wireless Internet Hot Spot in general areas. mini split air conditioning, fire equipment, switch between apartments and shed, public areas and administration, equipped gym, pool with jacuzzi and wading pool with sundeck, multipurpose court, playground, palapa next to pool with bar service and grill.</p>
                    </div>

                  </div>


                   <div class="col-12 col-md-6">

                     <div class="col-12" style="border: 1px solid #EBEBEB !important; border-radius: 4px !important; box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important; padding: 24px !important;">
                        <p style="color: #767676;"><b>Services</b></p>



                        <ul>
                          <li><i class="fas fa-home"></i> ESTUDIO B210</li>
                          <li><i class="fas fa-home"></i> 2nd level study.</li>
                          <li><i class="fas fa-users"></i> Max 4 guests.</li>
                          <li> <i class="fas fa-bath"></i> Studio with 1 bedroom and separate bathroom</li>
                          <li><i class="fas fa-bed"></i> 1 double bed.</li>
                          <li><i class="fas fa-couch"></i> 2 single sofa.</li>
                          <li><i class="fas fa-utensils"></i> Kitchenette equipped with utensils.</li>
                          <li><i class="fas fa-lock"></i>Security box.</li>
                          <li><i class="fas fa-wifi"></i> WiFi / 2 Tv / Air Conditioning.</li>
                          <li>Hairdryer.</li>
                          <li><i class="fas fa-tint"></i> Washing Center</li>
                        </ul>
                     </div>

                </div>
                  
                </div>

               

                

                <p class="mt-2" style="border-top: 1px solid #000; width: 100%; color: #767676;"><b>Photographs</b></p>
                
              </div>
              <!-- ICONO PLAYA -->

              
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" style="padding: 18px;">
                <h3 style="font-size: 2.2em; color: #80e26f !important; font-weight: 700;">Condominium Sabor a Miel </h3>




                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="col-12" style="border: 1px solid #EBEBEB !important; border-radius: 4px !important; box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important;padding: 24px !important;">
                      <p style="color: #767676;"><b>The best of the accommodation</b></p>
                         <p>The Honey Tasting Department is a perfect place to rest and relax, has complete and comfortable equipment perfect to enjoy the beautiful beaches of the Caribbean Sea, with its beautiful view from the Roof Top. It is located just 1 block from the beach and the beach clubs "La Martina" and "Cannibal Royal". It has a hammock on the balcony and in the room, air conditioners in each space.</p>
                    </div>

                  </div>


                   <div class="col-12 col-md-6">

                     <div class="col-12" style="border: 1px solid #EBEBEB !important; border-radius: 4px !important; box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important; padding: 24px !important;">
                        <p style="color: #767676;"><b>Services</b></p>
                       <ul>
                        <li><i class="fas fa-home"></i> Apartment on 3rd level with elevator and terrace with hammock.</li>
                        <li><i class="fas fa-bath"></i> 1 bedroom / 1 full bathroom.</li>
                        <li><i class="fas fa-bed"></i> 1 Bed / 1 King / 1 sofa bed.</li>
                        <li><i class="fas fa-couch"></i> Room with terrace and hammock.</li>
                        <li><i class="fas fa-utensils"></i>Marble kitchen / Dining room</li>
                        <li><i class="fas fa-tint"></i>Washing Center</li>
                        <li><i class="fas fa-wifi"></i> WiFi / TV / Air Conditioning.</li>
                        <li><i class="fas fa-swimming-pool"></i> Roof Garden with Pool and Sea View, Jacuzzi,, Sundeck with lounge chairs.</li>
                      </ul>
                     </div>

                </div>
                  
                </div>



                <p class="mt-2" style="border-top: 1px solid #000; width: 100%; color: #767676;"><b>Photographs</b></p>
              </div>
              <!-- THE CITY -->


              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" style="padding: 18px;">
                  <h3 style="font-size: 2.2em; color: #80e26f !important; font-weight: 700;">Condominium The City </h3>
                  

                  {{-- <p class="mt-2" style="border-top: 1px solid #EBEBEB !important; color: #767676;"><b>Servicios (Estudio 2204 Sur)</b></p> --}}
                    



                     <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="col-12" style="border: 1px solid #EBEBEB !important; border-radius: 4px !important; box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important; padding: 24px !important;">
                      <p style="color: #767676;"><b>The best of the accommodation</b></p>
                         <p>My Menesse The City, Studio located in an exclusive development in the downtown area of ​​Playa del Carmen, on one of the main avenues completely renovated, where a residential and tourist atmosphere is combined. Strategic location near the emblematic 5th Avenue and its Quinta Alegría square, in front of supermarket, shops and restaurants, from there you will find the beach just a few steps away. The amenities you will have access through the lobby and its atrium full of greenery with pool, gym, spa, movie theater, kids club and a second pool in the Solarium with Sky bar and Lounge Area.</p>
                    </div>

                  </div>


                   <div class="col-12 col-md-6">

                     <div class="col-12" style="border: 1px solid #EBEBEB !important; border-radius: 4px !important; box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important; padding: 24px !important;">
                        <p style="color: #767676;"><b>Services (Studio 2204 South)</b></p>

                        <ul>
                      <li><i class="fas fa-home"></i> Estudio en 2o nivel con elevador y terraza.</li>
                      
                      <li> <i class = "fas fa-users"> </i> Max 2 guests. </li>
                      <li> <i class = "fas fa-bath"> </i> Private studio with separate bathroom </li>
                      <li> <i class = "fas fa-bed"> </i> 1 queen size bed. </li>
                      <li> Breakfast area </li>
                      <li> <i class = "fas fa-utensils"> </i> Kitchenette equipped with utensils. </li>
                      <li> <i class = "fas fa-lock"> </i> Safe. </li>
                      <li> <i class = "fas fa-wifi"> </i> WiFi / TV / Air Conditioning. </li>
                    </ul>

                    <p class="mt-2" style="color: #767676;"><b>Services (Studio 2217 South)</b></p>
                    <ul>
                      
                      <li> <i class = "fas fa-home"> </i> Studio on 2nd level with elevator and terrace. </li>
                      <li> <i class = "fas fa-users"> </i> Max 2 guests. </li>
                      <li> <i class = "fas fa-bath"> </i> Private studio with separate bathroom </li>
                      <li> <i class = "fas fa-bed"> </i> 1 queen size bed. </li>
                      <li> Breakfast area </li>
                      <li> <i class = "fas fa-utensils"> </i> Kitchenette equipped with utensils. </li>
                      <li> <i class = "fas fa-lock"> </i> Safe. </li>
                      <li> <i class = "fas fa-wifi"> </i> WiFi / TV / Air Conditioning. </li>
                      <li> Hair dryer. </li>
                      <li> <i class = "fas fa-child"> </i> Green area /Children's pool /Children's games. </li>
                      <li> <i class = "fas fa-swimming-pool"> </i> Solarium with Pool, Sky Bar, GYM, Spa, Kids Club, Cinema. </li>
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
                <h3 style="font-size: 2.2em; color: #80e26f !important; font-weight: 700; ">Condominium Cuspide </h3>
                
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="col-12" style="border: 1px solid #EBEBEB !important;
                          border-radius: 4px !important;
                          box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important; padding: 24px !important;">
                      <p style="color: #767676;"><b>The best of the accommodation</b></p>
                        <p>This modern and avant-garde apartment is located in an exclusive development, meticulously designed and planned with amenities for common use. It has high quality finishes, always retaining the unique style of the Mexican Caribbean, quality, comfort, distribution and a perfect location.
                      The amenities of the Condominium can be enjoyed from arrival, it has underground parking, lobby with concierge and security 24 hrs., Elevators that take you to the desired floor and the Roof Top where you will find the 2 pools, gym, sauna, sky bar, Jacuzzi, massage chamber (extra cost), grill and lounge with ocean view.</p>
                    </div>

                  </div>


                   <div class="col-12 col-md-6">

                         <div class="col-12" style="border: 1px solid #EBEBEB !important; border-radius: 4px !important; box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important; padding: 24px !important;">
                            <p style="color: #767676;"><b>Services</b></p>
                            <ul>
                              <li> <i class = "fas fa-home"> </i> 3 bedrooms with 2½ bathrooms. </li>
                              <li> <i class = "fas fa-home"> </i> Dining room with balcony. </li>
                              <li> <i class = "fas fa-tv"> </i> TV room. </li>
                              <li> <i class = "fas fa-utensils"> </i> Integral kitchen with granite cover. </li>
                              <li> <i class = "fas fa-tint"> </i> CTO. of washing. </li>
                              <li> <i class = "fas fa-lock"> </i> Security 24 hrs. </li>
                            </ul>
                         </div>

                    </div>
                  
                </div>

               

                

                <p class="mt-2" style="border-top: 1px solid #000; width: 100%; color: #767676;"><b>Photographs</b></p>
                
              </div>
              <!-- UNO CANCUN -->

              
              <div class="tab-pane fade" id="dos-cancun" role="tabpanel" aria-labelledby="dos-cancun-tab" style="padding: 18px;">
                <h3 style="font-size: 2.2em; color: #80e26f !important; font-weight: 700;">Condominium Suites Malecon</h3>




                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="col-12" style="border: 1px solid #EBEBEB !important; border-radius: 4px !important; box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important;padding: 24px !important;">
                        <p style="color: #767676;"><b>The best of the accommodation</b></p>
                           <p>Suite of 1 Bedroom in 28m² Fully Furnished for 2 to Adults, Bathroom and Dressing Room.</p>
                      </div>

                    </div>


                     <div class="col-12 col-md-6">

                       <div class="col-12" style="border: 1px solid #EBEBEB !important; border-radius: 4px !important; box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important; padding: 24px !important;">
                          <p style="color: #767676;"><b>Services</b></p>

                         <ul>
                          <li> <i class = "fas fa-bed"> </i> Bedroom with King Size bed. </li>
                          <li> <i class = "fas fa-tv"> </i> TV. </li>
                          <li> <i class = "fas fa-bath"> </i> Bathroom. </li>
                          <li> <i class = "fas fa-tint"> </i> Frigo bar. </li>
                        </ul>
                       </div>

                  </div>
                    
                  </div>



                  <p class="mt-2" style="border-top: 1px solid #000; width: 100%; color: #767676;"><b>Photographs</b></p>
                </div>
              <!-- DOS CANCUN -->


              <div class="tab-pane fade" id="tres-cancun" role="tabpanel" aria-labelledby="tres-cancun-tab" style="padding: 18px;">
                  <h3 style="font-size: 2.2em; color: #80e26f !important; font-weight: 700;">Condominium Amara </h3>
                  

                  {{-- <p class="mt-2" style="border-top: 1px solid #EBEBEB !important; color: #767676;"><b>Services (Studio 2204 South)</b></p> --}}
                    



                     <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="col-12" style="border: 1px solid #EBEBEB !important; border-radius: 4px !important; box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important; padding: 24px !important;">
                      <p style="color: #767676;"><b>The best of the accommodation</b></p>
                         <p>Beautiful place, comfort and peace where you can relax, listen to the wind, the sea, in our apartment there were all the comforts and amplitude, every day we watched the ships leave, as well as the wonderful landscape.</p>
                    </div>

                  </div>


                   <div class="col-12 col-md-6">

                     <div class="col-12" style="border: 1px solid #EBEBEB !important; border-radius: 4px !important; box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.05) !important; padding: 24px !important;">
                        <p style="color: #767676;"><b>Services</b></p>
                    <ul>
                     <li> <i class = "fas fa-home"> </i> 3-bedroom apartment. </li>
                      <li> <i class = "fas fa-bath"> </i> 2 1/2 bath. </li>
                      <li> <i class = "fas fa-car"> </i> parking </li>
                      <li> <i class = "fas fa-bed"> </i> elevator. </li>
                      <li> <i class = "fas fa-lock"> </i> 24-hour surveillance </li>
                      <li> <i class = "fas fa-swimming-pool"> </i> pool facing the sea. </li>
                    </ul>
                     </div>

                  </div>
                  
                  </div>

                  <p class="mt-2" style="border-top: 1px solid #000; width: 100%; color: #767676;"><b>Photographs</b></p>
                  
                 
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

      <div class="col-12 row" id="cuarto_grid" style="background-color: #f1f1f1;" >
  
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

      <div class="col-12 row" id="quinto_grid" style="background-color: #f1f1f1;" >
  
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


                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_amara/16.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_amara/16.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_amara/17.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_amara/17.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="w-100 mt-2"></div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_amara/18.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_amara/18.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_amara/19.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_amara/19.jpeg') }}" alt=""/></a>
                    </div>
                     <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_amara/20.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_amara/20.jpeg') }}" alt=""/></a>
                    </div>
                    <div class="col-md-3 col-12">
                      <a class="example-image-link" href="{{ url('/img/depa_amara/21.jpeg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style="width: 100%;" class="example-image" src="{{ url('/img/depa_amara/21.jpeg') }}" alt=""/></a>
                    </div>
</div>
</div>


{{-- ******************************* --}}
      {{-- DEPARTAMENTOS DE CUSPIDE --}}
      {{-- *********************************** --}}

      <div class="col-12 row" id="sexto_grid" style="background-color: #f1f1f1;" >
  
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
