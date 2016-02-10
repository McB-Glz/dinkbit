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
			<p>Empresa 100% Mexicana fundada en el año 1983; a lo largo de los años ha llegado a ser empresa líder en México en la importación y distribución de artículos de electrónica con la marca NAKAZAKI. Entre sus productos vende Relojes Despertadores, Micro Componentes de CD MP3 y USB, Grabadoras de CD MP3 y USB, Reproductores de MP4 y MP3, Sistemas Nostálgicos, Televisores, Video Juegos, Reproductores Multimedia, Karaoke, entre otros.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Creamos el sitio de Nakazaki, empresa de electrónicos de bajo costo líder en México. Dentro de ella, los usuarios pueden no sólo conocer el catálogo, sino descargar manuales y drivers para sus dispositivos de manera rápida y sencilla.</p>
				<p>Mayo, 2012</p>
				<p><i class="fa fa-home"></i> <a href="http://nakazaki.com.mx/" target="_blank">nakazaki.com.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/nakazaki/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/nakazaki/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/nakazaki/web_02.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>