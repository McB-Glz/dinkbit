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
			<p>Goyescas es la línea de pijamas diseñada y pensada en exclusiva para la mujer más tradicional y conservadora, con el colorido y calidad que ella requiere, en materiales que aportan elegancia y comodidad en todo momento desde 1948.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">“Menos es más”, para dar identidad a esta marca decidimos crear y transmitir un mensaje de comodidad, simpleza, elegancia, limpieza y sencillez. El logotipo busca construir un ambiente de paz el cual invita a cualquier persona que lo vea a tener un momento de relajación.</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/goyescas/identidad_05.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/goyescas/identidad_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/goyescas/identidad_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/goyescas/identidad_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/goyescas/identidad_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/goyescas/identidad_06.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/goyescas/identidad_07.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/goyescas/identidad_09.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>