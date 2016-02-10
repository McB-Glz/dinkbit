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
			<p>Tamaulipas es uno de los principales estado de la republica que cuenta con una amplia variedad de lugares turísticos, eventos y áreas culturales</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Apps</h3>
				<h4><a href="https://itunes.apple.com/mx/app/tamaulipas/id641737160?mt=8" target="_blank">iOS</a></h4>
				<p class="desc">La aplicación permite a sus usuarios conocer y obtener información como descripción, horarios, ubicación y demás de lugares que se encuentran dentro del estado, desde restaurantes hasta lugares de entretenimiento e incluso eventos futuros pudiendo filtrar los lugares por categoría, tipo o buscar por nombre.</p>
				<p>Mayo 2013</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/tamaulipas/apps_01.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>