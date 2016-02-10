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
			<p>E-Fit es líder mundial en el desarrollo y perfeccionamiento de la tecnología EMS en México.</p>
			<p>Este tipo entrenamiento en base a electro estimulación muscular, requiere 3 entrenamientos semanales de tan sólo 20 minutos así podrás trabajar todos los grupos musculares de manera integral, eficaz y segura.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">E-Fit es un concepto innovador en México y transmitir su éxito mundial es una tarea complicada, por ello creamos una página web muy visual en la que presentamos cada uno de los entrenamientos y productos que ofrecen de forma sencilla y atractiva.</p>
				<p>Mayo, 2015</p>
				<p><i class="fa fa-home"></i> <a href="http://efitmexico.com/" target="_blank">efitmexico.com</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/efit/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/efit/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/efit/web_03.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>