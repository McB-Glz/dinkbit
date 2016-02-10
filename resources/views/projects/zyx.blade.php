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
			<p>ZYX nace de la integración de disciplinas técnicas y artísticas, resultando en un organismo integral cuyo objetivo es la creación de auténticas expresiones estéticas.</p>
			<p>El origen del nombre se remonta a los conceptos más escenciales del espacio que regidos por geometrías perfectas dan lugar a un símbolo que lleva como significado intrínseco la trascendencia.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">El sitio de ZYX esta basado en un diseño vanguardista, cada una de las secciones refleja los valores de la marca. Gran parte del diseño está enfocado en la parte visual, representado por grandes imagenes y galerías de los desarrollos de ZYX.</p>
				<p>Noviembre 2015</p>
				<p><i class="fa fa-home"></i> <a href="http://zyx.mx/" target="_blank">zyx.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/zyx/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/zyx/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/zyx/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/zyx/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/zyx/web_05.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/zyx/web_06.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>