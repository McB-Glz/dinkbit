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
			<p>El Gastómetro es una aplicación de Grupo Ainbinder, agente de seguros y asesoría financiera. Muchas personas creen que no necesitan un fondo de inversión, o creen que es muy caro. A través de una divertida aplicación, podrás saber cuánto gastas en cosas irrelevantes, y al final entender cuánto podrías ahorrar si lo invirtieran con Grupo Ainbinder.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Activaciones</h3>
				<h4>Online</h4>
				<p class="desc">El Gastómetro es una aplicación de Grupo Ainbinder, agente de seguros y asesoría financiera. Muchas personas creemos que no necesitamos un fondo de inversión, o creemos que es muy caro. A través de una divertida aplicación, mostramos a los usuarios cuánto gastan en cosas irrelevantes, y al final les mostramos cuánto podrían ahorrar si lo invirtieran con Grupo Ainbinder.</p>
				<p>Mayo, 2011</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/gastometro/activacion_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/gastometro/activacion_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/gastometro/activacion_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/gastometro/activacion_04.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>