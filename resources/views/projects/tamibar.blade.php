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
			<p>Tamibar es la distribuidora exclusiva en la República Mexicana de la empresa israelí Strauss Water, la cual es líder en el ramo de purificación de agua con luz ultravioleta y carbón activado utilizando tecnología de punta con certificación del ISO 9002 cumpliendo con los estándares internacionales más estrictos de calidad.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">El sitio web de Tamibar se basa en un diseño simple, limpio y puro que permite transmitir además de los valores de la marca la información y especificaciones técnicas de sus productos.</p>
				<p>Agosto 2015</p>
				<p><i class="fa fa-home"></i> <a href="http://tamibar.com/" target="_blank">tamibar.com</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/tamibar/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/tamibar/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/tamibar/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/tamibar/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/tamibar/web_05.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>