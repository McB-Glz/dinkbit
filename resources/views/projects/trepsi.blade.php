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
			<p>Durante 25 años Trepsi se ha consolidado en el mercado mexicano como el centro de alternativas para niños número uno en el país, ofreciendo variadas alternativas para que desde el nacimiento hasta los seis años los niños tengan un espacio que favorezca su óptimo desarrollo, además contribuye a fortalecer el vinculo con sus padres, y llegado el momento, a la autonomía que posibilita la exitosa separación.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Creamos una página web divertida y con muchos colores que sea atractiva para los padres y al mismo tiempo les dé confianza para confiar a Trepsi el mayor tesoro de su vida, sus hijos.</p>
				<p>Julio, 2011</p>
				{{-- <p><i class="fa fa-home"></i> <a href="http://www.trepsi.com.mx/" target="_blank">trepsi.com.mx</a></p> --}}
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/trepsi/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/trepsi/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/trepsi/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/trepsi/web_04.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>