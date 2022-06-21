<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', ['as' => '/', 'uses' => 'Sitio@home']);
Route::get('/cambio', ['as' => '/', 'uses' => 'Sitio@cambio']);
Route::get('contactanos', ['as' => 'contactanos', 'uses' => 'Sitio@contactanos']);
Route::get('departamentos', ['as' => 'departamentos', 'uses' => 'Sitio@departamentos']);
Route::get('{ubicacion?}/tours-aventuras', ['as' => '{ubicacion?}/tours-aventuras', 'uses' => 'Sitio@ubicacion'])->where('ubicacion', "[A-Za-z]+");
Route::get('cancun/{tour?}/informacion', ['as' => 'infoTour', 'uses' => 'Sitio@infoTour']);
Route::get('validar-transaccion', ['as' => 'validar-transaccion', 'uses' => 'OpenpayController@validarTransaccion']);
Route::get('ofertas/hospedaje-transportacion-tour-yate', ['as' => 'ofertas', 'uses' => 'Sitio@toursOferta']);
Route::get('hotel-avion', ['as' => 'hotel-avion' , 'uses' => 'Sitio@HotelesAviones']);
// Route::get('hot-sale/lodging-transportation-tour-yacht', ['as' => 'ofertasIngles', 'uses' => 'Sitio@toursOfertaIngles']);
Route::get('{categorie?}/categoria', ['as' => 'categories', 'uses' => 'Sitio@categoria']);
Route::post('categoriaPost', ['as' => 'categoriaPost', 'uses' => 'Sitio@categoriaPost']);
Route::post('transportacion', ['as' => 'transportacion', 'uses' => 'Sitio@transporte']);
Route::get('transportacion', ['as' => 'transportacionGet', 'uses' => 'Sitio@transportacionGet']);
Route::get('nueva-transportacion', ['as' => 'transportacionN', 'uses' => 'Sitio@transportacionN']);
Route::get('autos', ['as' => 'cars', 'uses' => 'Sitio@cars']);
Route::get('veleros', ['as' => 'yates', 'uses' => 'Sitio@yates']);
Route::get('parque-xcaret', ['as' => 'parque-xcaret', 'uses' => 'Sitio@xcaret']);
Route::get('cupon-efectivo', ['as' => 'cupon', 'uses' => 'Sitio@cupon_efectivo']);
Route::get('nosotros', ['as' => 'nosotros', 'uses' => 'Sitio@nosotros']);
Route::post('nosotros-form', ['as' => 'nosotros-form', 'uses' => 'Sitio@nosotros_email']);
Route::post('xcaret-form', ['as' => 'xcaret-form', 'uses' => 'Sitio@xcaret_email']);
Route::post('change-exchange-rate', ['as' => 'change-exchange-rate' , 'uses' => 'Sitio@changeExchangeRate']);
// Carrito
Route::post('ingresar-carrito', ['as' => 'ingresar-carrito' , 'uses' => 'Shopping_Cart@insertCart']);
Route::post('ingresar-carrito-paquete', ['as' => 'ingresar-carrito-paquete' , 'uses' => 'Shopping_Cart@insertCartPaquete']);
Route::get('carrito', ['as' => 'carrito' , 'uses' => 'Shopping_Cart@contentCart']);

Route::get('{rowid?}/eliminar-tour', ['as' => '{rowid?}/eliminar-tour', 'uses' => 'Shopping_Cart@deleteCart']);
Route::get('datos-del-cliente', ['as' => 'datos-del-cliente', 'uses' => 'Shopping_Cart@clientData']);
Route::get('confirmacion', ['as' => 'confirmacion' , 'uses' => 'Shopping_Cart@confirmation']);
Route::post('save-date-client', ['as' => 'save-date-client' , 'uses' => 'Shopping_Cart@saveDateClient']);
Route::get('compra-exitosa', ['as' => 'compra-exitosa', 'uses' => 'Sitio@compraExitosa']);
Route::get('cupon', ['as' => 'cupon', 'uses' => 'Shopping_Cart@cupon']);

//CATEGORIAS
Route::get('tours-y-actividades/cancun', ['as' => 'tours_actividades', 'uses' => 'CategoriesController@getCategories']);

Route::get('paquetes-tours/cancun', ['as' => 'paquetes', 'uses' => 'Sitio@getPaquetes']);
 
