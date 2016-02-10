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
			<p>FastGas proporciona beneficios de costo y ambientales de gas natural en la Republica Mexicana a clientes que aún no son atendidos por una tubería de gas natural.<p>
			<p>La compañía fue fundada en 2013 y comenzó a entregar GNC en Julio de 2014. Los clientes de FastGas pueden ahorrar en combustible, mantenimiento y emisiones mediante la conversión a gas natural de diesel o gas LP. FastGas también puede construir instalaciones de llenado en la planta del cliente.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">El diseño y desarrollo del sitio web informativo de FastGas busca mostrar el profesionalismo y alcance de la marca manteniendo un estilo minimalista, moderno y limpio incluyendo toda la información útil para cada uno de sus distintos clientes potenciales.</p>
				<p>Marzo 2015</p>
				<p><i class="fa fa-home"></i> <a href="http://fastgas.mx/" target="_blank">fastgas.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/fastGas/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/fastGas/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/fastGas/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/fastGas/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/fastGas/web_05.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>