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
			<p>Sorpresas en tu puerta cada mes. Únete - Recibe - Descubre – Gana.
			A través de una caja con suscripción mensual, la samplería envía muestras de los productos trendy del momento para que los pruebes y si te gustan, los puedas adquirir en su tienda en línea.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">El concepto del branding de La Samplería surge de la palabra “Sample” que en inglés significa “muestra” más la terminación “ría” que actualmente hace referencia a la experiencia sobre un tema en especial. “Los expertos en muestras”.</p>
				<p>Para el diseño del logotipo escogimos una caja simulando el proceso sorpresa de cada uno de los envíos, esta es de color gris por fuera para evitar levantar sospechas y azul por dentro simbolizando un regalo inesperado.</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/sampleria/identidad_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/sampleria/identidad_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/sampleria/identidad_03.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">La Samplería es una plataforma de suscripción mensual mediante la cual el usuario recibe samples de los mejores productos en el mercado a la puerta de su casa.</p>
				<p>La campaña incluyó un ecosistema de valor, integrado por un sitio web responsivo con plataforma de pagos recurrentes y un magazine, dentro del cual se el equipo editorial de La Samplería genera contenido para fans y suscriptores.</p>
				<p>Junio, 2013</p>
				<p><i class="fa fa-home"></i> <a href="https://lasampleria.com/" target="_blank">lasampleria.com</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/sampleria/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/sampleria/web_02.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Campañas Digitales</h3>
				<h4>Social Media</h4>
				<p class="desc">La Samplería es una plataforma de suscripción mensual mediante la cual el usuario recibe samples de los mejores productos en el mercado a la puerta de su casa.</p>
				<p>Facebook y Twitter presentan las cajas de cada mes, tips sobre cómo utilizar los productos y promueven la Magazine para generar más suscriptores, mientras que Instagram y Pinterest publican artículos sobre arquitectura, arte y diseño, generando confianza en la marca como algo trendy.</p>
				<p>Mayo, 2013</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/lasampleria" target="_blank">/lasampleria</a></p>
				<p><i class="fa fa-twitter-square"></i> <a href="https://twitter.com/lasampleria" target="_blank">@lasampleria</a></p>
				<p><i class="fa fa-pinterest-square"></i> <a href="https://www.pinterest.com/lasampleria/" target="_blank">lasampleria</a></p>
				<p><i class="fa fa-instagram"></i> <a href="https://instagram.com/lasampleria" target="_blank">@lasampleria</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/sampleria/digital_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/sampleria/digital_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/sampleria/digital_03.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Multimedia</h3>
				<h4>Motion Graphics</h4>
				<p class="desc">La animación para La Samplería funcionó como campaña inicial de lanzamiento de la marca. Se buscaba explicar de forma casual el proceso para formar parte de esta comunidad de “samples” con un tono amigable del “know-how”.</p>
				<p>Mayo, 2013</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" width="853" height="480" src="https://www.youtube.com/embed/LMQFu0QzIlU" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>