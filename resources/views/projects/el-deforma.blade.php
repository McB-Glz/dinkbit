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
			<p>eldeforma.com es un diario satírico cuyo único fin es el entretenimiento. Todos sus contenidos son ficción y no se corresponden con la realidad. Todos los referentes, nombres, marcas o instituciones que aparecen en la web se usan como elementos contextuales, como en cualquier novela o relato de ficción.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Apps</h3>
				<h4><a href="https://itunes.apple.com/mx/app/el-deforma/id720642552?mt=8" target="_blank">iOS</a> | <a href="https://play.google.com/store/apps/details?id=hr.apps.n150671289&hl=es_419" target="_blank">Android</a></h4>
				<p class="desc">La aplicación desarrollada para iOS y Android permite a los millones de lectores del sitio de noticias ficticias una forma simple y cómoda de acceder a los artículos publicados en tiempo real que pueden ser filtrados por categoría o leídos en una lista unificada y recibir notificaciones de nuevos contenidos relevantes </p>
				<p>Abril 2015</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/deforma/apps_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/deforma/apps_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/deforma/apps_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/deforma/apps_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/deforma/apps_05.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>