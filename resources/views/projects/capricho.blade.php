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
			<p>Elixir & More se dedica día a día a esforzarse por ofrecer tanto a México como al resto del mundo, los mejores tequilas, elixires de agave y destilados de agave, producidos en Jalisco.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">El sitio web desarrollado para Elixir & More refleja la visión y actitud de la marca con un diseño distinto y refrescante al mismo tiempo que brinda información de la marca y sus productos, tips y recetas para sus consumidores.</p>
				<p>Octubre 2015</p>
				<p><i class="fa fa-home"></i> <a href="http://elixirandmore.com/" target="_blank">elixirandmore.com</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/capricho/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/capricho/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/capricho/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/capricho/web_03.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>