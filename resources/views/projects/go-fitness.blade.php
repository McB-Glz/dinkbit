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
			<p>GO! Fitness es un concepto único en México donde tener el cuerpo que siempre has querido, no está condicionado a precios excesivos ni horarios limitados. GO! Fitness, pone ante ti un centro de acondicionamiento físico, con aparatos de última generación y todas las clases de Body Systems, al mejor precio haciendo siempre énfasis en la nutrición con planes para la pérdida de peso para quién lo requiera.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Activaciones</h3>
				<p class="desc">Se llevó a cabo el “Reto es contigo mismo” que consistió en un concurso de fotografía desarrollado dentro de Facebook donde los miembros del gimnasio se tomaban fotografías cada 30 días en un fondo diseñado especialmente para el reto y a través de las cuales podían ver sus resultados.</p>
				<p>Julio 2015</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/gofitness/activaciones_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/gofitness/activaciones_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/gofitness/activaciones_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/gofitness/activaciones_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/gofitness/activaciones_05.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Go! Fitness es una de las cadenas de gimnasios más exitosas del país, con presencia en el DF y Cancún.</p>
				<p>Se diseñó un sitio web informativo y fácil de navegar, mediante el cual los usuarios pueden conocer Go! Fitness y encontrar el centro más cercano a ellos. Asimismo, pueden encontrar los horarios actualizados al día, los espacios y un blog.</p>
				<p>En redes sociales se crearon diversas apps para motivar a los usuarios a inscribirse, y se creó una comunidad activa de más de 20,000 fans.</p>
				<p>Febrero, 2012</p>
				<p><i class="fa fa-home"></i> <a href="http://www.gofitness.com.mx/" target="_blank">gofitness.com.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/gofitness/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/gofitness/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/gofitness/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/gofitness/web_02.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Campañas Digitales</h3>
				<h4>Social Media | Marketing Digital</h4>
				<p class="desc">Una de las cadenas de gimnasios con mayor presencia en el D.F. y Cancún. Las amplias instalaciones de Go Fitness, permiten que los usuarios realicen sus rutinas y clases cómodamente. Go Fitness busca tener una fuerte presencia en redes sociales, ofreciendo contenido de valor a sus usuarios y excelentes promociones para que cada vez más personas se vuelvan parte de Go! Fitness.</p>
				<p>Febrero, 2012</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/gofitnessmx" target="_blank">/gofitnessmx</a></p>
				<p><i class="fa fa-pinterest-square"></i> <a href="https://www.pinterest.com/gofitnessmx/" target="_blank">gofitnessmx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/gofitness/digital_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/gofitness/digital_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/gofitness/digital_03.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>