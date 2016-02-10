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
			<p>Linotex busca, no solamente crear diseño y funcionalidad en el textil, sino también una mancuerna entre proveedor y cliente. Esto permite alcanzar resultados óptimos, únicos y de calidad ofreciendo venta y distribución de telas para confección y decoración, catálogo de dibujos de línea, desarrollo de proyectos de diseño para estampado, servicio de decoración para hotelería e interiorismo y servicios de cortinería, tapicería y blancos.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Linotex es una fábrica de textil, se diseñó la página web para que fuera responsiva (apta para verse en teléfono móvil). Asimismo para la comodidad de los usuarios, se hizo one-page site de modo que toda la información sea accesible a primera instancia.</p>
				<p>Para sus vendedores, se programó un sistema para utilizar y mostrar el catálogo a los clientes desde la página.</p>
				<p>Mayo, 2014</p>
				<p><i class="fa fa-home"></i> <a href="http://linotex.com.mx/" target="_blank">linotex.com.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/linotex/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/linotex/web_02.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>