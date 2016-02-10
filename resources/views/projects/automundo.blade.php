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
			<p>Automundo es un grupo de agencias automotrices de las marcas Chrysler, Dodge, Jeep, RAM, Fiat, Alfa Romeo y Mitsubishi, comprometidas con satisfacer las necesidades de sus clientes mediante la innovación constante en sistemas de atención y servicio al cliente.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Camapañas Digitales</h3>
				<h4>Social Media</h4>
				<p class="desc">En dinkbit manejamos sus comunidades de Facebook e Instagram, diseñando contenido específico de las marcas y modelos que manejan además de incluir tips Automundo para todo tipo de conductores.</p>
				<p>Diciembre 2014</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/AutoMundoGrupo" target="_blank">/AutoMundoGrupo</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/automundo/digital_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/automundo/digital_02.jpg') }}" 
			class="img-responsive">
			<img src="{{ url('assets/img/portfolio/automundo/digital_03.jpg') }}" 
			class="img-responsive">
		</div>
	</div>
</div>