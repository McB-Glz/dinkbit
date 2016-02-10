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
			<p>m m + s p  arquitectos fue fundado en 2004, dedicados a hacer proyectos  tanto de interiorismo como de edificación hasta  llevarlos a su  realización, pensando siempre en en las necesidades de cada usuario para lograr espacios confortables y atractivos estéticamente.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">En una junta entre los dos equipos nació la idea de hacer un boceto interactivo de su oficina con la información de todos sus desarrollos.</p>
				<p>Tomando como base la filosofía 'fuera de la caja' de mm+sp, creamos - más que un sitio - una experiencia para sus visitantes, bajo un dominio también fuera de lo común.</p>
				<p>Febrero, 2009</p>
				<p><i class="fa fa-home"></i> <a href="http://shamoshpalombo.com/" target="_blank">shamoshpalombo.com</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/shamoshPalombo/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/shamoshPalombo/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/shamoshPalombo/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/shamoshPalombo/web_04.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>