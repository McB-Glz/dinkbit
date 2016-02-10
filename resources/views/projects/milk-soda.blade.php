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
			<p>Se crea pensando en un estilo de niñas o Mujeres modernas con gustos más fashion en corte y colorido. Su colección busca ante todo comodidad y gran calidad, “Sin duda alguna la marca mas fina de pijamas en México”.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">En este logotipo buscamos dar una imagen sobria y elegante, por eso el logotipo es en su mayoría tipografía, integrando un gancho de ropa en vez de la ¨i¨ el cual se utilizó también como imagotipo.</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/milkSoda/identidad_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/milkSoda/identidad_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/milkSoda/identidad_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/milkSoda/identidad_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/milkSoda/identidad_05.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/milkSoda/identidad_06.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/milkSoda/identidad_07.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/milkSoda/identidad_08.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/milkSoda/identidad_09.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/milkSoda/identidad_10.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/milkSoda/identidad_11.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>