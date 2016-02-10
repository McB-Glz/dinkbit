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
			<p>Siempre 88.9 “Tráfico y Clima cada 15 Minutos”, es una emisora de concepto mixto con una programación de contenido y musical. Su programación musical transmite una excelente selección de canciones en español de los 80’s para acompañar al auditorio a lo largo del día.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">El concepto de 88.9 busca ofrecer al público una cobertura completa entre el entretenimiento musical y el contenido informativo, es por esto que decidimos utilizar la palabra “Siempre”. Con colores llamativos y al fondo instrumentos y artefactos musicales que dan la impresión de estar en movimiento generando un ciclo que no desaparece es decir, SIEMPRE están presentes.</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/siempre/identidad_01.png') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/siempre/identidad_02.png') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/siempre/identidad_03.png') }}" class="img-responsive">
		</div>
	</div> 
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Apps</h3>
				<h4>iOS, Android</h4>
				<p class="desc">A través de esta aplicación, llevamos Siempre 88.9 a la palma de tus manos. Dentro del app puedes escuchar el stream en vivo, ver el historial de todas las canciones, entrevistas y eventos que han pasado, así como los reportes de tráfico en tiempo real. También puedes ver todos los eventos y canciones próximas.</p>
				<p>Además, puedes leer lo más nuevo desde el portal de Siempre 88.9 directamente en el app picando en la sección de Noticias.</p>
				<p>Noviembre, 2013</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/siempre/apps_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/siempre/apps_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/siempre/apps_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/siempre/apps_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/siempre/apps_05.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Recreamos la estación por completo. Bajo el concepto de 'estación híbrida' nace Siempre 88.9, enfocada al pop en español de la década de los 80s. Creamos el nombre, slogan, colores, logotipo y manuales de identidad gráfica. Después creamos un sitio responsivo adaptado a una plataforma de CMS, así como perfiles en redes sociales.</p>
				<p>Julio, 2013</p>
				<p><i class="fa fa-home"></i> <a href="http://siempre889.com/" target="_blank">siempre889.com</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/siempre/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/siempre/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/siempre/web_03.jpg') }}" class="img-responsive">
		</div>
	</div>  
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Multimedia</h3>
				<h4>Idea Creativa</h4>
				<p class="desc">La nueva imagen de Siempre 88.9 buscaba promocionar la hora de las noticias matutina con sus locutores más populares. Se hizo una idea creativa para el comercial de T.V. que mostraba la personalidad divertida de ambos mientras se encontraban “cerca” de sus radioescuchas.</p>
				<p>Agosto, 2013</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/75745108" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="https://vimeo.com/75745108">*SPOT. SIEMPRE 88.9. I&Ntilde;AKI MANERO/ALEJANDRO VILLALVAZO</a> from <a href="https://vimeo.com/hazlocontruco">*TRUCO @hazlocontruco</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
			</div>
		</div>
	</div>
</div>