@extends('layout')

@section('contenido')
<div class="img-categories">

</div>

<section class="container mt-4">
	<h1 class="titulo-categoria titulo-actividades mb-4">TOURS {{ $categorie }} EN CANCÚN</h1>
	<div class="row col-12">
		@foreach ($dataTours as $data)
		<div class="col-3 tour-categoria mb-3">
			<div class="col-12 row p-0 box-tours-border">
				<div class="col-12 sub-tour-categoria rounded-0">
					<a href="{{route('infoTour',['tour'=> str_replace(' ', '-', $data['tours']['name'])  ])}}">
						<img class="rounded-0" width="100%" src=" {{ $data['tours']['url_image'] }} ">
					</a>
					@if( $data['tours']['operation'][0]['discount_rate'] > 0)
						<span class="descuento">{{ $data['tours']['operation'][0]['discount_rate'] }}%</span>
					@endif
					
				</div>
				<div class="info-tour-box col-12">
					<h4>
						<a href="{{route('infoTour',['tour'=> str_replace(' ', '-', $data['tours']['name'])  ])}}">
							{{ $data['tours']['name'] }}
						</a>
					</h4>
					<div class="service-review col-12 p-0 m-0">
						<ul class=" text-color booking-item-rating-stars">
							<li>
								<i class="fa  fa-star"></i>
							</li>
							<li>
								<i class="fa  fa-star"></i>
							</li>
							<li>
								<i class="fa  fa-star"></i>
							</li>
							<li>
								<i class="fa  fa-star"></i>
							</li>
							<li>
								<i class="fa  fa-star"></i>
							</li>
						</ul>
					</div>
					<br>
					<div class="section-footer col-12 p-0 m-0">
						<div class="footer-inner">
	                    	<div class="service-duration mt-2">
	        					<i class="input-icon field-icon fa">
	        						<svg height="16px" width="16px" version="1.1" id="Layer_1" 		xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">

										<g fill="#5E6D77">
											<path d="M12,23.25C5.797,23.25,0.75,18.203,0.75,12C0.75,5.797,5.797,0.75,12,0.75c6.203,0,11.25,5.047,11.25,11.25 C23.25,18.203,18.203,23.25,12,23.25z M12,2.25c-5.376,0-9.75,4.374-9.75,9.75s4.374,9.75,9.75,9.75s9.75-4.374,9.75-9.75 S17.376,2.25,12,2.25z"></path>
											<path d="M15.75,16.5c-0.2,0-0.389-0.078-0.53-0.22l-2.25-2.25c-0.302,0.145-0.632,0.22-0.969,0.22c-1.241,0-2.25-1.009-2.25-2.25 c0-0.96,0.615-1.808,1.5-2.121V5.25c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v4.629c0.885,0.314,1.5,1.162,1.5,2.121 c0,0.338-0.075,0.668-0.22,0.969l2.25,2.25c0.292,0.292,0.292,0.768,0,1.061C16.139,16.422,15.95,16.5,15.75,16.5z M12,11.25 c-0.414,0-0.75,0.336-0.75,0.75s0.336,0.75,0.75,0.75s0.75-0.336,0.75-0.75S12.414,11.25,12,11.25z"></path>
										</g>
									</svg>
								</i> {{ $data['tours']['duration'] }}
							</div>
							<div class="service-precio text-right">
								@if( $data['tours']['operation'][0]['discount_rate'] > 0)
	    								<span class="text-lg lh1em item "> ${{ $data['tours']['operation'][0]['adult_price'] }} mxn</span>
	    							@endif
							</div>
	                    	<div class="service-price mt-2 mb-2">
	    						<span>
	       							<i class="input-icon field-icon fa">
	        							<svg width="10px" height="16px" viewBox="0 0 11 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
											<defs></defs>
										    <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										        <g id="Room_Only_Detail_1" transform="translate(-135.000000, -4858.000000)" fill="#ffab53" fill-rule="nonzero">
										            <g id="nearby-hotel" transform="translate(130.000000, 4334.000000)">
										                <g id="h1-g" transform="translate(5.000000, 136.000000)">
										                    <g id="hotel-grid">
										                        <g id="price" transform="translate(0.000000, 383.000000)">
										                            <g id="thunder" transform="translate(0.000000, 5.000000)">
										                                <path d="M10.0143234,6.99308716 C9.91102517,6.83252576 9.73362166,6.73708716 9.54386728,6.73708716 L5.61404272,6.73708716 L5.61404272,0.561648567 C5.61404272,0.296666111 5.42877956,0.0676134793 5.16941114,0.0125959355 C4.90555149,-0.0435444154 4.64730587,0.0923152337 4.5395164,0.333718743 L0.0482883306,10.4389819 C-0.0291853536,10.6118942 -0.0123432484,10.8139994 0.0909549973,10.9723152 C0.194253243,11.1317538 0.371656752,11.2283152 0.561411138,11.2283152 L4.4912357,11.2283152 L4.4912357,17.4037538 C4.4912357,17.6687363 4.67649886,17.8977889 4.93586728,17.9528065 C4.97516552,17.9606661 5.01446377,17.9651573 5.05263921,17.9651573 C5.27046377,17.9651573 5.47369184,17.8382801 5.56576201,17.6316837 L10.0569901,7.5264205 C10.133341,7.35238541 10.1187445,7.15252576 10.0143234,6.99308716 Z" id="Shape"></path>
										                            </g>
										                        </g>
										                    </g>
										                </g>
										            </g>
										        </g>
										    </g>
										</svg>
									</i>                            
									<span class="fr_text">Costo</span>
	    						</span>
	    						<span class="price">
	        						<span class="text-lg lh1em item "> ${{ $data['tours']['operation'][0]['discount_price'] }} mxn</span>
	        					</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	
</section>

@stop