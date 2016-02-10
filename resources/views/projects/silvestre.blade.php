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
			<p>Silvestre, restaurante fusión mexicano que combina una excelente comida con una amplia variedad de mezcales artesanales. Ubicado en el sur de la Ciudad de México, ofrece una excelente opción para cambiar la rutina y pasar un excelente rato.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">La palabra "silvestre” hace referencia a cualquier cosa que crece en el campo, selva o en algún ambiente natural, sin intervención humana, traduciéndolo a un producto completamente nativo. Con la imagen de una planta de mezcal por detrás. Quisimos usar una tipografía en color blanco y  en mayúsculas dando una imagen elegante y profesional a la marca.</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/silvestre/identidad_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/silvestre/identidad_02.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Cuando se presentó el proyecto, se nos encomendó crear Silvestre desde cero. El resultado fue un concepto que pasaba de un restaurant mexicano conservador a un Taller Mezcalero fresco, moderno e interesante. El diseño - tanto institucional como in situ - juega con los espacios, combina la sobriedad de las líneas rectas y los contrastes entre blanco y negro con las líneas orgánicas de la naturaleza y la flora de México, particularmente del área de Oaxaca. La idea fue hacer de Silvestre un estilo de vida, más que un lugar; para esto, creamos una estrategia digital que reflejara la filosofía de Silvestre a través de refranes, imágenes, diseños y promociones exclusivas.</p>
				<p>Marzo, 2013</p>
				<p><i class="fa fa-home"></i> <a href="http://silvestre.com.mx/" target="_blank">silvestre.com.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/silvestre/web_05.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/silvestre/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/silvestre/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/silvestre/web_03.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>