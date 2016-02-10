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
			<p>9 Round es ​​un gimnasio especializado, dedicado a servir a clientes que quieren un ejercicio único, divertido y que garantice resultados. Tiene presencia en Estados Unidos, México, Nueva Zelanda, Canadá, Australia y Medio Oriente.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Utilizando como base el sitio web oficial de 9 Round, se elaboró una versión del sitio web traducida y tropicalizada a México en la que los usuarios pueden obtener información de las ubicaciones, clases, planes nutricionales y más información sobre 9 Round México.</p>
				<p>Febrero 2015</p>
				<p><i class="fa fa-home"></i> <a href="http://9round.mx/" target="_blank">9round.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/9round/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/9round/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/9round/web_03.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>