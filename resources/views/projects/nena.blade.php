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
			<p>El Diario de la Nena es un sitio con historias, tipos, secretos, anécdotas y  todo los ue inquiera a las mujeres. Incluye dietas, consejos de como verse y sentirse mejor y más.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">El diario de la nena fue creado con la intención de transmitir confiabilidad, dinamismo e interacción con el usuario. Se utiliza un candado dentro de un corazón como elemento visual principal para así lograr una sensación de protección pero al mismo tiempo al dejarlo abierto se da una sensación de interacción lo que genera apertura entre las fans y la nena. Los colores son dirigidos a un target femenino siendo cálidos y llamativos a la vez. </p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/nena/identidad_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/nena/identidad_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/nena/identidad_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/nena/identidad_04.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">El Diario de La Nena es un medio capaz de escuchar a las mujeres y hablarles de manera personal y directa. La plataforma funciona como un diario en el cual La Nena escribe sus vivencias y consejos, y la comunidad - mediante el blog o las redes sociales - interactúa con La Nena.</p>
				<p>Gracias al crecimiento que tuvo, La Nena ahora cuenta con una columna en uno de los periódicos de mayor circulación en el país, y ha tenido varias apariciones en los medios.</p>
				<p>El Diario de la Nena obtuvo una renovación en julio del 2014 para mejorar la experiencia del usuario aunado a su nueva imagen.</p>
				<p>Junio, 2014</p>
				<p><i class="fa fa-home"></i> <a href="http://eldiariodelanena.com/" target="_blank">eldiariodelanena.com</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/nena/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/nena/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/nena/web_02.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Campañas Digitales</h3>
				<h4>Social Media | Marketing Digital</h4>
				<p class="desc">Por medio de la gestión de las redes sociales, se genera tráfico a su página web donde obtienen mayor número de impresiones, incrementando la interacción con su fuerte comunidad a través de mensajes Call to Action.</p>
				<p>Junio, 2014</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/diariodelanena" target="_blank">/diariodelanena</a></p>
				<p><i class="fa fa-twitter-square"></i> <a href="https://twitter.com/diariodelanena" target="_blank">@diariodelanena</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/nena/digital_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/nena/digital_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/nena/digital_03.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>