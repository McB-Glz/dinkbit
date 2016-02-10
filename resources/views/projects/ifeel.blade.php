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
			<p>ifeel te ayuda a encontrar la experiencia perfecta y a disfrutar de tu ciudad. Elige el mood en el que estés y tu ubicación para filtrar tu búsqueda y llega al lugar ideal para ti, explora los lugares más adecuados a tu mood, busca los más cercanos, encuentra el teléfono para hacer una reservación entre muchas otras cosas. Con ifeel deja que tu corazón te guíe a dónde quiere ir.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">Quisimos crear un lazo emocional entre las personas y esta app,basándonos en que lo único que nadie puede rebatir son los sentimientos, diseñamos un logo amigable con un nombre pegajoso “ifeel” de alguna manera también como resultado de la tecnología creada por Steve Jobs… iPod,iPad…iFeel buscando una herramienta tecnológica que a diferencia de todas las demás nos conecte con nuestro corazón y nos haga sacar nuestros colores más auténticos.</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/ifeel/identidad_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/identidad_06.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/identidad_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/identidad_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/identidad_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/identidad_05.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Apps</h3>
				<h4><a href="https://itunes.apple.com/mx/app/ifeel/id950035514?mt=8" target="_blank">iOS</a> | <a href="https://play.google.com/store/apps/details?id=com.ifeel.app&hl=en" target="_blank">Android</a></h4>
				<p class="desc">La aplicación desarrollada para iOS y Android permite a los usuarios encontrar un lugar o una actividad basados en su estado de ánimo del momento brindando descripción de los lugares o actividades, horarios, ubicación e incluso reseñas y opiniones de otros usuarios.</p>
				<p>Julio 2015</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/ifeel/app_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/app_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/app_03.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Ifeel es la plataforma que te ayuda a encontrar el mejor plan de recreación de acuerdo con el estado de ánimo que te encuentres. Es una base de datos de establecimientos en la Ciudad de México catalogados por sus características para ser compatibles con el mood del usuario.</p>
				<p>Agosto, 2014</p>
				<p><i class="fa fa-home"></i> <a href="https://ifeel.mx/" target="_blank">ifeel.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/ifeel/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/web_05.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Campañas Digitales</h3>
				<p class="desc">Para ifeel creamos una comunidad en Facebook mediante la cual invitamos los usuarios a conocer la plataforma única en su categoría. La misión fue mostrar lo fácil y práctico que es encontrar el tipo de lugar o actividad que estabas buscando en segundos.</p>
				<p>Julio 2015</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/ifeelmx" target="_blank">/ifeelmx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/ifeel/media_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/media_02.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Multimedia</h3>
				<h4>Motion Graphics</h4>
				<p class="desc">El vídeo de ifeel se realizó por medio de fotografías y edición post digital. Elegimos diferentes experiencias que recomienda ifeel para demostrar el funcionamiento de la plataforma. Éste se utilizó para la campaña de lanzamiento.</p>
				<p>Junio 2014</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			 <div class="embed-responsive embed-responsive-16by9">
			 	<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/98689169" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="https://vimeo.com/98689169">ifeel</a> from <a href="https://vimeo.com/ifeelmx">ifeel</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
			 </div>
			
		</div>
	</div>
</div>