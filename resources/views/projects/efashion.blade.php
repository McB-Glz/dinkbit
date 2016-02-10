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
			<p>Empresa especializada en el diseño, fabricación y comercialización de ropa de dormir e interior para bebés, niños y toda la familia. Cuentan con licencias de marcas importantes a nivel mundial como Hello Kitty, Badtz-Maru, Chococat, Miffy, Dora la Exploradora, Onix, Mi Villano Favorito, Puma, Real Madrid, Águilas del América entre otras.</p>
		</div>
	</div>
	
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">El logotipo de EFashion, busca proyectar una imagen divertida y a la vez dinámica la cual puede ser amigable visualmente tanto para niños como para adultos, respetando un concepto uniforme de colores y tipografías que sean fácilmente recordables.</p>
				<p>Debido a que la marca es para niños utilizamos colores como el verde azul y rojo que generalmente son los primero colores con los que tienen contacto y suelen relacionar con un concepto positivo.</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/efashion/identidad_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/efashion/identidad_02.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Muchos usuarios deseaban conocer no solo donde podían adquirir todos los productos de efashion, si no todas las marcas y licencias que manejan. Creamos un sitio web sencillo de una sola página responsiva que permite a los usuarios desde cualquier dispositivo conocer más sobre la marca.</p>
				<p>Octubre 2014</p>
				<p><i class="fa fa-home"></i> <a href="http://efashionco.com.mx/" target="_blank">efashionco.com.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/efashion/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/efashion/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/efashion/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/efashion/web_03.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>