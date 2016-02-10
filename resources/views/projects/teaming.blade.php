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
			<p>TEAMING es una iniciativa solidaria para recaudar fondos a través de micro donaciones voluntarias de los colaboradores de las empresas, obteniendo como resultado, una cantidad, que unida se transforma en una valiosa ayuda recurrente.</p>
			<p>Las organizaciones civiles en México realizan un trabajo indispensable para apoyar a las personas vulnerables en nuestra sociedad. Este movimiento nos permite a todos ayudar a organizaciones civiles y ser activos en el cambio y bienestar de nuestra sociedad.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">El sitio web de Teaming se basa en un diseño simple en donde se reflejan los valores de la marca. Gracias a su navegación modular e interactividad, el usuario puede encontrar fácilmente toda la información acerca de Teaming y resolver sus dudas.</p>
				<p>Noviembre 2015</p>
				<p><i class="fa fa-home"></i> <a href="http://teamingmexico.org/" target="_blank">teamingmexico.org</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/teaming/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/teaming/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/teaming/web_02.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>