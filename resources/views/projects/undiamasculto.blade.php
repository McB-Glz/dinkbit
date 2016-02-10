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
			<p>Un día más culto es una comunidad, blog y aplicación enfocadas a proveer a sus miembros y visitantes con información curiosa de interés general.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p>Para esta identidad se  busca crear un sistema visual simplificado, utilizando una tipografía geométrica y usando una diferencia en tonalidades y grosor para separar las palabras y darle peso al concepto de cultura. </p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/undiamasculto/identidad_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/undiamasculto/identidad_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/undiamasculto/identidad_03.png') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Apps</h3>
				<h4><a href="https://itunes.apple.com/mx/app/un-dia-mas-culto/id518474653?ign-mpt=uo6&mt=8" target="_blank">iOS</a> | <a href="https://play.google.com/store/apps/details?id=com.dinkbit.undiamasculto" target="_blank">Android</a> | Nokia</h4>
				<p class="desc">Las aplicaciones desarrolladas para iOS y Android permiten a los usuarios leer nuevos contenidos todos los días que incluyen artículos y publicaciones que pueden ser vistos en orden cronológico o filtrados por las distintas categorías además de contar con una base de datos curiosos que se actualizan periódicamente. La aplicación notifica y recuerda al usuario diariamente entrar a la aplicación y volverse más culto que ayer y menos culto que mañana.</p>
				<p>2013</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/undiamasculto/apps_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/undiamasculto/apps_02.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Se desarrolló el sitio web de un día más culto con el objetivo de no limitar los conocimientos a las aplicaciones móviles si no que cualquier persona con acceso internet pudiera leer los distintos contenidos que ofrece un día más culto de una forma cómoda en un formato mas familiar para los usuarios de internet.</p>
				<p><i class="fa fa-home"></i> <a href="http://undiamasculto.com/" target="_blank">undiamasculto.com</a></p>
				<p>2013</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/undiamasculto/web_01.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Campañas Digitales</h3>
				<h4>Social Media | Marketing Digital</h4>
				<p class="desc">Para Un día más culto abrimos una comunidad en Facebook que mantiene a la comunidad activa participando, comentando y compartiendo el contenidos. Además desarrollamos las aplicaciones móviles para que los seguidores lleven consigo Un día más culto en todo momento.</p>
				<p>2013</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/UnDiaMasCulto" target="_blank">/UnDiaMasCulto</a></p>
				<p><i class="fa fa-twitter-square"></i> <a href="https://twitter.com/undiamasculto" target="_blank">@undiamasculto</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/undiamasculto/media_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/undiamasculto/media_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/undiamasculto/media_03.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>
