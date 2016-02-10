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
			<p>Inteledi es una empresa mexicana, enfocada en la seguridad electrónica, automatización y control de edificios inteligentes y sustentables. Fue fundada por profesionales que suman más de 25 años de experiencia en el campo de la automatización y control.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">Creamos una imagen con un diseño fresco e innovador que a la vez no pierde la esencia de la estructura, la función de la forma y resalta el minimalismo.</p>
 				<p>El diseño del logotipo, busca hacer referencia a la razón de ser de la marca. La tipografía obedece a un sistema de líneas, creando un ambiente de dinamismo. El material que aparece en la imagen del diseño busca transmitir un mensaje de sustentabilidad y quisimos utilizar la madera representando la sabiduría y años de experiencia.</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/inteledi/identidad_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/inteledi/identidad_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/inteledi/identidad_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/inteledi/identidad_04.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Ingeniería Sustentable es el lema de esta empresa dedicada a la automatización y mejor aprovechamiento de recursos para edificios y casa inteligentes.</p>
				<p>Creamos un sitio web responsivo que utiliza un CMS para la gestión de sus contenidos, con estas herramientas Inteledi fue capaz de publicar la información referente a sus servicios, sus casos de éxito y algunas de las personas que colaboran con ellos.</p>
				<p>Agosto, 2013</p>
				<p><i class="fa fa-home"></i> <a href="http://inteledi.com/" target="_blank">inteledi.com</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/inteledi/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/inteledi/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/inteledi/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/inteledi/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/inteledi/web_05.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>