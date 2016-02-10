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
			<p>Nemaris está conformado por un equipo multidisciplinario enfocado en ofrecer soluciones con visión integral para la optimización de Aplicaciones de Misión Crítica (Oracle, SAP). Fue constituida en 2009, y cuenta con consultores con experiencia de 15 años, así como una amplia gama de certificaciones de la industria, tal como Oracle Certified Professional, SAP Technology Consultant, VMware Certified Professional, EMC Proven Professional, entre otras.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">Quisimos proyectar con el logotipo, la seriedad y la eficiencia con la que Nemaris trabaja, sin embargo utilizamos colores diferentes para representar a los grupos multidisciplinarios que trabajan en esta organización, refeljando también los años de experiencia.</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/nemaris/identidad_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/nemaris/identidad_02.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>