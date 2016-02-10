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
			<p>Mosnter Blinds es una empresa líder en la fabricación de todo tipo de persianas. Su infraestructura y más de 20 años de experiencia les permiten brindar a sus clientes productos con altos estándares de calidad, precios competitivos y tiempo de entrega adecuado. Así mismo, cuentan con pisos de madera, laminados y hasta muebles. Su muy variada gama de modelos, materiales y estilos los colocan ante el mercado de la decoración como una empresa vanguardista y comprometida con la innovación en diseño de interiores, exteriores y áreas de esparcimiento, tanto en residencia, oficinas corporativas, hoteles, restaurantes o cualquier otro lugar.</p>
		</div>
	</div>
	{{-- <div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">La plataforma web desarrollada permite al usuario a través de pasos simples elaborar una cotización aproximada de persianas para su casa, oficina y cualquier otro lugar personalizando el estilo, la tela, color, posición y más características para finalmente enviar la cotización directamente a la marca y hacerlo realidad.</p>
				<p><i class="fa fa-home"></i> <a href="#" target="_blank"></a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/monsterBlinds/web_01.jpg') }}" class="img-responsive">
		</div>
	</div> --}}
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Campañas Digitales</h3>
				<h4>Social Media | Marketing Digital</h4>
				<p class="desc">Esta empresa dedicada a la venta de persianas en línea busca posicionarse en las redes sociales como una empresa de calidad, con precios económicos y una excelente facilidad de compra. La estrategia para Monster Blinds busca recibir clientes a través de las redes sociales y generar leads a través de ellas.</p>
				<p>Marzo, 2014</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/monsterblindsmx" target="_blank">/monsterblindsmx</a></p>
				<p><i class="fa fa-pinterest-square"></i> <a href="https://www.pinterest.com/monsterblinds/" target="_blank">monsterblinds</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/monsterBlinds/digital_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/monsterBlinds/digital_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/monsterBlinds/digital_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/monsterBlinds/digital_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/monsterBlinds/digital_05.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>