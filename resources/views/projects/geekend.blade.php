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
			<p>Geekend es una comunidad de Facebook dedicada a los fanáticos de los videojuegos, películas y series. En ella se comparten productos, videos, trucos, tráilers y recomendaciones de lo último en el mundo de los Geeks.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">Para la imagen de geekend utilizamos al pulpo como mascota ya que al tener 8 tentáculos es una animal multitasking y es que los usuarios de estos juguetes suelen estar jugando y realizando muchas tareas al mismo tiempo. El pulpo como la tipografía son pixeleados ya que estos juguetes son personajes de videojuegos.</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/geekend/identidad_06.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/geekend/identidad_07.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/geekend/identidad_05.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/geekend/identidad_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/geekend/identidad_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/geekend/identidad_03.jpg') }}" class="img-responsive">
			
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Campañas Digitales</h3>
				<h4>Social Media | Marketing Digital</h4>
				<p class="desc">Geekened es una comunidad para todo tipo de Geek, donde hay noticias y venta de artículos coleccionables de Minecraft, Pokémon, Plants Vs. Zombies, Cut The Rope y Adventure Time.</p>
				<p>Mayo, 2014</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/GeekEndMx" target="_blank">/GeekEndMx</a></p>
				<p><i class="fa fa-twitter-square"></i> <a href="https://twitter.com/geekend_mx" target="_blank">@geekend_mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/geekend/digital_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/geekend/digital_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/geekend/digital_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/geekend/digital_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/geekend/digital_05.png') }}" class="img-responsive">
		</div>
	</div>
</div>