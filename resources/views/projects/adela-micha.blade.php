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
			<p>Una de las principales periodistas de México, en los últimos quince años ha conducido y dirigido noticieros y programas periodísticos de su propio diseño: Somos o nos Hacemos de análisis y temas de actualidad, De Revista en Hoy, "Mujeres Trabajando" en el canal ECO, asimismo ha sido presentadora del reality show Big Brother México.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Creamos el nuevo sitio de Adela Micha sobre su imagen totalmente renovada. Dentro de la plataforma existen diferentes blogs, columnas, videos y mucho más. Todo esto lo montamos sobre una plataforma de CMS para poder gestionar los contenidos.</p>
				<p>Enero, 2014</p>
				{{-- <p><i class="fa fa-home"></i> <a href="http://www.adelamicha.com/" target="_blank">adelamicha.com</a></p> --}}
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/adela/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/adela/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/adela/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/adela/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/adela/web_05.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/adela/web_06.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>