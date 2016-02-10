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
			<p>Plataforma creada exclusivamente para la CJM. </p>
			<p>Shuk es un mercado virtual en donde todos los usuarios pueden publicar ofertas de productos y/o servicios y ser contactados mediante el inbox de Facebook.<p>
			<p>Cuenta con altos filtros de seguridad, integración de Facebook Login y comercialización de Banners (Espacios publicitarios).</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">La identidad de este proyecto fue creada al buscar la forma de posicionar el nombre del proyecto cómo algo sencillo de recordar, moderno, novedoso, imponente y simple a la vez, para así crear posicionamiento de marca que más tarde involucraría estar en otras plataformas y crear el sitio web. Se da importancia central en reflejar seriedad y confianza, así como buscar que sea visualmente atractivo para un target de personas de todo tipo y edades que son usuarios socialmente activos en tecnología y buscan crecimiento en las redes sociales.</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/shuk/identidad_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/shuk/identidad_02.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Tomando en cuenta la base y la inercia del grupo de Facebook original se desarrolló una plataforma web altamente integrada con Facebook y con el grupo de Shuk que permite a los usuarios publicar productos o servicios categorizando y agregando mayor detalle a la descripción de su publicación que luego puede publicarse con 2 botones directamente al grupo de Facebook. Al mismo tiempo permite a los demás usuarios buscar o filtrar las publicaciones para encontrar lo que buscan de manera más fácil que si se buscara a través de Facebook y marcar sus publicaciones como favoritas.</p>
				<p>Agosto 2015</p>
				<p><i class="fa fa-home"></i> <a href="http://shuk.mx/" target="_blank">shuk.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/shuk/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/shuk/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/shuk/web_03.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>