//Tours
Route::get('tours-en/cancun/{categorie}/{id_categorie}', ['as' => 'tours_categorie', 'uses' => 'ToursController@getTourCategorie']);

Route::post('open_pay', ['as' => 'open_pay', 'uses' => 'OpenpayController@procesandoPago']);

//INGLES
Route::get('en', ['as' => 'en/', 'uses' => 'SitioEn@home']);
Route::get('en/contactanos', ['as' => 'en/contactanos', 'uses' => 'Sitio@contactanos']);
Route::get('en/departamentos', ['as' => 'en/departamentos', 'uses' => 'Sitio@EnDepartamento']);
Route::get('en/{ubicacion?}/tours-aventuras', ['as' => 'en/{ubicacion?}/tours-aventuras', 'uses' => 'Sitio@ubicacion'])->where('ubicacion', "[A-Za-z]+");
Route::get('en/cancun/{tour?}/informacion', ['as' => 'en/infoTour', 'uses' => 'SitioEn@infoTour']);
Route::get('en/ofertas/hospedaje-transportacion-tour-yate', ['as' => 'en/ofertas', 'uses' => 'Sitio@toursOferta']);
Route::get('hot-sale/lodging-transportation-tour-yacht', ['as' => 'en/ofertasIngles', 'uses' => 'SitioEn@toursOfertaIngles']);
Route::get('en/{categorie?}/categoria', ['as' => 'en/categories', 'uses' => 'SitioEn@categoria']);
Route::post('en/categoriaPost', ['as' => 'en/categoriaPost', 'uses' => 'Sitio@categoriaPost']);
Route::post('en/transportacion', ['as' => 'en/transportacion', 'uses' => 'SitioEn@transporte']);
Route::get('en/transportacion', ['as' => 'en/transportacionGet', 'uses' => 'Sitio@transportacionGet']);
Route::get('en/autos', ['as' => 'en/cars', 'uses' => 'SitioEn@cars']);
Route::get('en/yates', ['as' => 'en/yates', 'uses' => 'SitioEn@yates']);
Route::get('en/cupon-efectivo', ['as' => 'en/cupon', 'uses' => 'Sitio@cupon_efectivo']);
Route::get('en/nosotros', ['as' => 'en/nosotros', 'uses' => 'SitioEn@nosotros']);
Route::get('en/hotel_flight', ['as' => 'en/hotel_flight', 'uses' => 'SitioEn@hotel_flight']);
// Carrito INGLES
Route::post('en/ingresar-carrito', ['as' => 'en/ingresar-carrito' , 'uses' => 'Shopping_CartEn@insertCart']);
Route::get('en/carrito', ['as' => 'en/carrito' , 'uses' => 'Shopping_CartEn@contentCart']);
Route::get('en/{rowid?}/eliminar-tour', ['as' => 'en/{rowid?}/eliminar-tour', 'uses' => 'Shopping_Cart@deleteCart']);
Route::get('en/datos-del-cliente', ['as' => 'en/datos-del-cliente', 'uses' => 'Shopping_CartEn@clientData']);
Route::get('en/confirmacion', ['as' => 'en/confirmacion' , 'uses' => 'Shopping_CartEn@confirmation']);
Route::post('en/save-date-client', ['as' => 'en/save-date-client' , 'uses' => 'Shopping_Cart@saveDateClient']);
Route::get('en/compra-exitosa', ['as' => 'en/compra-exitosa', 'uses' => 'Sitio@compraExitosa']);
Route::get('en/cupon', ['as' => 'en/cupon', 'uses' => 'Shopping_Cart@cupon']);



Route::get('payment', array('as' => 'payment','uses' => 'PaypalController@postPayment',));
Route::get('payment/status', array('as' => 'payment.status','uses' => 'PaypalController@getPaymentStatus',));

//SUBDOMINIO

Route::get('hoteles.cancundoit.com/', array('as' => 'hoteles.cancundoit.com/','uses' => 'PaypalController@postPayment',));

Route::group(['domain'=>'hoteles.cancundoit.com/'],function(){
	Route::get('',function(){
		return 'hola estamos en hoteles';
	});
});

//MOVIL
Route::get('movil', ['as' => 'movil', 'uses' => 'Sitio@movil']);
