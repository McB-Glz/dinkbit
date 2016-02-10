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
			<p>En 1968, con el objeto de prestar servicio a la industria de la construcción, se formó Accesorios Técnicos Para Concreto. Una empresa líder en la fabricación y distribución de accesorios para la construcción. Los productos de ATC son fabricados bajo un riguroso control de calidad poniendo especial cuidado en los materiales así como en los procesos de elaboración.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">El mercado de accesorios para concreto es poco publicitado dentro de la industria de la construcción, para estar a la vanguardia creamos una página con un diseño único que siendo capaz de hablar por sí sola transmite la calidad de los productos que AT Concreto comercializa.</p>
				<p>Al navegar a través de ella, se puede conocer a detalle cada producto y solicitar mayor información para concretar las ventas.</p>
				<p>Noviembre, 2011</p>
				<p><i class="fa fa-home"></i> <a href="http://atconcreto.com/" target="_blank">atconcreto.com</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/atc/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/atc/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/atc/web_03.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>