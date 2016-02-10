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
			<p>Crespano SGR ofrece soluciones personalizables para proyectos arquitectónicos de alta gama​. Además, apoyan a los mejores arquitectos del mundo a realizar experiencias estéticas y funcionales únicas en cada proyecto, brindando el asesoramiento técnico sin comprometer la visión creativa. Desde el ancho y longitud de las tablas, hasta la selección de qué madera es más adecuada, las soluciones de madera personalizables de Crespano SGR marcan la diferencia.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Crespano SGR, líder en la venta de pisos de madera, requería una página web que permita a cualquier visitante no solo conocer sus productos, si no la gran gama de proyectos en los que han participado y lo satisfechos que están sus clientes. Para ello, hicimos una página web autoadministrable que les permitiera transmitir todo esto de forma sencilla.</p>
				<p>Agosto 2015</p>
				<p><i class="fa fa-home"></i> <a href="http://www.crespanosgr.it/" target="_blank">crespanosgr.it</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/crespano/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/crespano/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/crespano/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/crespano/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/crespano/web_05.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>