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
			<p>Banca Mifel, comenzó sus operaciones en junio de 1994 y a la fecha cuenta con 47 oficinas ubicadas dentro del Distrito Federal, Estado de México, Morelos, Monterrey y Guadalajara.<p>
			<p>Forma parte de un grupo financiero sólido, quién se ha distinguido por su calidad y calidez en el servicio. Dentro de su portafolio cuenta con más de 50 productos y servicios para satisfacer las necesidades financieras de sus clientes.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Activaciones</h3>
				<h4>Online</h4>
				<p class="desc">"Ven a conocer nuestra sucursal, y gánate un iPad" era el slogan de la campaña del Banco Mifel. Lo único que tenías que hacer, era imprimir un cupón desde Facebook, llevarlo a la sucursal y cambiarlo por una taza, tomarte una foto, y si tu foto era la favorita de los usuarios, serías acreedor a un iPad. La dinámica generó mucho ruido en redes sociales y miles de usuarios.</p>
				<p>Mayo 2012</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/mifel/media_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/mifel/media_01.jpg') }}" class="img-responsive"
			<img src="{{ url('assets/img/portfolio/mifel/media_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/mifel/media_03.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>