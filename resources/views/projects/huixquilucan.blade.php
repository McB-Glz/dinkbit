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
			<p>Huixquilucan es uno de los principales municipios del Estado de México que se encuentra en el poniente de la zona metropolitana. Cuenta con más de 225,000 habitantes y representa una gran aportación a la economía del estado.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Apps</h3>
				<h4><a href="https://play.google.com/store/apps/details?id=com.dinkbit.huixquilucan" target="_blank">Android</a></h4>
				<p class="desc">La aplicacion permite a sus usuarios conocer y obtener información como descripción, horarios, ubicación y demás de lugares que se encuentran dentro del municipio, desde restaurantes hasta lugares de entretenimiento e incluso eventos futuros pudiendo filtrar los lugares por categoría, tipo o buscar por nombre.</p>
				<p>Septiembre 2014</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/huixquilucan/apps_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/huixquilucan/apps_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/huixquilucan/apps_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/huixquilucan/apps_05.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/huixquilucan/apps_04.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>