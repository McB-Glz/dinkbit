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
			<p>Lineas es una marca de ropa para mujeres a precios muy accesibles. Con una fuerte presencia en el D.F. y la República Mexicana, Líneas ofrece una gran variedad de modelos cada semana.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">El sitio web de LINEAS funciona principalmente como un catálogo en donde los productos y sus descripciones aparecen de manera llamativa. Construido sobre un CMS, los contenidos y productos son sencillos de mantener actualizados. Dentro del sitio existe una bolsa de trabajo para todos aquellos interesados.</p>
				<p>Julio 2015</p>
				<p><i class="fa fa-home"></i> <a href="http://lineas.com.mx/" target="_blank">lineas.com.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/lineas/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/lineas/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/lineas/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/lineas/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/lineas/web_05.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Campañas Digitales</h3>
				<h4>Social Media </h4>
				<p class="desc">La marca busca posicionarse en las redes sociales, dar a conocer sus prendas a través de posteos y catálogo, y obtener métricas sobre las prendas más exitosas en redes sociales para poder tener una comparativa en ventas.</p>
				<p>A partir de que iniciamos, Líneas reportó un aumento del 50% en ventas de los modelos promovidos.</p>
				<p>Febrero, 2014</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/LineasMx" target="_blank">/LineasMx</a></p>
				<p><i class="fa fa-pinterest-square"></i> <a href="https://www.pinterest.com/lineasmx/" target="_blank">lineasmx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/lineas/digital_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/lineas/digital_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/lineas/digital_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/lineas/digital_04.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>