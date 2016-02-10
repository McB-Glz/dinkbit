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
			<p>Amor 95.3. la mejor estación de música romántica en español en México. Puedes escuchar sólo éxitos de tus cantantes favoritos. Encuentra noticias musicales y del espectáculo, promociones, regalos, boletos para conciertos, chat, recomendaciones de discos, videos, horóscopos, concursos y mucho más.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Apps</h3>
				<h4>iOS | Android</h4>
				<p class="desc">A través de esta aplicación, llevamos Amor 95.3 a la palma de tus manos. Dentro del app puedes escuchar el stream en vivo, ver el historial de todas las canciones, entrevistas y eventos que han pasado, así como los reportes de tráfico en tiempo real. También puedes ver todos los eventos y canciones próximas.</p>
				<p>Además, puedes leer lo más nuevo desde el portal de Amor 95.3 directamente en el app picando en la sección de Noticias.</p>
				<p>Noviembre, 2013</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/amor/apps_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/amor/apps_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/amor/apps_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/amor/apps_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/amor/apps_05.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<h4>Web Radio Player & Stream | Sitio web</h4>
				<p class="desc">Grupo Acir, Líder Nacional en Radio, buscaba renovar este medio y mostrar que no sólo aún es vigente, sino que evoluciona. Nos encomendamos a la tarea de llevar la experiencia del radio al siguiente nivel, y creamos una plataforma en la que la experiencia dejara de ser sonora; ahora el radio también se puede ver. <p>
				<p>A través de su nuevo player, los radioescuchas de Amor 95.3 pueden ver qué canciones salieron, cuáles vienen, tráfico y clima, actualizaciones de sus locutores; todo en tiempo real. Mediante tuits, likes y shares los usuarios pueden dedicar sus canciones favoritas direcamente desde la plataforma. Rediseñamos su sitio y lo implementamos a una nueva plataforma de CMS.</p>
				<p>Agosto, 2013</p>
				<p><i class="fa fa-home"></i> <a href="http://www.amorfm.mx/" target="_blank">amorfm.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/amor/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/amor/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/amor/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/amor/web_02.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>