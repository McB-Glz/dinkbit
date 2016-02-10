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
			<p>Powerfit es uno de los productos más populares de CV Directo lanzado en el 2015. Se trata de una plataforma vibratoria para hacer ejercicio y estimular los músculos en la comodidad del hogar.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Apps</h3>
				<h4><a href="https://itunes.apple.com/us/app/reto-powerfit/id1067495612?ls=1&mt=8" target="_blank">iOS</a> | <a href="https://play.google.com/store/apps/details?id=com.dinkbit.powerfit&hl=en" target="_blank">Android</a></h4>
				<p class="desc">Se desarrollaron las aplicaciones para iOS y Android que brindan la experiencia del reto Power Fit a los distintos usuarios a través de sus dispositivos móviles pudiendo acceder a la plataforma, ver la rutina y plan nutricional correspondiente de acuerdo a su perfil y día del reto en el que se encuentran.</p>
				<p>Diciembre 2015</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/powerfit/apps_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/powerfit/apps_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/powerfit/apps_03.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Se desarrolló una plataforma web  para el reto Power Fit donde los usuarios pueden registrarse como diferentes tipos de candidato y recibir un plan de entrenamiento de 40 días que consta de rutinas en video alternadas cada día y semana además de un  plan nutricional específico para su perfil. Por último, la plataforma ofrece un espacio de comunidad donde los participantes del reto Power Fit pueden compartir fotografías con el resto de los usuarios de la plataforma.</p>
				<p>Diciembre 2015</p>
				<p><i class="fa fa-home"></i> <a href="http://retopowerfit.mx/" target="_blank">retopowerfit.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/powerfit/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/powerfit/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/powerfit/web_03.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Campañas Digitales</h3>
				<p class="desc">Para promocionar uno de los productos estrella de CV Directo, abrimos la comunidad Powerfit en Facebook y desarrollamos la página <a href="http://retopowerfit.mx/" target="_blank">retopowerfit.mx</a> a través de la cuál los clientes que cuentan con el producto pueden registrarse y acceder al entrenamiento diseñado especialmente para la plataforma con el objetivo de cambiar su vida en 40 días a través del ejercicio y la buena alimentación.</p>
				<p>Diciembre 2015</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/RetoPowerFit" target="_blank">/RetoPowerFit</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/powerfit/digital_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/powerfit/digital_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/powerfit/digital_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/powerfit/digital_04.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>