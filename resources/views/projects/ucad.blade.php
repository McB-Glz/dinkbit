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
			<p>La Universidad UCAD otorga una educación superior de excelencia, fundamentada en dos ejes principales, a saber: la excelencia académica y humana del profesorado, así como el compromiso personal de sus alumnos.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Camapañas Digitales</h3>
				<h4>AdWords</h4>
				<p class="desc">Para UCAD enfocamos los objetivos de branding y crecimiento mediante campañas en Facebook y Google Adwords en las cuales segmentamos a usuarios interesados estudiar una carrera a precios accesibles y con horarios flexibles.</p>
				<p>Agosto 2014</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/ucad/digital_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ucad/digital_02.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>