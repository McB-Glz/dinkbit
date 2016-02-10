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
			<p>Empresa 100% mexicana dedicada a ofrecer soluciones y productos financieros de crédito, a tasas de interés competitivas, para personas que busquen cumplir sus sueños.</p>
			<p>Con Credifort tu puedes pedir préstamos para cualquier imprevisto de forma segura, simple, rápida y libre de estrés.</p>
		</div>
	</div>

	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Se desarrolló el sitio web de Credifort con el objetivo de ofrecer a los usuarios una herramienta funcional con la cual pudieran realizar cotizaciones de préstamos en línea.</p>
				<p>Octubre 2015</p>
				<p><i class="fa fa-home"></i> <a href="http://www.credifort.com/" target="_blank">credifort.com</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/credifort/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/credifort/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/credifort/web_06.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/credifort/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/credifort/web_05.jpg') }}" class="img-responsive">
			
		</div>
	</div>
</div>