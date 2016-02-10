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
			<p>Cravehunter es una guía con los mejores productos para los compradores, ahí podrás descubrir, comparar y comprar productos de un catálogo de las mejores y más innovadoras tiendas. Cravehunter es conocido por la selección de los mejores productos en el mercado, con cosas nuevas publicadas diariamente.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">Cravehunter, como su nombre lo dice se trata de un cazador. Utilizamos para el diseño los cuernos de un alce representando la fortaleza, la novedad y lo clásico al mismo tiempo; Sin embargo, por la forma de estos y su longitud, la imagen proyecta la variedad de productos disponibles para los usuarios.</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/cravehunter/identidad_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/cravehunter/identidad_02.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Apps</h3>
				<h4><a href="https://itunes.apple.com/sc/app/cravehunter/id828691504?mt=8" target="_blank">iOS</a> | <a href="https://play.google.com/store/apps/details?id=com.dinkbit.cravehunter" target="_blank">Android</a></h4>
				<p class="desc">Para complementar la experiencia de los usuarios en redes sociales y web, creamos una aplicación para Apple iOS y otra para Android desde la cuál los usuarios pueden diariamente consultar en su smartphone los productos que Cravehunter seleccionó especialmente para ellos.</p>
				<p>Febrero, 2014</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/cravehunter/apps_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/cravehunter/apps_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/cravehunter/apps_03.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Cravehunter requería una página web dinámica, moderna y funcional para poder publicar diariamente la gran variedad de productos curados especialmente para sus usuarios. La plataforma web de Cravehunter, permite al usuario crear su cuenta, seleccionar sus productos favoritos y comprarlos a través del distribuidor de su conveniencia.</p>
				<p>Febrero, 2014</p>
				<p><i class="fa fa-home"></i> <a href="http://cravehunter.com/" target="_blank">cravehunter.com</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/cravehunter/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/cravehunter/web_02.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>