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
			<h3>#HazTusMaletas</h3>
		</div>
	</div>
	<div class="row section-desc">
		<div class="col-xs-12">
			<p>Air France es una de las aerolíneas más grandes del mundo con presencia en México volando al Distrito Federal y Cancún.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Activaciones</h3>
				<h4>Algo Enorme se Acerca | Activación Online</h4>
				<p class="desc">Para Air France desarrollamos la campaña digital “Algo enorme se acerca” para celebrar la llegada del A380 por primera vez a suelo mexicano (Cancún).</p>
				<p>La campaña incluyó un micrositio en el que se invitaba a los usuarios a participar resolviendo un rompecabezas y a escribir que era lo más grande que les había pasado en un viaje. Los ganadores obtendrían boletos para ir a ver el avión en el Aeropuerto de Cancún.</p>
				<p>Resultados: Más de 1,550 registros. 60,280 menciones de la marca y el A380. 12,669 visitas al sitio. 5,636 interacciones. Mejor percepción de la marca.</p>
				<p>Noviembre, 2013</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/airFrance/activacion_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/airFrance/activacion_02.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Activaciones</h3>
				<h4>Activación Online | Activación Offline</h4>
				<p class="desc">Para celebrar el 14 de febrero, lanzamos una dinámica junto con Air France para mandar a 3 parejas a París. Durante tres días se abrió un registro en línea. Los participantes recibieron un correo con instrucciones para llegar a una ubicación secreta, donde debían presentarse ya con maletas y pasaportes listos.</p>
				<p>Elegimos a las 30 primeras parejas (de una fila que incluía gente que acampó) para participar en una divertida dinámica para descubrir cuánto conocían a su pareja.</p>
				<p>Resultados: Más de 4,300 personas registradas. 7,303 visitas al sitio. Más de 9,100 clicks a los ads. Impacto total de 791,013 personas en cuatro días.</p>
				<p>Febrero, 2014</p><br/>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/airFrance/activacion_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/airFrance/activacion_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/airFrance/activacion_05.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Campañas Digitales</h3>
				<h4>Social Media | Marketing Digital</h4>
				<p class="desc">Gracias el éxito obtenido con KLM, en 2014 arrancamos con Air France México, bajo el concepto 'El cielo es sólo el inicio'. Se promueve la red de destinos Air France de manera bidireccional con la comunidad, es decir, se piden consejos sobre los destinos y también se proporcionan algunos por parte de Air France. Además se habla de los beneficios de la aerolínea y destinos exóticos utilizando #EnElCielo.La estrategia fue tan efectiva que en sólo unos meses el número de fans mexicanos creció de manera exponencial, llegando a estar entre los 15 países con más fans dentro de la página.</p>
				<p>Enero, 2014</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/airfrance" target="_blank">/AirFrance</a></p>
				<p><i class="fa fa-twitter-square"></i> <a href="https://twitter.com/AirFranceMx" target="_blank">@AirFranceMX</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/airFrance/digital_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/airFrance/digital_02.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Multimedia</h3>
				<h4>Vídeo / Case study</h4>
				<p class="desc">El vídeo de la activación online para Air France tenía como propósito explicar la dinámica que se llevó a cabo para enviar a 3 parejas a París con motivo del Día de San Valentín.</p>
				<p>En la edición del contenido multimedia buscamos contar de manera simple y entretenida lo sucedido en la activación para promocionar el caso de éxito en las redes sociales.</p>
				<p>Febrero, 2014</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" width="853" height="480" src="https://www.youtube.com/embed/A5bRncDcgK0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>