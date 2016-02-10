@extends('layouts.master')
@section('title', 'Portafolio')

@section('sectionId', 'proyectos')

@section('sectionClass', 'proyectos')

@section('mosaicClass', 'hidden-xs')

@section('mosaic')
	@include('partials.mosaic')
@stop

@section('content')
	<div class="container-fluid topmargin-lg bottommargin-lg">
		<div class="row filtros">
			<div class="filter-btn">
				<i class="fa fa-filter"></i>
			</div>
			<div class="col-sm-2" id="proyect-sidebar">
				<div class="pineado">
					<ul>
						<li class="todo" id="todo">Todo</li>
						<li class="identidad" id="identidad">Identidad</li>
						<li class="activaciones" id="activaciones">Activaciones</li>
						<li class="apps" id="apps">Apps</li>
						<li class="desarrolloWeb" id="desarrolloWeb">Desarrollo Web</li>
						<li class="campanasDigitales" id="campanasDigitales">Campañas Digitales</li>
						<li class="multimedia" id="multimedia">Multimedia</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-10" id="proyect-grid">
				<div class="row" id="grid">
					<?php 
                        shuffle($projects);
                        $i = 0;
                    ?>
					@foreach($projects as $project)
						<?php 
                            $col = 'col-xs-12';
                            switch (count($project['categories'])) {
                                case 2:
                                    $col = 'col-xs-6';
                                    break;

                                case 3:
                                    $col = 'col-xs-4';
                                    break;

                                case 4:
                                    $col = 'col-xs-3';
                                    break;

                                case 5:
                                    $col = 'col-cinco';
                                    break;

                                case 6:
                                    $col = 'col-xs-2';
                                    break;

                            }

                            $class = '';
                            foreach ($project['categories'] as $category) {
                                $class .= ' '.$category;
                            }

                        ?>
						<div class="col-sm-6 col-md-4 one-proyect {{ $class }} element-item">
							<div class="img-wrapper">
								<img src="{{ url('assets/img/portfolio/'.$project['image']) }}" class="img-responsive cover">
								<a href="{{ url('/proyectos/'.$project['url']) }}"><div class="overlay">
									<img src="{{ url('assets/img/portfolio/plus.png') }}" class="plus">
								</div></a>
								<div class="categories row">
									@foreach($project['categories'] as $category)
										<div class="{{ $col }} {{ $category }}">
										</div>
									@endforeach
								</div>
							</div>
							<div class="proyect-title">
								<a href="{{ url('/proyectos/'.$project['url']) }}">	<h5 class="text-right">{{ $project['title'] }}</h5>
								</a>
							</div>
						</div>
						<?php ++$i; ?>

							{{--  @if ($i % 3 == 0) <br class="clear-both"> @endif--}}
					@endforeach
				</div>
			</div>
		</div>
	</div>

@stop

@section('js')
	<script type="text/javascript">
		var mHeight = 60;
	</script>
	<script type="text/javascript" src="/assets/js/mosaic.min.js"></script>
	<script type="text/javascript">
		$(function() {


			if (wW < 768) {
				$('#proyect-sidebar').removeClass('wow');

				$('.filter-btn').click(function() {
					mobileFilter();
				});
			}

		});
		$(window).load(function() {
		  /* Act on the event */
		  proyectosSize();

		  var $grid = $('#grid').isotope({
		    // options
		    itemSelector: '.element-item',
		    layoutMode: 'fitRows'
		  });

		  	$(".pineado").pin({
		        containerSelector: ".filtros",
		        padding: {top: 100},
		        minWidth: 767
		  	});
		  	$('#todo').click(function() {
		  		$grid.isotope({ filter: '*' });
		  		if (wW < 768) {
		  			mobileFilter();
		  		}
		  	});

		  	$('#activaciones').click(function() {
		  		$grid.isotope({ filter: '.activaciones' });
		  		if (wW < 768) {
		  			mobileFilter();
		  		}
		  	});

		  	$('#apps').click(function() {
		  		$grid.isotope({ filter: '.apps' });
		  		if (wW < 768) {
		  			mobileFilter();
		  		}
		  	});

		  	$('#desarrolloWeb').click(function() {
		  		$grid.isotope({ filter: '.desarrolloWeb' });
		  		if (wW < 768) {
		  			mobileFilter();
		  		}
		  	});

		  	$('#identidad').click(function() {
		  		$grid.isotope({ filter: '.identidad' });
		  		if (wW < 768) {
		  			mobileFilter();
		  		}
		  	});

		  	$('#multimedia').click(function() {
		  		$grid.isotope({ filter: '.multimedia' });
		  		if (wW < 768) {
		  			mobileFilter();
		  		}
		  	});

		  	$('#campanasDigitales').click(function() {
		  		$grid.isotope({ filter: '.campanasDigitales' });
		  		if (wW < 768) {
		  			mobileFilter();
		  		}
		  	});

		  	var active_category = '{{ $slug }}';

		  	if (active_category != '') {
		  		active_category = '.'+active_category;
		  		$grid.isotope({ filter: active_category });
		  	};

		  

		});
	</script>
@stop