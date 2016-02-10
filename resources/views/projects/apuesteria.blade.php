@section('singleClass', 'proyecto')

<div class="container-fluid bottommargin-xl">
	<div class="row topmargin section-title">
		<div class="col-xs-12">
			<h2>
				{{ $project['title'] }} | 
				<?php 
                    $count = count($project['categories']);
                    $i = 0;
                ?>
				@foreach($project['categories'] as $category)
					<span>
						{{ config('categories.'.$category) }}<?php ++$i; if ($i < $count) {
     echo ',';
 }?>
					</span>
				@endforeach
			</h2>
		</div>
	</div>
	<div class="row section-desc">
		<div class="col-xs-12">
			<p>La Apuestería es un Casino y Sportsbook online en México con juegos interactivos y apuestas en vivo de todos los deportes.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">Para la identidad de esta marca, quisimos hacer que el mensaje que se transmitiera fuera implícito desde el nombre hasta la tipografía y colores. Construyendo más que una marca una imagen sólida entre diversión y entretenimiento puro, creado y diseñado para un segmento jóven que se identifica con los procesos y métodos online.</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/apuesteria/identidad_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/apuesteria/identidad_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/apuesteria/identidad_03.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Los deportes son una gran pasión en todo el mundo, y en especial en México las personas son fieles seguidores de sus equipos. Apuestería llego en 2014 para ser el lugar número uno en internet donde los fanáticos de cualquier deporte puedan apostar por su favorito de forma segura y sencilla.</p>
				<p>Diseñamos toda su página utilizando estudios de usabilidad y navegación para permitir un flujo de tráfico eficiente y eficaz.</p>
				<p>Enero, 2014</p>
				<p><i class="fa fa-home"></i> <a href="http://apuesteria.com/" target="_blank">apuesteria.com</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/apuesteria/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/apuesteria/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/apuesteria/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/apuesteria/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/apuesteria/web_05.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/apuesteria/web_06.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/apuesteria/web_07.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/apuesteria/web_08.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Camapañas Digitales</h3>
				<h4>Social Media | Marketing Digital</h4>
				<p class="desc">Apuestería funciona como un sitio de apuestas 100% seguro y legal para la República Mexicana. Su única publicidad es a través de Facebook, Twitter y Google. Manejamos su campaña de Adwords para dirigir más tráfico al sitio y realizamos todos los diseños de banners que van a las redes de display. A través de las redes se promocionan los partidos del día y los juegos de casino, creando Calls to Action que lleven a los fanáticos de las apuestas a vivir emociones fuertes en el sitio Apuestería.</p>
				<p>Diciembre, 2013</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/Apuesteria" target="_blank">/apuesteria</a></p>
				<p><i class="fa fa-twitter-square"></i> <a href="https://twitter.com/apuesteria" target="_blank">@apuesteria</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/apuesteria/digital_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/apuesteria/digital_02.jpg') }}" 
			class="img-responsive">
			<img src="{{ url('assets/img/portfolio/apuesteria/digital_03.jpg') }}" 
			class="img-responsive">
			{{-- <img src="{{ url('assets/img/portfolio/apuesteria/digital_04.jpg') }}" 
			class="img-responsive"> --}}
		</div>
	</div>
</div>