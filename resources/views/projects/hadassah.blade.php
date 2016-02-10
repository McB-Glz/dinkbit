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
			<h3>Internacional, Latinoamérica, Francia, Bélgica</h3>
		</div>
	</div>
	<div class="row section-desc">
		<div class="col-xs-12">
			<p>Hadassah es un Centro Médico de excelencia, reconocido a nivel mundial por su contribución a la curación, a la investigación y a la enseñanza. Su misión es extender su ayuda a todos, independientemente de la raza, la religión o la etnia de origen.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Se desarrollaron los sitios Web para Hadassah internacional, Hadassah Latinoamérica, Hadassah Bélgica, Hadassah Brasil y Hadassah Francia basados en el mismo diseño para mantener la unidad en la imagen de la organización alrededor del mundo pero dando a cada sitio su propio administrador de contenidos a través del cual cada sitio brinda la información de la organización, de sus proyectos y noticias relevantes para sus usuarios.</p>
				<p>Adicionalmente se desarrolló un sitio independiente a través del cual Hadassah internacional recibe donativos desde cualquier parte del mundo que pueden ser dirigidos a un proyecto en especial o a la organización en general para su disposición.</p>
				<p>Hadassah International:<br/>Mayo 2015<br/><i class="fa fa-home"></i> <a href="http://hadassahinternational.org/" target="_blank">hadassahinternational.org</a></p>
				<p>Hadassah Latinoamérica:<br/>Abril 2015<br/><i class="fa fa-home"></i> <a href="http://hadassahlatinoamerica.org/" target="_blank">hadassahlatinoamerica.org</a></p>
				<p>Hadassah Bélgica:<br/>Junio 2015<br/><i class="fa fa-home"></i> <a href="http://hadassah.be/" target="_blank">hadassah.be</a></p>
				<p>Hadassah Francia:<br/>Octubre 2015<br/><i class="fa fa-home"></i> <a href="http://hadassah.fr/" target="_blank">hadassah.be</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/hadassah/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/hadassah/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/hadassah/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/hadassah/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/hadassah/web_05.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Campañas Digitales</h3>
				<h4>Social Media | Marketing Digital</h4>
				<p class="desc">Hadassah es un hospital de Israel que busca tener presencia en México, ofreciendo contenido de valor a los usuarios y compartiendo las noticias de Hadassah en su página web y redes sociales. El objetivo principal de Hadassah es tener presencia y crear conciencia en todas las personas de México, posicionando al hospital como uno de los mejores centros médicos a nivel mundial. Además de la estrategia digital, adaptamos y tradujimos los contenidos para el mercado mexicano.</p>
				<p>Junio, 2013</p>
				<p><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/hadassahmx" target="_blank">/hadassahmx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/hadassah/digital_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/hadassah/digital_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/hadassah/digital_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/hadassah/digital_04.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>