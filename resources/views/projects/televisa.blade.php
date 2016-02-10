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
			<p>Televisa es una de las televisoras mas importantes de nuestro país y líder en transmisión y creación de nuevas experiencias en los distintos eventos deportivos a nivel mundial incluido el mundial de futbol de la FIFA para lo cual se desarrolló la plataforma Fut Social</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Para Televisa Deportes desarrollamos el micrositio social del Mundial Brasil 2014 que incluyó distintas aplicaciones como la Quiniela, Generador de Memes, XI ideal, Ola virtual y Trivia.</p>
				<p>Resultados: En un mes de funcionamiento se contó con la participación de más de 25,000 personas, más de 15,000 XI ideal generados, más de 6,500 memes y miles de usuarios respondiendo la quiniela de cada partido.</p>
				<p>Junio 2014</p>
				{{-- <p><i class="fa fa-home"></i> <a href="#" target="_blank"></a></p> --}}
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/televisa/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/televisa/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/televisa/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/televisa/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/televisa/web_05.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/televisa/web_06.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/televisa/web_06.gif') }}" class="img-responsive img-center">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Multimedia</h3>
				<p class="desc">Para incentivar la participación de los usuarios en la plataforma de fut social durante el Mundial de Brasil 2014, Televisa creó un comercial en televisión en donde se ve cada una de las funcionalidades de la plataforma.</p>
				<p>Julio 2014</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/151711933" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="https://vimeo.com/151711933">F&uacute;tbol Social - Televisa Mundial Brasil 2014 dinkbit</a> from <a href="https://vimeo.com/dinkbit">dinkbit</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
			</div>
		</div>
	</div>
</div>