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
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc"></p>
				<p><i class="fa fa-home"></i> <a href="#/" target="_blank"></a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			{{-- <img src="{{ url('assets/img/portfolio/fotocapital/web_01.jpg') }}" class="img-responsive"> --}}
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">Branding, Concepto</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/fotocapital/identidad_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/fotocapital/identidad_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/fotocapital/identidad_03.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/fotocapital/identidad_04.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/fotocapital/identidad_05.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Multimedia</h3>
				<p class="desc"></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			{{-- <img src="{{ url('assets/img/portfolio/fotocapital/media_01.jpg') }}" class="img-responsive"> --}}
		</div>
	</div>
</div>