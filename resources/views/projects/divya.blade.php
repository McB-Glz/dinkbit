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
			<p>Divya es una empresa dedicada al diseño de imagen. Cuentan con un servicio de alta calidad de depilación con hilo de manera express en las principales plazas de México. Además tiene a la venta cremas faciales y corporales, maquillajes, sueros y productos de belleza de alta tecnología.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">Para el diseño del concepto de Divya nos inspiramos en la mujer, en lo distinta que es cada una de ellas y en las diferentes facetas y tonalidades de su personalidad únicas y hermosas en su propio estilo, por eso elegimos utilizar una gama de colores que van desde amarrillo hasta el verde formando un círculo cromático perfecto que se refleja en la tipografía del logo en donde todo termina resumiéndose en blanco y negro.</p>
				<p>Junio 2013</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/divya/identidad_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/divya/identidad_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/divya/identidad_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/divya/identidad_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/divya/identidad_05.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/divya/identidad_06.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">El sitio web desarrollado para Divya se basa en un diseño limpio y minimalista al igual que la imagen de la marca y busca transmitir a los clientes la información importante sobre la marca como los servicios que ofrecen y especialmente las ubicaciones donde se encuentran, cada uno mostrando su ubicación en un mapa interactivo.</p>
				<p>Agosto, 2013</p>
				<p><i class="fa fa-home"></i> <a href="https://divya.com.mx/" target="_blank">divya.com.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/divya/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/divya/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/divya/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/divya/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/divya/web_05.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/divya/web_06.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Campañas Digitales</h3>
				<h4>Social Media | Marketing Digital</h4>
				<p class="desc">Divya buscaba audiencia en redes sociales para anunciar sus diferentes sucursales y presentar sus productos de belleza. La campaña digital se centra en mencionar los beneficios de este tipo de depilación y destacar las ventajas de sus productos, así como ofrecer promociones para incrementar las ventas tanto de servicios como de productos.</p>
				<p>Agosto, 2013</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/divyamx" target="_blank">/divyamx</a></p>
				<p><i class="fa fa-twitter-square"></i> <a href="https://twitter.com/divyamx" target="_blank">@divyamx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/divya/digital_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/divya/digital_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/divya/digital_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/divya/digital_04.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>