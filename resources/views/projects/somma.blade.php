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
			<p>Somma es un grupo de médicos especialistas en Cirugía Plástica, Estética y Reconstructiva, con un entrenamiento basado en años de práctica hospitalaria tanto en México como en el extranjero. Somma es una organización que esta certificada por International Society of Aesthetic Plastic Surgery y American College of surgeons.</p>
			<p>Somma cuenta con diferentes especialidades para cada necesidad. Desde las especialidades más sencillas hasta las más complejas, cada una tiene una calidad excepcional que logra excelentes resultados.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">Para la construcción de la identidad corporativa de Somma, quisimos reunir nuestros esfuerzos para hacer énfasis en crear una marca con un logotipo que hable por sí mismo, resaltando al grupo de especialistas médicos en cirugía plástica involucrados. Para lograrlo, plasmamos una silueta de una mujer dentro de la tipografía, buscando transmitir un sentimiento de perfección, elegancia, compromiso y confianza hacia los pacientes, la tipografía es sencilla en su diseño, mandando un mensaje de limpieza, profesionalismo y sencillez a la hora de trabajar.</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/somma/identidad_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/somma/identidad_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/somma/identidad_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/somma/identidad_01.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">La página de Somma tiene la intención de presentar los perfiles de sus doctores del su grupo especializado. Asimismo contiene la información de las diferentes especialidades que ofrecen y las fotografías de su clínica. La página es responsiva, lo que significa que se puede ver en aparatos móviles.</p>
				<p>Febrero, 2014</p>
				<p><i class="fa fa-home"></i> <a href="http://somma.mx/" target="_blank">somma.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/somma/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/somma/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/somma/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/somma/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/somma/web_05.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>