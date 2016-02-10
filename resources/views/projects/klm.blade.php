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
			<p>KLM es una aerolínea con más de 95 años de historia y con más de 60 años de presencia ininterrumpida en México. Actualmente con un vuelo diario entre la Ciudad de México y Amsterdam.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Activaciones</h3>
				<h4>Santa KLM <small>Activación Online</small></h4>
				<p class="desc">Para Navidad, los fans debían encontrar las 3 preguntas que Santa KLM escondió en los comentarios de publicaciones de ese año. La dinámica consistía en darle like a las preguntas, y al tener las respuestas enviar los datos de la persona por mensaje privado a la cuenta de KLM México. Los 3 primeros en enviar las respuestas correctas fueron los ganadores de un iPad Mini, un iPod Nano o una cámara Canon Powershot.</p>
				<p>Diciembre, 2013</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/klm/activacion_01.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Campañas Digitales</h3>
				<h4>KLM México - Viajes. Experiencias. Historias. <br/><small>Social Media | Marketing Digital</small></h4>
				<p class="desc">KLM es reconocida mundialmente como la mejor aerolínea del mundo en Social Media. En 2014 se realiza la campaña 'Viajes. Experiencias. Historias.' en la que se busca conectar a los fans con todos los destinos KLM; se habla de la historia de la aerolínea y se busca que la comunidad de avionófilos sea aún más participativa mediante preguntas para expertos y fanáticos de la aviación.</p>
				<p>Enero, 2014</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/KLM.Mexico" target="_blank">/KLM.Mexico</a></p>
				<p><i class="fa fa-twitter-square"></i> <a href="https://www.twitter.com/KLM_MX/" target="_blank">@KLM_MX</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/klm/digital_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/klm/digital_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/klm/digital_01.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Multimedia</h3>
				<p class="desc">Para festejar los 95 años de KLM consentimos a los pasajeros del vuelo México-Ámsterdam del 7 de octubre del 2014 con un trato especial, los transportamos a través de la historia de KLM e hicimos de su viaje una experiencia única.</p>
				<p>Octubre 2014</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" width="853" height="480" src="https://www.youtube.com/embed/wysUg1OklWQ" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>