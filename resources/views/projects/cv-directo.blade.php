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
			<p>Es una empresa líder en la comercialización de productos novedosos y de alta calidad para el hogar y el uso personal, que ayudan a lograr una vida más equilibrada, con un alto sentido de la innovación, elemento rector en su cadena de valor.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Camapañas Digitales</h3>
				<h4>Social Media | Marketing digital</h4>
				<p class="desc">Para CV Directo nuestra misión era levantar su tienda en línea para posicionarla como otro canal de venta indispensable para la empresa y lo hicimos a través de campañas digitales en redes sociales y Google Adwords llevando tráfico a la página, apareciendo en los primeros lugares de búsqueda y buscando a los clientes para cerrar sus ventas mediante campañas de remarketing.</p>
				<p>Abril 2015</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/cvdirecto" target="_blank">/cvdirecto</a></p>
				<p><i class="fa fa-instagram"></i> <a href="https://www.instagram.com/cvdirecto" target="_blank">@cvdirecto</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/cvDirecto/digital_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/cvDirecto/digital_02.jpg') }}" 
			class="img-responsive">
			<img src="{{ url('assets/img/portfolio/cvDirecto/digital_03.jpg') }}" 
			class="img-responsive">
			<img src="{{ url('assets/img/portfolio/cvDirecto/digital_04.jpg') }}" 
			class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Casos de Éxito</h3>
				<h4>Camapañas Digitales</h4>
				<p class="desc">Facebook reconoció en su blog de negocios nuestras campañas de CV Directo como un caso de éxito.</p>
				<p>Gracias al buen desempeño, optimización y experiencia que tenemos en la plataforma de anuncios de Facebook, logramos incrementar el tráfico y las ventas en línea de nuestro cliente.</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/business/success/cv-directo" target="_blank">/business/success/cv-directo</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/cvDirecto/digital_05.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/cvDirecto/digital_06.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/cvDirecto/digital_07.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>