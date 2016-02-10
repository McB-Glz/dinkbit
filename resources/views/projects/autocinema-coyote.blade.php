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
			<p>Autocinema Coyote es el primer autocinema en la Ciudad de México desde hace aproximadamente 30 años.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Apps</h3>
				<h4><a href="https://itunes.apple.com/mx/app/autocinema-coyote/id519952871?l=en&mt=8" target="_blank">iOS</a> | <a href="https://play.google.com/store/apps/details?id=com.dinkbit.autocinemacoyote" target="_blank">Android</a></h4>
				<p class="desc">Las aplicaciones para iOS y Android permiten a los usuarios ver en tiempo real la cartelera del Autocinema Coyote, revisar sus compras realizadas y adquirir boletos para las distintas funciones a través de su membresía o realizando los pagos a través de la aplicación.</p>
				<p>Febrero 2014</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/coyote/apps_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/coyote/apps_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/coyote/apps_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/coyote/apps_04.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Buscando expandir su mercado, el Autocinema Coyote vino con nosotros para desarrollar su boletería en línea, un sistema que permitiera a los usuarios comprar directamente desde su página.</p>
				<p>Creamos la plataforma y la implementamos en su sitio existente.</p>
				<p>Julio, 2014</p>
				<p><i class="fa fa-home"></i> <a href="http://cartelera.autocinemacoyote.com/" target="_blank">cartelera.autocinemacoyote.com</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/coyote/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/coyote/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/coyote/web_03.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>