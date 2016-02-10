@extends('layouts.master')
@section('title', 'Equipo')
@section('sectionId', 'equipo')

@section('sectionClass', 'equipo')

@section('content')

	<div class="container-fluid section-header">
		<div class="overlay"></div>
		<h2 class="text-heading text-center">Hacemos cosas increíbles</h2>
	</div>
	<div class="container-fluid topmargin-lg bottommargin-lg" id="equipo-grid">
		<div class="row">
			<div class="col-sm-4 team-single wow fadeInUp">
				<div class="team-top">
					<div class="img-wrapper js-hover">
						<img src="assets/img/dinkbit/01.png" class="img-responsive img-center">
					</div>
					<div class="team-info">
						<h5 class="h2">Joseph<br/><small>CTO</small></h5>
						<p>Creo que todo con lo que interactuamos normalmente en nuestras vidas tiene diseño. Soy amante de la tecnología, el diseño, la música y la moda. Me gustan los retos sobre todo los que parecen imposibles.</p>
						<blockquote class="blockquote-reverse">
							<p>"Simplicity is the ultimate form of sophistication"</p>
							<small>Leonardo da Vinci</small>
						</blockquote>
					</div>
				</div>
				<div class="desc">
					<h5 class="h3">Joseph<br/><small>CTO</small></h5>
				</div>
			</div>
			<div class="col-sm-4 team-single wow fadeInUp">
				<div class="team-top">
					<div class="img-wrapper js-hover">
						<img src="assets/img/dinkbit/02.png" class="img-responsive img-center">
					</div>
					<div class="team-info">
						<h5 class="h2">José<br/><small>CEO</small></h5>
						<p>Adicto al orden y la tecnología, me encanta conocer las tendencias y lo más nuevo en el mercado. Soy geek de corazón, emprendedor, me gusta mucho viajar y compartir mis conocimientos y aprendizajes con las personas que me rodean.</p>
						<blockquote class="blockquote-reverse">
							<p>"Think big, start small, grow fast"</p>
						</blockquote>
					</div>
				</div>
				<div class="desc">
					<h5 class="h3">José<br/><small>CEO</small></h5>
				</div>
			</div>
			<div class="col-sm-4 team-single wow fadeInUp">
				<div class="team-top">
					<div class="img-wrapper js-hover">
						<img src="assets/img/dinkbit/03.png" class="img-responsive img-center">
					</div>
					<div class="team-info">
						<h5 class="h2">José<br/><small>CCO</small></h5>
						<p>Emprendedor, hipomaníaco, amante de la creatividad y la originalidad, adicto al Internet, nomofóbico. En la constante necesidad de dejar este mundo en mucho mejores condiciones de las que lo encontró.</p>
						<blockquote class="blockquote-reverse">
							<p>"¿Cuándo vas a despertar y hacer tus sueños realidad?"</p>
							<small>José Sevilla</small>
						</blockquote>
					</div>
				</div>
				<div class="desc">
					<h5 class="h3">José<br/><small>CCO</small></h5>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
                shuffle($personas);
                $i = 0;
            ?>
			@foreach($personas as $persona)
			<div class="col-sm-4 team-single wow fadeInUp">
				<div class="team-top">
					<div class="img-wrapper js-hover">
						<img src="{{ url('assets/img/dinkbit/'.$persona['image']) }}" class="img-responsive img-center">
					</div>
					<div class="team-info">
						<h5 class="h2">{{ $persona['name'] }}<br/><small>{{ $persona['position'] }}</small></h5>
						<p>{{ $persona['description'] }}</p>
						 @if(!empty($persona['quote']))
							<blockquote class="blockquote-reverse">
								<p>"{{ $persona['quote'] }}"</p>
								 @if(!empty($persona['quote-author']))
									<small>{{ $persona['quote-author'] }}</small>
								@endif
							</blockquote>
						@endif
					</div>
				</div>
				<div class="desc">
					<h5 class="h3">{{ $persona['name'] }}<br/><small>{{ $persona['position'] }}</small></h5>
				</div>
			</div>
			    <?php ++$i;?>
		        @if($i % 3 == 0)
		            <br class="clear-both">
		        @endif
			@endforeach
		</div>
	</div>

@stop

@section('js')
	<script type="text/javascript">
		$(function() {
			backgroundCover('.section-header');
		});
		$(window).resize(function(){
			clearTimeout(timeOut);
			timeOut = setTimeout(function(){ 
				backgroundCover('.section-header');
			}, 300);
		});
	</script>
@stop
