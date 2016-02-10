@extends('layouts.master')
@section('title', 'Contacto')
@section('sectionId', 'contacto')

@section('sectionClass', 'contacto')

@section('content')

	<div class="mapa" id="js-map">
		<div id="googlemaps"></div>
		<div class="mapa-title">
			<h2 class="text-heading">Contáctanos</h2>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row topmargin bottommargin-lg">
			<div class="col-xs-12 col-sm-5">
				<h2 class="border-bottom">Contáctanos</h2>
				<div class="media">
				  <div class="media-left">
				  	<i class="fa fa-envelope fa-lg"></i>
				  </div>
				  <div class="media-body">
				  	<a href="mailto:contacto@dinkbit.com">contacto@dinkbit.com</a>
				  </div>
				</div>
				<div class="media">
				  <div class="media-left">
				  	<i class="fa fa-phone fa-lg"></i>
				  </div>
				  <div class="media-body">
				  	<a href="tel:5522241607">(+52) 55 22241607</a>
				  </div>
				</div>
				<div class="media">
				  <div class="media-left">
				  	<i class="fa fa-map-marker fa-2x"></i>
				  </div>
				  <div class="media-body">
				  	<address>
				  		Bosque de Ciruelos 130 PH1201,
				  		Miguel Hidalgo, <br/> Distrito
				  		Federal, CP 11700, México 
				  	</address>
				  </div>
				</div>
				<div class="media">
				  <div class="media-left">
				  	<i class="fa fa-facebook fa-lg"></i>
				  </div>
				  <div class="media-body">
				  	<a href="https://www.facebook.com/dinkbit" target="_blank">/dinkbit</a>
				  </div>
				</div>
				<div class="media">
				  <div class="media-left">
				  	<i class="fa fa-twitter fa-lg"></i>
				  </div>
				  <div class="media-body">
				  	<a href="https://twitter.com/dinkbit" target="_blank">@dinkbit</a>
				  </div>
				</div>
				<div class="media">
				  <div class="media-left">
				  	<i class="fa fa-behance fa-lg"></i>
				  </div>
				  <div class="media-body">
				  	<a href="https://www.behance.net/dinkbit" target="_blank">/dinkbit</a>
				  </div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-sm-offset-1 contact-form">
				<h2 class="text-heading">Te queremos escuchar<br/><small>Si tienes dudas, comentarios, propuestas, proyectos, escríbenos.</small></h2>
				 <div id="response" class="alert" role="alert" style="display: none;"></div>
				<form method="POST" action="{{ url('/send-email') }}" id="contactForm">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />
					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control bg-form" name="name" id="name" placeholder="Nombre completo">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<input type="email" class="form-control bg-form" name="email" id="email" placeholder="Email">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<input type="tel" class="form-control bg-form" name="tel" id="tel" placeholder="Teléfono">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<textarea type="text" class="form-control bg-form" rows="5" name="message" id="message" placeholder="Cuéntanos de tu proyecto o comentario"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 text-right">
							<button type="submit" class="btn btn-primary btn-lg text-sm pull-right">Enviar</button>
							<p class="pp">
								Al dar click en el botón enviar<br/>
								aceptas nuestra política de privacidad.
							</p>
						</div>
					</div>
				</form>

				<div class="row" id="formSuccess">
					<h1 class="text-red text-center">Su mensaje ha sido enviado gracias!</h1>
				</div>

				<div class="row" id="formFail">
					<h1 class="text-red text-center">Error al enviar su mensaje.</h1>
				</div>
			</div>
		</div>
	</div>

@stop

@section('js')
	<!-- Include the Google Maps API library - required for embedding maps -->
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	 
	<script type="text/javascript">

	$('input, textarea').placeholder();
	 
	// The latitude and longitude of your business / place
	var position = [19.403452, -99.240774];
	 
	function showGoogleMaps() {
	 
	    var latLng = new google.maps.LatLng(position[0], position[1]);
	 
	    var mapOptions = {
	        zoom: 17, // initialize zoom level - the max value is 21
	        streetViewControl: false, // hide the yellow Street View pegman
	        scaleControl: true, // allow users to zoom the Google Map
	        mapTypeId: google.maps.MapTypeId.ROADMAP,
	        center: new google.maps.LatLng(19.4029157,-99.2411281)
	    };
	 
	    map = new google.maps.Map(document.getElementById('googlemaps'),
	        mapOptions);
	 
	    // Show the default red marker at the location
	    var image = 'assets/img/pinpoint.png';
	    marker = new google.maps.Marker({
	        position: latLng,
	        map: map,
	        draggable: false,
	        animation: google.maps.Animation.DROP,
	        icon: image
	    });
	}
	 
	google.maps.event.addDomListener(window, 'load', showGoogleMaps);
	</script>
	<script type="text/javascript">
		$(function() {
			contactFormValidation();
		});
	</script>
@stop