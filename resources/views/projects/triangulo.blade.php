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
			<h3>Gobierno del estado de Guerrero</h3>
		</div>
	</div>
	<div class="row section-desc">
		<div class="col-xs-12">
			<p>Guerrero es uno de los principales estado de la república que cuenta con una amplia variedad de lugares turísticos, eventos y áreas culturales.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Apps</h3>
				<h4><a href="https://itunes.apple.com/mx/app/triangulo-del-sol/id618590205?mt=8" target="_blank">iOS</a> | <a href="https://play.google.com/store/apps/details?id=com.dinkbit.guerrero" target="_blank">Android</a></h4>
				<p class="desc">Buscando fomentar el turismo en el área designada Triángulo del Sol - compuesta por Acapulco, Taxco e Ixtapa-Zihuatanejo - el gobierno local desarrolló una aplicación mediante la cual se pueden ver todas las actividades que hay en cada punto, así como filtrar por tipo de evento.</p>
				<p>No importa si lo que buscas es un concierto, un lugar para comer o un atractivo turístico, con la aplicación oficial de Triángulo del Sol seguro encuentras algo que, al igual que estas ciudades, te cautivará y te hará volver una y otra vez.</p>
				<p>Septiembre, 2013</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/triangulo/apps_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/triangulo/apps_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/triangulo/apps_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/triangulo/apps_04.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>