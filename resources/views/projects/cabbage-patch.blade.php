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
			<p>Cabbage Patch Kids no son muñecas comunes, cada muñeca es única y tiene un certificado de nacimiento y uno de adopción. Cuentan con fanáticos y coleccionistas en México, Estados Unidos y España.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Camapañas Digitales</h3>
				<h4>Social Media</h4>
				<p class="desc">Cabbage Patch Kids, empresa mundialmente reconocida por sus cachetonas muñecas, necesitaba contar con presencia en redes sociales. Para lograr posicionarla, desarrollamos una estrategia que aprovechara la tradición de la marca y consolidara su brand voice, de manera que generara el mayor impacto posible con el mercado meta.</p>
				<p>Noviembre, 2012</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/CPKMX" target="_blank">/CPKMX</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/cabbage/media_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/cabbage/media_02.jpg') }}" 
			class="img-responsive">
			<img src="{{ url('assets/img/portfolio/cabbage/media_03.jpg') }}" 
			class="img-responsive">
			<img src="{{ url('assets/img/portfolio/cabbage/media_04.jpg') }}" 
			class="img-responsive">
		</div>
	</div>
</div>