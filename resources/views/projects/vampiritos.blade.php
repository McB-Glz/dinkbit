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
			<p>Debido al problema de inseguridad en la Ciudad de México y a la imprudencia de conductores bajo el efecto del alcohol surge la idea de un servicio de bar a domicilio.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Conocido por la gran mayoría de los capitalinos, Vampiritos estaba limitado a pedidos vía telefónica. Se desarrolló una plataforma responsiva mediante la cual los clientes podían crear una cuenta, ordenar desde donde estuvieran y guardar sus favoritos, de manera que hacer un pedido fuera cada vez más rápido y sencillo.</p>
				<p>Mayo, 2013</p>
				<p><i class="fa fa-home"></i> <a href="http://vampiritos.com/" target="_blank">vampiritos.com</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/vampiritos/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/vampiritos/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/vampiritos/web_03.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Campañas Digitales</h3>
				<h4>Social Media | Marketing Digital</h4>
				<p class="desc">Dentro de las redes sociales de la marca se activaron diversas promociones exclusivas, así como contenido enfocado al target de Vampiritos. La estrategia rompe con las formalidades y habla a los fans como si fueran un amigo, hablando de temas con los que los jóvenes realmente se pudieran identificar. El resultado fue inmediato, casi duplicando el número de fans en menos de una semana.</p>
				<p>El propósito es convertir a la comunidad en consumidores y generar más pedidos en línea.</p>
				<p>Mayo, 2013</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/vampiritosbar" target="_blank">/vampiritosbar</a></p>
				<p><i class="fa fa-twitter-square"></i> <a href="https://www.twitter.com/vampiritos/" target="_blank">@vampiritos</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/vampiritos/media_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/vampiritos/media_05.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/vampiritos/media_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/vampiritos/media_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/vampiritos/media_03.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>