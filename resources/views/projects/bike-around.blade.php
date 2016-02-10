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
			<p>Un nuevo concepto en Cancún donde podrás rentar una o varias bicicletas para recorrer rutas turísticas en este gran destino de playa en el estado de Quintana Roo. Bike Around cuenta con las mejores bicicletas y el equipo de seguridad necesario para que disfrutes una tarde mágica.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">El sitio web de Bike Around elaborado en versiones en inglés y español incluye una descripción los servicios que ofrece Bike Around además de las fichas técnicas de las bicicletas que ofrecen a la renta junto con la información de las rutas populares en cada zona en la que se encuentran buscando transmitir la energía y actitud positiva de Bike Around.</p>
				<p>Marzo 2015</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/bikeAround/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/bikeAround/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/bikeAround/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/bikeAround/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/bikeAround/web_05.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/bikeAround/web_06.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/bikeAround/web_07.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/bikeAround/web_08.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>