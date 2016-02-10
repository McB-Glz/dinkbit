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
			<p>Segmail es una empresa integral de servicios de mensajería y paquetería nacional e internacional.</p>
			<p>Nuestro objetivo es ofrecer los servicios de las principales líneas transportistas a nivel mundial para que con Segmail puedas enviar desde un sobre o paquete, hasta hacer una importación o exportación. De esta forma reducirás costos y recibirás un excelente servicio, eficientizando así la logística de tu empresa o negocio.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Plataforma web modular en donde puedes encontrar toodos los servicios de Segmail. Cuenta con un módulo de reservación de servicios y certificado de regalo. Esta contsruída sobre una plataforma multilingue para poder cambiar entre inglés y español.</p>
				<p>Agosto 2015</p>
				<p><i class="fa fa-home"></i> <a href="http://segmail.co/" target="_blank">segmail.co</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/segmail/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/segmail/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/segmail/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/segmail/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/segmail/web_05.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>