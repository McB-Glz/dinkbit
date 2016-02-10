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
			<p>Revista sobre belleza, salud, moda, entretenimiento, deportes, gadgets y espectáculos; así como temas de interés general. Cuenta con un programa de TV y la edición impresa se publica todos los lunes y viernes. EstiloDF estaba ya posicionado en las calles, pero necesitaba una estrategia que replicara el efecto en internet.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">A través de una página web que se asemeja a una revista digital, creamos un portal totalmente administrable que permite a los administradores del sitio, subir contenido y administrar la información de forma sencilla y eficiente.</p>
				<p>Septiembre, 2013</p>
				{{-- <p><i class="fa fa-home"></i> <a href="http://www.estilodf.tv/" target="_blank">estilodf.tv</a></p> --}}
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/estiloDf/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/estiloDf/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/estiloDf/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/estiloDf/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/estiloDf/web_05.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Campañas Digitales</h3>
				<p class="desc">Junto con EstiloDF, generamos una estrategia de lanzamiento y posicionamiento en redes sociales. Creamos la base de las plataformas que actualmente son un éxito rotundo en redes sociales.</p>
				<p>Enero 2012</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/EstiloDF.TV" target="_blank">EstiloDF.TV</a></p>
				<p><i class="fa fa-twitter-square"></i> <a href="https://twitter.com/estilodf" target="_blank">@estilodf</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/estiloDf/digital_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/estiloDf/digital_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/estiloDf/digital_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/estiloDf/digital_04.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>