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
			<p>KOLESTON®, experto en color, quiere facilitarte la vida para que luzcas bella y radiante cada día, reuniendo un equipo de expertos científicos, estilistas, consultores y diseñadores de moda que te brindarán información útil, tips y consejos para resaltar el color de tu belleza, para que encuentres el tono ideal para ti y logres esa transformación que tanto buscas.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Activaciones</h3>
				<p class="desc">Desarollamos un stand interactivo para Koleston en el cual las mujeres podían escanear el código de barras de algún tinte y 'probar' cómo se les vería. Montamos un sistema con espejos y cámaras para crear una experiencia de realidad aumentada sin igual.</p>
				<p>Septiembre, 2010</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/wella/activacion_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/wella/activacion_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/wella/activacion_03.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>