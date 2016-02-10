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
			<p>Vittorio Forti nació gracias a la experiencia de casi 70 años de vestir con distinción a los hombres mexicanos. Es una marca que se caracteriza por el buen gusto y el encanto clásico mediterráneo, con un estilo accesible y actual. </p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Campañas Digitales</h3>
				<h4>Social Media | Marketing Digital</h4>
				<p class="desc">Para Vittorio Forti desarrollamos una estrategia en redes sociales con el objetivo de hacer branding y dar un mayor alcance a la marca, además de dar a conocer promociones y ventas especiales.</p>
				<p>Abril 2015</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/vittoriofortimx" target="_blank">/vittoriofortimx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/vittorioForti/media_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/vittorioForti/media_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/vittorioForti/media_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/vittorioForti/media_03.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>