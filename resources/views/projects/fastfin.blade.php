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
			<p>Es una empresa 100% mexicana, cuya creación tiene como fin el satisfacer las necesidades de préstamos personales dentro del sector laboral. Tienen como misión elevar el nivel de vida de las familias trabajadoras mexicanas a través del otorgamiento de préstamos de una forma fácil, sencilla y sin riesgos económicos ni legales para sus clientes, ofreciendo además una tasa de interés competitiva.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">Rediseñamos la imagen de FastFin, una empresa dedicada a brindar préstamos accesibles a empleados. Basándonos en su filosofía moderna y amigable, creamos un diseño que proyectara ésta a los empleados, y solidez a los empresarios.</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/fastfin/identidad_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/fastfin/identidad_05.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/fastfin/identidad_02.jpg') }}" 
			class="img-responsive">
			<img src="{{ url('assets/img/portfolio/fastfin/identidad_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/fastfin/identidad_01.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Creamos un sitio responsivo y mejoramos la experiencia de usuario en los diversos formularios y formas dentro de la página, haciéndolos más eficientes y amigables.</p>
				<p>Juio, 2013</p>
				<p><i class="fa fa-home"></i> <a href="http://fastfin.com.mx/" target="_blank">fastfin.com.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/fastfin/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/fastfin/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/fastfin/web_02.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Multimedia</h3>
				<h4>Motion Graphics</h4>
				<p class="desc">La animación para Fast Fin se realizó para explicar de forma clara el funcionamiento de esta empresa que se dedica a administrar y otorgar préstamos a empleados de las empresas sin que éstas se preocupen por recibir el pago.</p>
				<p>El reto fue hacer un vídeo que vaya dirigido tanto para los prestamistas como para los empleados.</p>
				<p>Agosto, 2013</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" width="853" height="480" src="https://www.youtube.com/embed/T58dkVZizBI" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>