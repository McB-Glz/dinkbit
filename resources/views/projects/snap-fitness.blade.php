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
			<p>Snap Fitness es la franquicia número 1 a nivel mundial en gimnasios 24/7. Rápido, conveniente y accesible entrenamiento. Tiene todo lo necesario para que obtengas resultados.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Camapañas Digitales</h3>
				<h4>Social Media</h4>
				<p class="desc">Para Snap Fitness desarrollamos campañas de Social Media orientadas a los alrededores de las sucursales de la Ciudad de México para atraer a la gente más próxima y probable a acudir a sus gimnasios.</p>
				<p>Agosto 2015</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/SnapFitnessMexico" target="_blank">/SnapFitnessMexico</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/snap/media_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/snap/media_04.jpg') }}" 
			class="img-responsive">
			<img src="{{ url('assets/img/portfolio/snap/media_02.jpg') }}" 
			class="img-responsive">
			<img src="{{ url('assets/img/portfolio/snap/media_03.jpg') }}" 
			class="img-responsive">
			<img src="{{ url('assets/img/portfolio/snap/media_05.jpg') }}" 
			class="img-responsive">
		</div>
	</div>
</div>