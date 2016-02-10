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
			<h3>Mandamientos del #HombreFuego</h3>
		</div>
	</div>
	<div class="row section-desc">
		<div class="col-xs-12">
			<p>BeneGastro es una opción saludable dentro de una dieta correcta y un estilo de vida saludable, que puede ser incluido en la dieta de toda la familia.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Activaciones</h3>
				<h4>Online</h4>
				<p class="desc">Porque sólo un #HombreFuego sabe qué hace a un #HombreFuego, BeneGastro encomendó la creación de los Mandamientos del #HombreFuego.</p>
				<p>La dinámica consistió en ingresar a la aplicación Mandamientos del #HombreFuego en la fanpage de BeneGastro, escoger una de las plantillas y personalizarla con un mandamiento en el que se explicara qué hace a un #HombreFuego.Los mandamientos ganadores recibieron un Kit #HombreFuego, con iPods, kits para hacer cerveza artesanal, boletos para el sóccer y fichas de poker.</p>
				<p>Agosto, 2013</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/BenegastroMexico" target="_blank">/BenegastroMexico</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/benegastro/activacion_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/benegastro/activacion_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/benegastro/activacion_04.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Campañas Digitales</h3>
				<h4>Social Media</h4>
				<p class="desc">Para crear awareness y presencia en redes sociales de BeneGastro, el nuevo yogurt de Danone, diseñamos una campaña que se enfocara en el #HombreFuego - el hombre que día a día sufre de acidez provocada por sus malos hábitos alimenticios y agitado estilo de vida. Se fomentó el uso del hashtag #HombreFuego en redes sociales y se invitó a que los usuarios nos dijeran qué los hacía a ellos ser #HombresFuego. Se complementó con diseños de mailing y banners.</p>
				<p>Abril, 2013</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/BenegastroMexico" target="_blank">/BenegastroMexico</a></p>
				<p><i class="fa fa-twitter-square"></i> <a href="https://twitter.com/BeneGastroMX" target="_blank">@BeneGastroMX</a></p>
				<p><i class="fa fa-youtube-play"></i> <a href="https://youtube.com/BenegastroMexico" target="_blank">BenegastroMexico</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/benegastro/media_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/benegastro/media_05.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/benegastro/media_06.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/benegastro/media_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/benegastro/media_01.jpg') }}" 
			class="img-responsive">
			<img src="{{ url('assets/img/portfolio/benegastro/media_03.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>