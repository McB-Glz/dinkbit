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
			<p>Glatt Stove es un proyecto social que busca eliminar el riesgo de muerte por enfermedades en las vías respiratorias causadas por cocinar con leña o gas mediante un novedoso producto llamado “La Estufita”. La Estufita es práctica, barata y fácil de usar y segura para personas de comunidades rurales.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">Realizamos una papelería utilizando papel reciclado y poca tinta, donde se resalta el logotipo de la empresa y el producto que manejan, logrando que el usuario ligue el nombre con dicho producto. Ya que el producto ayuda al medio ambiente, la salud y la ecología, utilizamos el color verde y café obscuro haciendo para hacer alusión a estos temas.</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/glattStove/identidad_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/glattStove/identidad_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/glattStove/identidad_03.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">El sitio Web de Glatt Stove fue desarrollado con el objetivo de guiar al cliente o a quién visite el sitio buscando conocer la marca o el producto, paso a paso a través del origen, funcionamiento y ventajas que presenta “La Estufita” de Glatt Stove a través de animaciones basadas en Web que avanzan o retroceden mientras el usuario recorre el sitio de arriba hacia abajo y que pueden ser vistas desde cualquier dispositivo.</p>
				<p>Diciembre 2014</p>
				<p><i class="fa fa-home"></i> <a href="http://glattstove.com/" target="_blank">glattstove.com</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/glattStove/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/glattStove/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/glattStove/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/glattStove/web_03.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>