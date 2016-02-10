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
			<p>106.5 Mix, es la estación por excelencia para escuchar los éxitos del momento en inglés, todos los sencillos de los 80`s, 90´s y actuales en México.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Apps</h3>
				<h4>iOS, Android</h4>
				<p class="desc">A través de esta aplicación, llevamos 106.5 Mix a la palma de tus manos. Dentro del app puedes escuchar el stream en vivo, ver el historial de todas las canciones, entrevistas y eventos que han pasado, así como los reportes de tráfico en tiempo real. También puedes ver todos los eventos y canciones próximas.</p>
				<p>Además, puedes leer lo más nuevo desde el portal de Mix directamente en el app picando en la sección de Noticias.</p>
				<p>Noviembre, 2013</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/grupoAcir/apps_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/grupoAcir/apps_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/grupoAcir/apps_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/grupoAcir/apps_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/grupoAcir/apps_05.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<h4>Web Radio Player & Stream | Sitio web</h4>
				<p class="desc">Grupo Acir, Líder Nacional en Radio, buscaba renovar este medio y mostrar que no sólo aún es vigente, sino que evoluciona. Nos encomendamos a la tarea de llevar la experiencia del radio al siguiente nivel, y creamos una plataforma en la que la experiencia dejara de ser sonora; ahora el radio también se puede ver. <p>
				<p>A través de su nuevo player, los radioescuchas de 106.5 Mix pueden ver qué canciones salieron, cuáles vienen, tráfico y clima, actualizaciones de sus locutores; todo en tiempo real. Mediante tuits, likes y shares los usuarios pueden dedicar sus canciones favoritas direcamente desde la plataforma. Rediseñamos su sitio y lo implementamos a una nueva plataforma de CMS.</p>
				<p>Agosto, 2013</p>
				<p><i class="fa fa-home"></i> <a href="http://mixfm.mx/" target="_blank">mixfm.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/grupoAcir/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/grupoAcir/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/grupoAcir/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/grupoAcir/web_04.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Multimedia</h3>
				<h4>Idea Creativa</h4>
				<p class="desc">Se realizó la idea creativa para la nueva imagen de Mix 106.5 en la que se buscó plasmar la importancia de los clásicos en inglés en todos los mexicanos que escuchan la estación.</p>
				<p>Agosto, 2013</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/75745247" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="https://vimeo.com/75745247">*SPOT. MIX FM 106.5. SOFIA SANCHEZ NAVARRO.</a> from <a href="https://vimeo.com/hazlocontruco">*TRUCO @hazlocontruco</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
			</div>
		</div>
	</div>
</div>