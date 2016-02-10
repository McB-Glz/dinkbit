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
			<p>Conair, empresa de renombre mundial en la venta de productos para el cuidado personal, salud y belleza para profesionales y consumidores individuales, fue fundada en 1959 y desde entonces se ha expandido en todo el mundo.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Camapañas Digitales</h3>
				<h4>Social Media | Marketing digital</h4>
				<p class="desc">Para Conair se realizó una campaña de redes sociales para crecer su comunidad y mejorar el branding aumentando el alcance de sus publicaciones mediante anuncios en Facebook.</p>
				<p>Noviembre, 2013</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/conairmexico" target="_blank">/conairmexico</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/conair/digital_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/conair/digital_02.jpg') }}" 
			class="img-responsive">
			<img src="{{ url('assets/img/portfolio/conair/digital_03.jpg') }}" 
			class="img-responsive">
			<img src="{{ url('assets/img/portfolio/conair/digital_04.jpg') }}" 
			class="img-responsive">
			<img src="{{ url('assets/img/portfolio/conair/digital_05.jpg') }}" 
			class="img-responsive">
			<img src="{{ url('assets/img/portfolio/conair/digital_06.jpg') }}" 
			class="img-responsive">
			<img src="{{ url('assets/img/portfolio/conair/digital_07.jpg') }}" 
			class="img-responsive">
		</div>
	</div>
</div>