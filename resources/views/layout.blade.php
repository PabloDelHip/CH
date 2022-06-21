<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="{{ url('/img/Logotipo.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="icono/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="icono/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="icono/favicon-16x16.png">
	<link rel="manifest" href="icono/site.webmanifest">
	<link rel="mask-icon" href="icono/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="icono/favicon.ico">
	<link rel="canonical" href="{{Request::fullUrl()}}"/>
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="icono/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<title>{{ $Title = (isset($title)) ? $title : ''}}</title>
	<meta name='description' content='{{ $Meta = (isset($meta_description)) ? $meta_description : "Tours y atracciones en Cancún | Cancun Do it"}}'>
	<meta name="title" content="{{ $Title = (isset($title)) ? $title : ''}}"/>
	<meta name="Keywords" content="{{ $Keywords = (isset($keywords)) ? $keywords : ''}}" />
	<meta name="author" content="Ing. Pablo Delfin H. || Caribbean Hollidays 2018">
	<meta name="owner" content="Caribbean Hollidays" />
    <link rel="stylesheet" href="{{ url('/css/app.css') }}">
    
    <link rel="stylesheet" href="{{ url('/css/lightbox.min.css') }}">
    {{-- <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script> --}}
    <link rel="stylesheet" href="css/superslides.css">
    {{-- <link rel="stylesheet" href="{{ url('/css/fontello.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ url('/css/slick.css') }}"> --}}
     {{-- <link rel="stylesheet" href="{{ url('/css/slick-theme.css') }}"> --}}
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/177aa3b6ac.js"></script>

    {{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.min.css"> --}}

	{{-- <link rel="stylesheet" type="text/css" href="{{ url('/engine1/style.css') }}" /> --}}
    <script async src='https://www.google.com/recaptcha/api.js'></script>
    <script async src="https://unpkg.com/tippy.js@2.5.4/dist/tippy.all.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <script>
    	 function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("script")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }
      loadCSS("{{ url('/css/fontello.css') }}");loadCSS("//fonts.googleapis.com/css?family=Dosis:400,700");loadCSS("{{ url('/css/slick-theme.css') }}");loadCSS("//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.min.css");
    </script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>

	<script src="https://www.caribbeanhollidays.com/autocom/jquery.easy-autocomplete.min.js"></script>
	<script async src="{{ url('/js/gridify.js') }}"></script>


<!-- CSS file -->
<link rel="stylesheet" href="https://www.caribbeanhollidays.com/autocom/easy-autocomplete.min.css"> 

    <!-- Global site tag (gtag.js) - Google Analytics -->

	
	{{-- @if(isset($tourInfo))
		@foreach($tourInfo as $tour)
			<meta property="og:url" content="{{Request::fullUrl() }}" />
			<meta property="og:title" content="{{ $tour->name }}" />
			<meta property="og:description" content="{{ $tour->description_information }}" />
			<meta property="og:image" content="https://www.gocancuntours.com.mx/img/tours/{{ $tour->image }}" />
	        <script type="application/ld+json">
				{
				  "@context": "http://schema.org",
				  "@type": "Product",
				  "name": "{{ $tour->name }}",
				  "image": "https://www.gocancuntours.com.mx/img/tours/{{ $tour->image }}",	
				  "description": "{{ $tour->description_information }}",
				  "mpn": "7",
				  "brand": {
					"@type": "Product",
					"name": "{{ $tour->name }}"
				  },
				  "aggregateRating": {
					"@type": "AggregateRating",
					"ratingValue": "{{ $tour->qualification }}",
					"reviewCount": "77"
				  },
				  "offers": {
					"@type": "Offer",
					"priceCurrency": "USD",
					"price": "{{ $tour->adult_price }}",
					"priceValidUntil": "2018-07-22",
					"seller": {
					  "@type": "Organization",
					  "name": "Go Canc&uacute;n Tours"
					}
				  },

				}
		    </script>
	    @endforeach

	@elseif(isset($categorie_name))
		<meta property="og:url" content="{{Request::fullUrl() }}" />
		<meta property="og:title" content="{{ $categorie_name }}" />
		<meta property="og:description" content="{{ $meta_description }}" />
		<script type = "application/ld+json" > {
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "{{ $categorie_name }}",
			"description": "{{ $meta_description }}",
			"@graph": [

				 @foreach($tours as $tour)
				 {
				 	"@type": "Product",
				"name": "{{$tour->name}}",
				"description": "{{$tour->description_information}}"
			},
				 @endforeach
			]
		} </script>

	@elseif(isset($categorie->name))
            
		<meta property="og:url" content="{{Request::fullUrl() }}" />
		<meta property="og:title" content="Cancun Do It" />
		<meta property="og:description" content="En Cancun Do It encontraras los mejores tours y atracciones en Canc&uacute;n y la Riviera Maya y tours a Chich&eacute;n Itz&aacute;" />
		<meta property="og:image" content="https://www.gocancuntours.com.mx/data1/images/imagen1.jpg" />

		<script type = "application/ld+json">
			{ "@context": "http://schema.org",
			"@type": "WebSite",
			"description": "En Cancun Do It encontraras los mejores tours y atracciones en Canc&uacute;n y la Riviera Maya y tours a Chich&eacute;n Itz&aacute;",
			"@graph": [
				@foreach($categories as $categorie)
					{
				"@type": "Product",
				"name": "{{ $categorie->name }}",
				"description": "{{ $categorie->meta_description }}"
				},
				@endforeach
					]
		}
</script> --}}
{{-- FIN SEARCH --}}



		
		{{-- <script type="application/ld+json">
		{
		  "@context" : "http://schema.org",
		  "@type" : "Organization",
		  "name" : "Cancun Do It",
		  "url" : "http://gocancuntours.com.mx",
		  "sameAs" : [
		    "https://twitter.com/Go_Cancun_Tours",
			"https://plus.google.com/u/1/116990261479691395006",
			"https://www.facebook.com/Go-Cancun-Tours-2070506556528598/?ref=br_rs",
		  ]
		}
		</script> --}}

	{{-- @endif --}}

    {{-- FINAL REAL --}}

    <script type='application/ld+json'>
      {"@context":"https:\/\/schema.org",
        "@type":"WebSite",
        "@id":"#website",
        "url":"https:\/\/www.caribbeanhollidays.com\/",
        "name":"Cancun Do It",
        "potentialAction":{"@type":"SearchAction",
        "target":"http:\/\/www.caribbeanhollidays.com\/?s={search_term_string}",
        "query-input":"required name=search_term_string"}
      }
  </script>

    <meta property="og:url" content="https://www.caribbeanhollidays.com" />
    <meta property="og:title" content="Mejores tours en Cancun | Actividades y atracciones" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="En Caribbean Hollidays encontraras los mejores tours y atracciones en Cancún y la Riviera Maya y tours a Chichén Itzá." />
    <meta property="og:site_name" content="Cancun Do It" />
    <meta property="og:image" content="https://www.caribbeanhollidays.com/img/fodon_cancundoit.png" />

	<style type="text/css">
		#barra-Categoria
		{
			height: 77px; display: none; background-color:  red;
		}
	</style>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128913683-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128913683-1');
</script>

{{-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> --}}
  <script type="text/javascript" src="https://openpay.s3.amazonaws.com/openpay.v1.min.js"></script>
<script type='text/javascript' src="https://openpay.s3.amazonaws.com/openpay-data.v1.min.js"></script>

<script type="text/javascript">
        $(document).ready(function() {

            OpenPay.setId('my6f5lnq17migajfjzfm');
            OpenPay.setApiKey('pk_7ae92ef7a5da4a478150aca87ce69631');
            OpenPay.setSandboxMode(true);
            //Se genera el id de dispositivo
            var deviceSessionId = OpenPay.deviceData.setup("payment-form", "deviceIdHiddenFieldName");
            
            $('#pay-button').on('click', function(event) {
                event.preventDefault();
                $("#pay-button").prop( "disabled", true);
                OpenPay.token.extractFormAndCreate('payment-form', sucess_callbak, error_callbak);                
            });

            var sucess_callbak = function(response) {
              var token_id = response.data.id;
              $('#token_id').val(token_id);
              $('#payment-form').submit();
            };

            var error_callbak = function(response) {
                var desc = response.data.description != undefined ? response.data.description : response.message;
                alert("ERROR [" + response.status + "] " + desc);
                $("#pay-button").prop("disabled", false);
            };

        });
    </script>

    
<style type="text/css">
a.button {
    border-radius: 5px 5px 5px 5px;
    -webkit-border-radius: 5px 5px 5px 5px;
    -moz-border-radius: 5px 5px 5px 5px;
    text-align: center;
    font-size: 21px;
    font-weight: 400;
    padding: 12px 0;
    width: 100%;
    display: table;
    background: #E51F04;
    background: -moz-linear-gradient(top,  #E51F04 0%, #A60000 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#E51F04), color-stop(100%,#A60000));
    background: -webkit-linear-gradient(top,  #E51F04 0%,#A60000 100%);
    background: -o-linear-gradient(top,  #E51F04 0%,#A60000 100%);
    background: -ms-linear-gradient(top,  #E51F04 0%,#A60000 100%);
    background: linear-gradient(top,  #E51F04 0%,#A60000 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#E51F04', endColorstr='#A60000',GradientType=0 );
}
a.button i {
    margin-right: 10px;
}
a.button.disabled {
    background: none repeat scroll 0 0 #ccc;
    cursor: default;
}
.bkng-tb-cntnt {
    float: left;
    width: 800px;
}
.bkng-tb-cntnt a.button {
    color: #fff;
    float: right;
    font-size: 18px;
    padding: 5px 20px;
    width: auto;
}
.bkng-tb-cntnt a.button.o {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    color: #e51f04;
    border: 1px solid #e51f04;
}
.bkng-tb-cntnt a.button i {
    color: #fff;
}
.bkng-tb-cntnt a.button.o i {
    color: #e51f04;
}
.bkng-tb-cntnt a.button.right i {
    float: right;
    margin: 2px 0 0 10px;
}
.bkng-tb-cntnt a.button.left {
    float: left;
}
.bkng-tb-cntnt a.button.disabled.o {
    border-color: #ccc;
    color: #ccc;
}
.bkng-tb-cntnt a.button.disabled.o i {
    color: #ccc;
}
.pymnts {
    float: left;
    width: 800px;
}
.pymnts * {
    float: left;
}

.sctn-row {
    margin-bottom: 35px;
    width: 800px;
}
.sctn-col {
    width: 375px;
}
.sctn-col.l {
    width: 425px;
}
.sctn-col input {
    border: 1px solid #ccc;
    font-size: 18px;
    line-height: 24px;
    padding: 10px 12px;
    width: 333px;
}
.sctn-col label {
    font-size: 24px;
    line-height: 24px;
    margin-bottom: 10px;
    width: 100%;
}
.sctn-col.x3 {
    width: 300px;
}
.sctn-col.x3.last {
    width: 200px;
}
.sctn-col.x3 input {
    width: 210px;
}
.sctn-col.x3 a {
    float: right;
}
.pymnts-sctn {
    width: 800px;
}
.pymnt-itm {
    margin: 0 0 3px;
    width: 782px;
}
.pymnt-itm h2 {
    background-color: #e9e9e9;
    font-size: 24px;
    line-height: 24px;
    margin: 0;
    padding: 28px 0 28px 20px;
    width: 780px;
}
.pymnt-itm.active h2 {
    background-color: #e51f04;
    color: #fff;
    cursor: default;
}
.pymnt-itm div.pymnt-cntnt {
    display: none;
}
.pymnt-itm.active div.pymnt-cntnt {
    background-color: #f7f7f7;
    display: block;
    padding: 0 0 30px;
    width: 100%;
}

.pymnt-cntnt div.sctn-row {
    margin: 20px 30px 0;
    width: 740px;
}
.pymnt-cntnt div.sctn-row div.sctn-col {
    width: 345px;
}
.pymnt-cntnt div.sctn-row div.sctn-col.l {
    width: 395px;
}
.pymnt-cntnt div.sctn-row div.sctn-col input {
    width: 303px;
}
.pymnt-cntnt div.sctn-row div.sctn-col.half {
    width: 155px;
}
.pymnt-cntnt div.sctn-row div.sctn-col.half.l {
    float: left;
    width: 190px;
}
.pymnt-cntnt div.sctn-row div.sctn-col.half input {
    width: 113px;
}
.pymnt-cntnt div.sctn-row div.sctn-col.cvv {
    background-image: url("images/cvv.png");
    background-position: 156px center;
    background-repeat: no-repeat;
    padding-bottom: 30px;
}
.pymnt-cntnt div.sctn-row div.sctn-col.cvv div.sctn-col.half input {
    width: 110px;
}
.openpay {
    float: right;
    height: 60px;
    margin: 10px 30px 0 0;
    width: 435px;
}
.openpay div.logo {
    background-image: url("images/openpay.png");
    background-position: left bottom;
    background-repeat: no-repeat;
    border-right: 1px solid #ccc;
    font-size: 12px;
    font-weight: 400;
    height: 45px;
    padding: 15px 20px 0 0;
}
.openpay div.shield {
    background-image: url("images/security.png");
    background-position: left bottom;
    background-repeat: no-repeat;
    font-size: 12px;
    font-weight: 400;
    margin-left: 20px;
    padding: 20px 0 0 40px;
    width: 200px;
}
.card-expl {
    float: left;
    height: 80px;
    margin: 20px 0;
    width: 800px;
}
.card-expl div {
    background-position: left 45px;
    background-repeat: no-repeat;
    height: 70px;
    padding-top: 10px;
}
.card-expl div.debit {
    background-image: url("images/cards2.png");
    margin-left: 20px;
    width: 540px;
}
.card-expl div.credit {
    background-image: url("images/cards1.png"); 
    border-right: 1px solid #ccc;
    margin-left: 30px;
    width: 209px;
}
.card-expl h4 {
    font-weight: 400;
    margin: 0;
}
</style>




</head>
{{-- background-image: url('{{ url('/img/textura.png') }}');" --}}
<body>
    @if(!session()->has('exchangeRate')) 
        <?php
          session(['exchangeRate' => 0]);
          session(['exchangeValue' => 0]);
        ?>
    @endif

    <header class="col-12 header-movil ocultar ver-movil" style="position: absolute; z-index: 0; padding: 5px;">
        <div class="container datos-contacto-header">
            <div class="row ">
                <div class="datos-header col-4">
                    
                    <span >

                        <a  href="https://api.whatsapp.com/send?phone=5219982415804&text=Buen dia, estoy interesado en unos tours" target="_blank"><img src="{{ url('img/wp.png') }}" alt="logo whatsapp" style="width: 37px;"></a>
                    </span>

                    
                </div>
                <div class="datos-header col-6 text-center">
                    <span>
                        <a href="mailto:reservas@caribbeanhollidays.com"><i class="icon-email"></i>  reservas@caribbeanhollidays.com</a>
                    </span>
                </div>
                <div>
                    <a href="#" role="button" class="btn popovers" data-toggle="popover" title="" data-content="test content <a href='' title='test add link'>link on content</a>" data-original-title="test title"></a>
            </div>
    </header>
	
	{{-- @if(Request::path()=='/')
		 @include('includes.carousel')
	@endif --}}
	
	<!-- FINAL HEADER -->



	<div class="contenedor-menu {{ (Request::path() != '/') ? 'contenedor-menu-home' : '' }} d-flex align-items-center ">
		<div class="container" >
		  	<nav class="navbar navbar-expand-lg navbar-light  menu-pc" style="z-index: 40000">
					  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    	<span class="navbar-toggler-icon"></span>
					  	</button>

					 	 <div class="collapse navbar-collapse menu {{ (Request::path() != '/') ? 'home' : '' }}" id="navbarSupportedContent">
					    	<ul class="navbar-nav mr-auto pull-xs-right">
					      		
					    	</ul>
					    	<ul class="nav navbar-nav pull-xs-right">
                                

                                <li class="nav-item">
                                    <a style="color: #fff; font-weight: 500; font-size: 1.3em" class="nav-link" href="{{ url('/') }}">INICIO <span class="sr-only">(current)</span></a>
                                </li>
                                
								<li class="nav-item">
                                    <a style="color: #fff; font-weight: 500; font-size: 1.3em" class="nav-link" href="{{route("tours_actividades")}}">TOURS Y ACTIVIDADES</a>
                                </li>
                                <li class="nav-item">
                                    <a style="color: #fff; font-weight: 500; font-size: 1.3em" class="nav-link" href="{{route("paquetes")}}">PAQUETES</a>
                                </li>
                                <li class="nav-item">
                                    <a style="color: #fff; font-weight: 500; font-size: 1.3em" class="nav-link" href="http://www.caribbeanhollidays.com/tours-en/cancun/Aventura/3">AVENTURA</a>
                                </li>

								{{--<li class="nav-item">
                                    <a style="color: #fff; font-weight: 500; font-size: 1.3em" class="nav-link" href="{{route("categories",['categorie'=> 'aquaword'])}}">AVENTURA</a>
								</li> --}}
								
								<li class="nav-item">
                                    <a style="color: #fff; font-weight: 500; font-size: 1.3em" class="nav-link" href="{{route("yates")}}">VELEROS</a>
                                </li>
                                 
                                <li class="nav-item">
                                    <a style="color: #fff; font-weight: 500; font-size: 1.3em" class="nav-link" href="{{route("transportacionGet")}}">TRANSPORTACIÓN</a>
                                </li>
                               

                                 {{-- <li class="nav-item">
                                    <a style="color: #fff; font-weight: 500; font-size: 1.3em" class="nav-link" href="{{route("hotel-avion")}}">HOTEL + AVIÓN</a>
                                </li> --}}

                                <li class="nav-item">
                                    <a style="color: #fff; font-weight: 500; font-size: 1.3em" class="nav-link" href="{{ url('nosotros') }}">NOSOTROS <span class="sr-only">(current)</span></a>
                                </li>
                                <li>
                                    <form method="POST" id="formRate" action="{{ route('change-exchange-rate') }}">
                                        {{ csrf_field() }}
                                        <select name="type_change" onchange="submitChangeRate()" class="form-control form-control-sm">
                                            <option
                                              value="0"
                                              @if(session("exchangeRate") == 0)
                                                selected
                                              @endif
                                            >
                                                MXN
                                            </option>
                                            <option
                                            @if(session("exchangeRate") == 1)
                                                selected
                                              @endif
                                            value="1">USD</option>
                                            <option
                                            @if(session("exchangeRate") == 2)
                                                selected
                                              @endif
                                            value="2">EUR</option>
                                        </select>
                                    </form>
                                </li>

							    <li class="nav-item">
							        <a style="color: #fff;" class="nav-link" href="{{ url('/carrito') }}">
							        	<i class="icon-basket"></i>
							        	{{-- <span id="num-items" class="p-0 m-0">{{Cart::content()->count()}}</span> --}}
							        </a>
							    </li>
                                <li class="nav-item">
                                    <div id="google_translate_element"></div>
                                </li>
							</ul>
					    	{{-- <div class="col-md-3 ocultar-movil">
					    		 <a style="font-size: 1.5em" href="{{ url('/carrito') }}"><i class="fa fa-shopping-cart"></i> {{Cart::content()->count()}}</a>
					    	</div> --}}
					  </div>
			</nav>
		</div>
    </div>
		{{-- transform: translateX(-100%); --}}
	<!-- FINAL NAV -->


			{{-- <nav id="menu-movil" style="z-index: 1000;">
				<ul>
	
					<li class="nav-item"><a href="{{ url('/') }}">INICIO</a></li>
					<li class="nav-item"><a href="{{ url('nosotros') }}">NOSOTROS</a></li>
					<li class="nav-item"><a href="{{route("transportacionGet")}}">TRANSPORTACIÓN</a></li>
                    <li class="nav-item"><a href="{{route("yates")}}"><li>YATES</li></a></li>
                    <li class="nav-item"><a href="{{route("hotel-avion")}}"><li>HOTEL + AVIÓN</li></a></li>
     
                    <li>
                        <a href="#" id="ver-menu" title="">XCARET >>></a>
                        <ul id="sub-menu" class="no-ver">
                            <li style="border-top: 1px solid #595858;"><a href="{{route("categories",['categorie'=> 'experiencias-xcaret'])}}">PARQUES XCARET</a></li>
                            <li><a target="_blank" href="https://www.xcaretexperiencias.com/quintanarroenses.php">QUINTANARROENSE</a></li>
                            <li><a href="{{route("categories",['categorie'=> 'ventura-park'])}}">Ventura Park</a></li>
                            <li><a href="{{route("categories",['categorie'=> 'delfines-cancun'])}}">Delfines</a></li>
                            <li><a href="{{route("categories",['categorie'=> 'selvatica'])}}">Selvatica</a></li>
                            <li><a href="{{route("categories",['categorie'=> 'capitan-hook'])}}">Captain Hook</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" id="ver-menu2" title="">TOURS Y ACTIVIDADES >>></a>
                        <ul id="sub-menu2" class="no-ver">
                            <li style="border-top: 1px solid #595858;"><a href="{{route("categories",['categorie'=> 'sitios-arqueologicos'])}}">Arqueológicos</a></li>
                            <li><a href="{{route("categories",['categorie'=> 'acuaticos'])}}">Acuaticos</a></li>
                            <li><a href="{{route("categories",['categorie'=> 'ventura-park'])}}">Ventura Park</a></li>
                            <li><a href="{{route("categories",['categorie'=> 'delfines-cancun'])}}">Delfines</a></li>
                            <li><a href="{{route("categories",['categorie'=> 'selvatica'])}}">Selvatica</a></li>
                            <li><a href="{{route("categories",['categorie'=> 'capitan-hook'])}}">Captain Hook</a></li>
                        </ul>
                    </li>
                          		
				</ul>
			</nav> --}}
        
	<div>
		@yield('contenido')
	</div>

	<footer>
		<div class="footer mt-4 pt-3">
			{{-- <div class="row justify-content-center">
				<div class="col-12 text-center">
					<p class="texto-mailchin m-0">suscríbete para encontrar las mejores ofertas</p>
				</div>
				<div class="col-md-auto mt-2">

					<form class="form-inline">
					  <div class="form-group mb-2">
					    <img src="{{ url('/img/carta.png') }}" alt="carta">
					  </div>
					  <div class="form-group mx-sm-3 mb-2">
					    <label for="email" class="sr-only">Email</label>
					    <input type="email" class="form-control form-control-sm suscripcion" id="email" placeholder="Email" >
					  </div>
					  <button type="submit" class="btn btn-primary mb-2 btn-sm">Suscribirme</button>
					</form>
				</div>
			</div> --}}
			<div class="row justify-content-center">
			    <div class="col-6 text-center iconos-footer mb-3 pb-2">
			     	{{-- <a target="_blank" href="https://www.facebook.com/cundoit/">
			     		<i class="icon-facebook"></i>
			     	</a> --}}
			     	{{-- <a href="#">
			     		 <i class="icon-twitter"></i>
			     	</a>
			     	<a href="#">
			     		 <i class=" icon-youtube-play"></i>
			     	</a>
			     	<a href="#">
			     		 <i class=" icon-gplus"></i>
			     	</a>
			     	<a href="#">
			     		 <i class=" icon-instagram"></i>
			     	</a> --}}
			    </div>
			</div>
			{{-- FINAL REDES SOCIALES --}}

			<div class="row justify-content-center">
				<img src="/img/Vintage-Logo-1.png" alt="logo-blanco" style="width: 15%">
			</div>

			<div class="row justify-content-center">
				<div class="col-9 text-left mt-3 menu-footer text-center">
					<ul class="lista-footer">
						<a href="{{ url('/') }}">
							<li>Inicio</li>
						</a>
						<a href="{{route("categories",['categorie'=> 'aquaword'])}}">
							<li>Aventura</li>
						</a>
						<a href="{{route("yates")}}">
							<li>Veleros</li>
						</a>
						<a href="{{route("transportacionGet")}}">
							<li>Transportación</li>
						</a>
                        <a href="{{ url('nosotros') }}">
                            <li>Nosotros</li>
                        </a>
					</ul>
				</div>
			</div>

			<div class="row p-0 m-0">
				<div class="col-12 text-center">
					<p class="p-0 m-0 copy">&copy; Todos los derechos reservados Caribbean Hollidays 2020</p>
				</div>
			</div>
		</div>
	</footer>

    <script type="text/javascript"
        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
    ></script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'},
                'google_translate_element')
        }
    </script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script async src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<script async src="{{ url('/js/prism.js') }}"></script>
    <script async src="{{ url('/js/parallax.min.js') }}"></script>
     <script async src="{{ url('/js/lightbox-plus-jquery.min.js') }}"></script>
     
    
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.animate-enhanced.min.js"></script>
  <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>
  <script>

  	window.onload = function(){
      var options =
      {
           srcNode: 'img',             // grid items (class, node)
           margin: '20px',             // margin in pixel, default: 0px
           width: '250px',             // grid item width in pixel, default: 220px
           max_width: '',              // dynamic gird item width if specified, (pixel)
           resizable: true,            // re-layout if window resize
           transition: 'all 0.5s ease' // support transition for CSS3, default: all 0.5s ease
      }
      document.querySelector('#grid').gridify(options);
      document.querySelector('#grid2').gridify(options);
      document.querySelector('#grid3').gridify(options);
      document.querySelector('#grid4').gridify(options);
      document.querySelector('#grid5').gridify(options);
      document.querySelector('#grid6').gridify(options);
      

     
 }

 $('#nav-home-tab').click(function(){
 	$("#primer_grid").css({"height": "1233px",});
 	$("#segundo_grid").css({"height": "-1px","overflow": "hidden"});
 	$("#tercer_grid").css({"height": "-1px","overflow": "hidden"});
 	$("#cuarto_grid").css({"height": "-1px","overflow": "hidden"});
 	$("#quinto_grid").css({"height": "-1px","overflow": "hidden"});
    $("#sexto_grid").css({"height": "-1px","overflow": "hidden"});
 	 // $('#grid').hide();
      // $('#grid2').show();
      // $('#grid3').hide();
 });

 $('#nav-profile-tab').click(function(){
 	$("#primer_grid").css({"height": "-1px","overflow": "hidden"});
 	$("#segundo_grid").css({"height": "951px",});
 	$("#tercer_grid").css({"height": "-1px","overflow": "hidden"});
 	$("#cuarto_grid").css({"height": "-1px","overflow": "hidden"});
 	$("#quinto_grid").css({"height": "-1px","overflow": "hidden"});
    $("#sexto_grid").css({"height": "-1px","overflow": "hidden"});
 });

 $('#nav-contact-tab').click(function(){
 	$("#primer_grid").css({"height": "-1px","overflow": "hidden"});
 	$("#segundo_grid").css({"height": "-1px","overflow": "hidden"});
 	$("#tercer_grid").css({"height": "1557px",});
 	$("#cuarto_grid").css({"height": "-1px","overflow": "hidden"});
 	$("#quinto_grid").css({"height": "-1px","overflow": "hidden"});
    $("#sexto_grid").css({"height": "-1px","overflow": "hidden"});
 });

 $('#uno-cancun-tab').click(function(){
 	$("#primer_grid").css({"height": "-1px","overflow": "hidden"});
 	$("#segundo_grid").css({"height": "-1px","overflow": "hidden"});
 	$("#tercer_grid").css({"height": "-1px","overflow": "hidden"});
 	$("#cuarto_grid").css({"height": "1148px"});
 	$("#quinto_grid").css({"height": "-1px","overflow": "hidden"});
    $("#sexto_grid").css({"height": "-1px","overflow": "hidden"});
 });


 $('#dos-cancun-tab').click(function(){
 	$("#primer_grid").css({"height": "-1px","overflow": "hidden"});
 	$("#segundo_grid").css({"height": "-1px","overflow": "hidden"});
 	$("#tercer_grid").css({"height": "-1px","overflow": "hidden"});
 	$("#cuarto_grid").css({"height": "-1px","overflow": "hidden"});
 	$("#quinto_grid").css({"height": "840px"});
    $("#sexto_grid").css({"height": "-1px","overflow": "hidden"});
 });

 $('#tres-cancun-tab').click(function(){
    $("#primer_grid").css({"height": "-1px","overflow": "hidden"});
    $("#segundo_grid").css({"height": "-1px","overflow": "hidden"});
    $("#tercer_grid").css({"height": "-1px","overflow": "hidden"});
    $("#cuarto_grid").css({"height": "-1px","overflow": "hidden"});
    $("#quinto_grid").css({"height": "-1px","overflow": "hidden"});
    $("#sexto_grid").css({"height": "840px"});
 });

  
    $('#slides').superslides({
    	play: '5000',
      animation: 'fade'
    });
  </script>


  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <script>

    function submitChangeRate() {
        let URLactual = window.location;
        URLactual = URLactual.toString();
         $('#formRate').append('<input type="hidden" name="url_actual " value="'+URLactual+'" />');
        $('#formRate').submit();
    }

  	    $(document).ready(function() {




  	    	$("#primer_grid").css({"height": "1233px",});
 	$("#segundo_grid").css({"height": "-1px","overflow": "hidden"});
 	$("#tercer_grid").css({"height": "-1px","overflow": "hidden"});
 	$("#cuarto_grid").css({"height": "-1px","overflow": "hidden"});
 	$("#quinto_grid").css({"height": "-1px","overflow": "hidden"});
    $("#quinto_grid").css({"height": "-1px","overflow": "hidden"});
    $("#sexto_grid").css({"height": "-1px","overflow": "hidden"});
  	    	 // Grid 1 1233
  	    	 // Grid 2 951
  	    	 // Grid 3 1557

  	    	//$(".cuadro-inicio").hide(1000);

      $('.cuadro-inicio').css({"background-color":"rgba(255,255,255,0);",
  								"z-index":"0"});;

      	$.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: '< Ant',
            nextText: 'Sig >',
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
            dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
            };
            $.datepicker.setDefaults($.datepicker.regional['es']);
  $( function() {
    $( ".datepicker" ).datepicker({ minDate: {{ $dias = (isset($dias_anticipo_reserva)) ? $dias_anticipo_reserva : 2}} });
  } );

    @if(isset($dias_activo_tour))
        @if($dias_activo_tour!='')
        //Bloquear dias especificos de la semana
	           function noExcursion(date){
                var day = date.getDay();
                // aqui indicamos el numero correspondiente a los dias que ha de bloquearse (el 0 es Domingo, 1 Lunes, etc...) en el ejemplo bloqueo todos menos los lunes y jueves.
                return [({!! $dias_activo_tour !!}), ''];
                };

                //Crear el datepicker
                $(".datepicker").datepicker({
                beforeShowDay: noExcursion,
                minDate: 2,
            });
        @endif
    @endif

//     const template = document.querySelector('#myTemplate');
// tippy('.moneda', {
// 	html: template,
// 	arrow: true,
// 	interactive: true,
// });
// template.innerHTML = '<a href="#" style="font-size: 1em; color: #000; text-decoration: none;"><img class="moneda" src="{{ url('/img/bandera-mexico.png') }}" alt="bandera de mexico"> MXN</a>';

window.onscroll = function() {

	if(window.scrollY >= '104.54545593261719')
	{
		$(".contenedor-menu").css({
					"position": "fixed",
					"width": "100%",
					"z-index": "1000",
					"top": "0",
					"height": "45px",
					"color": "#000 !important",
                    "background-color": "rgba(255, 255, 255, 1)",
					"box-shadow": "0px 0px 3px 0px rgba(0,0,0,0.75)",
					
				});
		 $("#logo").css({"transform": "scale(0.6)",});
		 $(".menu-pc").css({"border": "none",});

		$('.nav-link').addClass('links');
		$("#barra-Categoria").css({"display":"block"});
		 
		// $("#num-items").css({"top": "12px"});
		// $("#barra-Categoria").css({"display":"block"});

		// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		// 		   $( "#barra-Categoria" ).remove();
		// 		}
		

		
	}
	else
	{
		$('.nav-link').removeClass('links');
		$(".contenedor-menu").removeAttr("style");
		$("#logo").removeAttr("style");
		$(".menu-pc").removeAttr("style");
		$("#num-items").removeAttr("style");
		$("#barra-Categoria").removeAttr("style");
	}
};

$("#menu-hamburguer").click(function()
{
		$('#menu-movil').toggleClass('active');
		$('.icono-menu-movil').toggleClass('active');
		
});

$("#ver-menu").click(function()
{
	$('#sub-menu').toggleClass('ver');
});

$("#pago_online").click(function()
{
    $('.bkng-tb-cntnt').toggle(600);
    // $('#sub-menu').toggleClass('ver');
});

$("#ver-menu2").click(function()
{
    $('#sub-menu2').toggleClass('ver');
});

$('#tipo_servicio').change(function()
{
	if($(this).val()=='Viaje redondo')
	{
		$("#fechaSalida").show();
	}
	else
	{
		$("#fechaSalida").hide();
	}
	
});
    });




  </script>


{{-- <script src="//code.jquery.com/jquery-2.1.3.min.js"></script> --}}
<script>
(function(a){if(typeof define==='function'&&define.amd){define(['jquery'],a)}else{a(jQuery)}}(function($){if($.support.cors||!$.ajaxTransport||!window.XDomainRequest){return}var n=/^https?:\/\//i;var o=/^get|post$/i;var p=new RegExp('^'+location.protocol,'i');$.ajaxTransport('* text html xml json',function(j,k,l){if(!j.crossDomain||!j.async||!o.test(j.type)||!n.test(j.url)||!p.test(j.url)){return}var m=null;return{send:function(f,g){var h='';var i=(k.dataType||'').toLowerCase();m=new XDomainRequest();if(/^\d+$/.test(k.timeout)){m.timeout=k.timeout}m.ontimeout=function(){g(500,'timeout')};m.onload=function(){var a='Content-Length: '+m.responseText.length+'\r\nContent-Type: '+m.contentType;var b={code:200,message:'success'};var c={text:m.responseText};try{if(i==='html'||/text\/html/i.test(m.contentType)){c.html=m.responseText}else if(i==='json'||(i!=='text'&&/\/json/i.test(m.contentType))){try{c.json=$.parseJSON(m.responseText)}catch(e){b.code=500;b.message='parseerror'}}else if(i==='xml'||(i!=='text'&&/\/xml/i.test(m.contentType))){var d=new ActiveXObject('Microsoft.XMLDOM');d.async=false;try{d.loadXML(m.responseText)}catch(e){d=undefined}if(!d||!d.documentElement||d.getElementsByTagName('parsererror').length){b.code=500;b.message='parseerror';throw'Invalid XML: '+m.responseText;}c.xml=d}}catch(parseMessage){throw parseMessage;}finally{g(b.code,b.message,c,a)}};m.onprogress=function(){};m.onerror=function(){g(500,'error',{text:m.responseText})};if(k.data){h=($.type(k.data)==='string')?k.data:$.param(k.data)}m.open(j.type,j.url);m.send(h)},abort:function(){if(m){m.abort()}}}})}));
    
    jQuery.ajax({
        type: "post",
        url: "//www.e-tsw.com/Search/Box?af=AF-TWVX&ln=&cu=",
        success: function (data) {
            jQuery("#liquidBoxContainer").html(data);
        }
    });
</script>





</body>
</html>
