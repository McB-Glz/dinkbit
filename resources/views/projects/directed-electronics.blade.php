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
			<p>Directed Electronics de México, es el representante exclusivo de Directed Electronics Inc. para la República Mexicana, desde 1988, es la primer y más grande compañía del país en ofrecer sistemas de seguridad automotriz a control remoto y un creciente proveedor de Car Audio, Video Automotriz y Sensores de Reversa. Entre sus marcas se encuentran: Viper, Clifford, Hornet, Viper Video, Orion Audio, Retro Zenzor y Mobile Solutions.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Representante exclusivo de Directed Electronics Inc. para la República Mexicana desde 1988. Líder en ventas de sistemas de seguridad a control remoto, audio y video automotriz.</p>
				<p>D.E.M. cuenta con más de 500 distribuidores en el país, pero al querer crecer su mercado, requirió la creación de un nuevo canal de ventas a través de internet, mediante el cual estuviera disponible a todas horas y en cada rincón del país.</p>
				<p>Se construyó y diseñó una solución integral que permitiera a los usuarios ver el catálogo y comprar inmediatamente a través de la web para recibir el producto en su domicilio.</p>
				<p>Julio, 2010</p>
				<p><i class="fa fa-home"></i> <a href="http://directed.com.mx/" target="_blank">directed.com.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/directed/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/directed/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/directed/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/directed/web_02.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>