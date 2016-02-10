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
			<p>Creamos el nuevo sitio de Adela Micha sobre su imagen totalmente renovada. Dentro de la plataforma existen diferentes blogs, columnas, videos y mucho más. Todo esto lo montamos sobre una plataforma de CMS para poder gestionar los contenidos.</p>
			<p>Enero, 2014</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Activaciones</h3>
				<p class="desc"></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			{{-- <img src="{{ url('assets/img/portfolio/ifeel/apps_01.jpg') }}" class="img-responsive"> --}}
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">Ifeel es la plataforma que te ayuda a encontrar el mejor plan de recreación de acuerdo con el estado de ánimo que te encuentres. Es una base de datos de establecimientos en la Ciudad de México catalogados por sus características para ser compatibles con el mood del usuario.</p>
				<p>Agosto, 2014</p>
				<p><i class="fa fa-home"></i> <a href="https://ifeel.mx/" target="_blank">ifeel.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/ifeel/web_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/web_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/web_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/web_05.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">Concepto | Branding</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/ifeel/identidad_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/identidad_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/identidad_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/identidad_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/identidad_05.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/identidad_06.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/identidad_07.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/identidad_08.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/identidad_09.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/identidad_10.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/identidad_11.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/identidad_12.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/identidad_13.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/identidad_14.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Multimedia</h3>
				<h4>Motion Graphics</h4>
				<p class="desc">El vídeo de ifeel se realizó por medio de fotografías y edición post digital. Elegimos diferentes experiencias que recomienda ifeel para demostrar el funcionamiento de la plataforma. Éste se utilizó para la campaña de lanzamiento.</p>
				<p>Junio, 2014</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<?php 
                $link = 'https://vimeo.com/98689169';
             ?>
			<img src="{{ url('assets/img/portfolio/ifeel/media_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/media_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/media_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/media_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/media_05.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/media_06.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/media_07.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/media_08.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/media_09.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/media_10.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/media_11.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ifeel/media_12.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Campañas Digitales</h3>
				<p class="desc"></p>
				<p><i class="fa fa-facebook-square"></i> <a href="#" target="_blank"></a></p>
				<p><i class="fa fa-twitter-square"></i> <a href="#" target="_blank"></a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			{{-- <img src="{{ url('assets/img/portfolio/ifeel/digital_01.jpg') }}" class="img-responsive"> --}}
		</div>
	</div>
</div>