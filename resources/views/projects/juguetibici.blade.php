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
			<p>Juguetibici es una de las jugueterías más importantes de México, enfocada en garantizar sus productos y servicios para mantener a sus clientes satisfechos mediante la variedad de productos.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Apps</h3>
				<h4><a href="https://itunes.apple.com/mx/app/juguetibici-osito/id555432683?mt=8" target="_blank">iOS</a></h4>
				<p class="desc">Juguetería con 26 años de experiencia en hacer reír a chicos y grandes. Esperando encontrar una nueva manera de cautivar a niños y padres, Juguetibici buscaba una nueva estrategia a través de medios digitales.</p>
				<p>Tomando como base la ludicidad y diversión, desarrollamos una divertida app para iPhone en la cual los usuarios pueden tomarse una foto y ponerse dentro de uno de los divertidos ositos ilustrados. Al terminar, pueden compartir la foto con otras personas o en sus redes sociales.</p>
				<p>Mayo, 2012</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/juguetibici/app_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/juguetibici/app_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/juguetibici/app_03.jpg') }}" class="img-responsive"
			<img src="{{ url('assets/img/portfolio/juguetibici/app_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/juguetibici/app_06.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/juguetibici/app_07.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>