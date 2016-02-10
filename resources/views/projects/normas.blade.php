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
			<p>Somos un grupo de profesionales enfocados en la regulación técnica, el contacto con gobierno y su estrategia. Creamos un eje de comunicación entre los abogados, el equipo técnico, y los profesionales de relaciones públicas.</p>
			<p>Somos un eje que pone en contacto a tu equipo de relaciones públicas, abogados y científicos.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">Para la imagen de normas, nos basamos en la idea de que las normas sientan las bases, es por eso que cortamos la “N” y resaltamos la base con el cambio de color, para hacer alusión a esos cimientos. Para el resto de la palabra utilizamos una tipografía en bold que nos ayuda a reforzar el peso que tiene la palabra y en la parte inferior incluimos las temáticas que la empresa trata uniéndolas con una pleca en horizontal que hace alusión a las bases y une las temáticas.</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/normas/identidad_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/normas/identidad_01.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Se desarrolló el sitio web de Normas con el objetivo de centralizar la información de la marca de una manera intuitiva para que los clientes puedan encontrar toda la información requerida fácil y rápido.</p>
				<p>Septiembre 2015</p>
				<p><i class="fa fa-home"></i> <a href="http://www.normas.mx/" target="_blank">normas.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/normas/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/normas/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/normas/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/normas/web_04.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>