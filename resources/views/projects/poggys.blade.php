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
			<p>Poggy’s es un concepto desarrollado para niños por Grupo Hiilda, en el que ha designado a un equipo especializado para el diseño y búsqueda de productos en el ramo. Estos, a su vez, han generado alianzas estratégicas con compañías internacionales, concibiendo productos de vanguardia y alta calidad.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">En Poggy’s venden todo tipo de dulces y juguetes novedosos, respaldados por las licencias más reconocidas a nivel mundial. Buscando ampliar su mercado, Poggy's necesitaba un catálogo para mostrar sus productos de forma interactiva.</p>
				<p>Desarrollamos un catálogo interactivo totalmente autoadministrable, destacando los diseños y virtudes de cada producto.</p>
				<p>Noviembre, 2012</p>
				<p><i class="fa fa-home"></i> <a href="http://www.poggys.tv/" target="_blank">poggys.tv</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/poggys/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/poggys/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/poggys/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/poggys/web_04.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>