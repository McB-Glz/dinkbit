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
			<p>Empresa dedicada a la renta de cajas de depósito y resguardo de Valores. Cuenta con las mejores y más sofisticadas instalaciones y tecnología en el país, protegidas bajo las más estrictas normas de seguridad internacional.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">El principal objetivo con esta marca era crear un lazo de seguridad y confianza con el cliente, por lo que se utilizan colores que transmiten esa seriedad y la confianza utilizando figuras  cerradas, estructurada y geométricas. </p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/strongmax/identidad_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/strongmax/identidad_02.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Multimedia</h3>
				<h4>Motion Graphics</h4>
				<p class="desc">La animación de Strong Max tenía como propósito promocionar el servicio que ofrece por medio de datos importantes acerca de la seguridad de las cajas y los beneficios de las mismas. El tono estaba dirigido a personas con responsabilidades familiares.</p>
				<p>Enero, 2014</p>
				<p><i class="fa fa-home"></i> <a href="http://www.strongmax.com.mx/" target="_blank">strongmax.com.mx</a></p>
				<p>La segunda animación de Strong Max estaba dirigida a las personas que ya habían decidido contar con los servicios de la empresa. Por lo que se les entregó un paso a paso para que el procedimiento del acceso a las áreas privadas fuera fácil de entender.</p>
				<p>Marzo, 2014</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/v65xv4kB2LA" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>