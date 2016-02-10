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
			<p>Una nueva alternativa que combina cincuenta años de experiencia en el medio de seguridad en México, una estructura joven, las mejores y más vanguardistas instalaciones del país, todo para brindar asesoría, venta y distribución de todo tipo de cerraduras, candados, bisagras, accesorios y herrajes comerciales, institucionales y residenciales, para todo tipo de puertas, closets, vestidores, cocinas y muebles.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Manejar en papel y pluma un inventario de más de 5,000 productos no es cosa sencilla. Por ello AXA Lock Center necesitaba una solución para poder presentar su catálogo a todos los arquitectos, contratistas o cualquier persona que requiera desde un candado hasta una chapa de alta seguridad con reconocimiento biométrico.</p>
				<p>Diseñamos una aplicación web responsiva capaz de dar solución a sus requerimientos en la que el cliente puede seleccionar los productos de su interés y generar un pedido para que el equipo de AXA se pongan en contacto y entreguen los productos.</p>
				<p>La aplicación cuenta con diferentes precios según el volumen de compras del cliente.</p>
				<p>Enero, 2014</p>
				<p><i class="fa fa-home"></i> <a href="http://www.axalc.com.mx/" target="_blank">axalc.com.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/axa/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/axa/web_02.jpg') }}" class="img-responsive">
			{{-- <img src="{{ url('assets/img/portfolio/axa/web_03.jpg') }}" class="img-responsive"> --}}
			<img src="{{ url('assets/img/portfolio/axa/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/axa/web_05.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/axa/web_06.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>