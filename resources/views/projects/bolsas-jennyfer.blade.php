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
			<p>Bolsas Jennyfer es un fabricante y distribuidor directo de todo tipo de bolsas para dama y juvenil en múltiples materiales, además de mochilas, bolsas de playa, lapiceras, loncheras, carteras para dama y caballero, portafolios, porta laptops, equipaje, cinturones, gorras y pañaleras.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Camapañas Digitales</h3>
				<h4>Social Media</h4>
				<p class="desc">Para Bolsas Jennyfer desarrollamos una estrategia de venta en línea promocionando sus productos a través de Facebook. Con más de medio millón de fans, nuestro trabajo es convertir likes en ventas mediante campañas segmentas y de remarketing, además de promociones semanales.</p>
				<p>Julio 2015</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/bolsasjennyfer/" target="_blank">/bolsasjennyfer</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/jennyfer/digital_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/jennyfer/digital_03.jpg') }}" 
			class="img-responsive">
			<img src="{{ url('assets/img/portfolio/jennyfer/digital_04.jpg') }}" 
			class="img-responsive">
			<img src="{{ url('assets/img/portfolio/jennyfer/digital_05.jpg') }}" 
			class="img-responsive">
		</div>
	</div>
</div>