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
			<p>Seiko es una marca de relojería japonesa, fundada en 1881 por Kintaro Hattori. Seiko es una auténtica manufactura relojera, dado que sus relojes, incluso los de gamas más básicas, cuentan con mecanismos de factura propia.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Fundada en 1881, Seiko es una de las empresas de mayor prestigio en cuanto a relojes se refiere. A nivel mundial es una marca de gran renombre y por lo mismo diseñamos una página web regional acorde a la imagen del sitio global.</p>
				<p>En la página de México, creamos un sistema automatizado para la gestión de los modelos que específicamente se comercializan en nuestro país.</p>
				<p>Marzo, 2013</p>
				<p><i class="fa fa-home"></i> <a href="http://seiko.com.mx/" target="_blank">seiko.com.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/seiko/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/seiko/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/seiko/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/seiko/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/seiko/web_05.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Campañas Digitales</h3>
				<h4>Social Media | Marketing Digital</h4>
				<p class="desc">Seiko México, único representante nacional de la prestigiosa marca de relojes japoneses con presencia mundial desde 1881, necesitaba un plan integral para aumentar su presencia en medios digitales.</p>
				<p>Creamos un plan de acción en Social Media donde desarrollamos un brand voice juvenil, amable y divertido, pero que a la vez generara nostalgia en los usuarios y fanáticos mayores. De igual manera, renovamos la página web conforme a la imagen y plataforma de Seiko Worldwide.</p>
				<p>Octubre, 2012</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/SeikoMexico" target="_blank">/SeikoMexico</a></p>
				<p><i class="fa fa-pinterest-square"></i> <a href="https://www.pinterest.com/seikomexico/" target="_blank">seikomexico</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/seiko/digital_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/seiko/digital_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/seiko/digital_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/seiko/digital_05.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>