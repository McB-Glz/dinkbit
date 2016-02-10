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
			<p>La Administración e Impartición de Justicia en el Distrito Federal corresponde al Tribunal Superior de Justicia del Distrito Federal y demás órganos judiciales, con base en lo que establece la Constitución Política de los Estados Unidos Mexicanos, el Estatuto de Gobierno del Distrito Federal y demás ordenamientos legales aplicables.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Camapañas Digitales</h3>
				<h4>Social Media</h4>
				<p class="desc">Desarrollamos una estrategia integral de comunicación y diseño a través de Facebook, Twitter y YouTube que mostrara la transparencia y compromiso con la información e interacción con la gente, misma que sirve como referencia para ciudadanos y medios de comunicación.</p>
				<p>Agosto, 2011</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.
				facebook.com/TSJDF" target="_blank">/TSJDF</a></p>
				<p><i class="fa fa-twitter-square"></i> <a href="https://www.twitter.com/TSJDF" target="_blank">@TSJDF</a></p>
				<p><i class="fa fa-youtube-play"></i> <a href="https://www.youtube.com/user/TSJDFgobmx" target="_blank">TSJDFgobmx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/tsjdf/media_01.jpg') }}" class="img-responsive">{{-- 
			<img src="{{ url('assets/img/portfolio/tsjdf/media_02.jpg') }}" 
			class="img-responsive"> --}}
			<img src="{{ url('assets/img/portfolio/tsjdf/media_03.jpg') }}" 
			class="img-responsive">
			<img src="{{ url('assets/img/portfolio/tsjdf/media_04.jpg') }}" 
			class="img-responsive">
			<img src="{{ url('assets/img/portfolio/tsjdf/media_05.jpg') }}" 
			class="img-responsive">
		</div>
	</div>
</div>