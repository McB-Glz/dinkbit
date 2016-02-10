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
			<p>Líderes en la distribución para la Industria Hotelera, Restaurantera y Centros de Consumo.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">El sitio web de Importaciones Delika esta basado en un diseño simple y llamativo. Con una navegacion principal en de sola página, el sitio permite al usuario encontrar toda la información relevante en cuestión de segundos. Se pueden encontrar todos sus productos así como sus respectivos catálogos.</p>
				<p>Junio 2015</p>
				<p><i class="fa fa-home"></i> <a href="http://delika.com.mx/" target="_blank">delika.com.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/delika/web_05.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/delika/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/delika/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/delika/web_03.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Campañas Digitales</h3>
				<h4>AdWords</h4>
				<p class="desc">Para Delika implementamos campañas de Google Adwords que buscan atraer clientes potenciales y obtener leads.</p>
				<p>Junio 2015</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/delika/digital_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/delika/digital_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/delika/digital_03.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>