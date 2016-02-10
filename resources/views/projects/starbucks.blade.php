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
			<p>Starbucks es la cafetería líder en su ramo con más de 10 años de presencia en el país y más de 5,000 sucursales. Debido a su gran crecimiento y visión sobre potenciales mercados, decidió crear puntos de venta móviles para poder ofrecer sus productos fuera de las cafeterías.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Apps</h3>
				<h4>Desarrollo exclusivo</h4>
				<p class="desc">Diseñamos y programamos de una aplicación privada para iPad que actuara como PoS (Punto de Venta) y permitiera vender productos desde la plataforma, así como llevar un registro de productos, entradas y salidas de dinero dependiendo del método de pago. La plataforma fue montada en distintos bancos de la Ciudad de México, y gracias a ella la campaña generó un éxito mucho mayor al esperado.</p>
				<p>Agosto, 2011</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/starbucks/apps_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/starbucks/apps_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/starbucks/apps_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/starbucks/apps_04.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>