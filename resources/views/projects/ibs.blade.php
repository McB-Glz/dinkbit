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
			<p>Oficinas IBS es una empresa 100% Mexicana, dedicada a proveer soluciones integrales e inteligentes para negocios que buscan un rápido y sólido crecimiento ofreciendo oficinas virtuales, oficinas físicas, salas de juntas y demás servicios para impulsar el desarrollo de empresas, a través de servicios de imagen, infraestructura y espacio.</p>
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Identidad</h3>
				<p class="desc">El concepto e identidad de IBS surge del dinamismo y la necesidad de un espacio de trabajo optimo. Utilizamos una escala de grises haciendo referencia al momento en el que cualquier trabajo se encuentra sin finalizar, es decir,  “en obra gris”, con tres triángulos de color naranja simbolizando la consolidación de un negocio, a la vez la imagen genera un efecto de movimiento transmitiendo un mensaje de cambio, crecimiento, optimización de procesos y resultados.</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/ibs/identidad_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ibs/identidad_03.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Apps</h3>
				<h4><a href="https://itunes.apple.com/mx/app/oficinas-ibs/id690311812?mt=8" target="_blank">iOS</a> | <a href="https://play.google.com/store/apps/details?id=com.dinkbit.oficinasibs" target="_blank">Android</a></h4>
				<p class="desc">Buscando ofrecer lo mejor para sus clientes, IBS creó con dinkbit un app que permitiera a los usuarios tener control total de sus oficinas directo desde su dispositivo. Con posibilidades desde pagar facturas hasta consultar citas, transacciones y correos, es la aplicación más completa en su ramo.</p>
				<p>Septiembre, 2013</p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/ibs/app_01.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ibs/app_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ibs/app_03.jpg') }}" class="img-responsive">
		</div>
	</div>
	<div class="row single-section">
		<div class="col-sm-3">
			<div class="pinned">
				<h3 class="dink-header mobile-pin">Desarrollo Web</h3>
				<p class="desc">El concepto de oficinas virtuales aún es algo muy reciente en México. Para este gran concepto nos dimos a la tarea de diseñar un sitio web responsivo en el que se muestren sus servicios, instalaciones y un cotizador interactivo.</p>
				<p>Julio, 2013</p>
				<p>Controlar tantos servicios y clientes es complicado, por lo que creamos un sistema de control integral con el que Oficinas IBS pudiera administrar sus clientes, proveedores, extensiones de conmutador y servicios de facturación. Así, desde un solo lugar en la nube todo su negocio está en orden y comunicación con sus clientes a través de su aplicación móvil para iOS y Android.</p>
				<p>Abril, 2014</p>
				<p><i class="fa fa-home"></i> <a href="http://oficinasvirtuales.mx/" target="_blank">oficinasvirtuales.mx</a></p>
			</div>
		</div>
		<div class="col-sm-8 col-sm-offset-1 img-col">
			<img src="{{ url('assets/img/portfolio/ibs/web_02.jpg') }}" class="img-responsive">
			<img src="{{ url('assets/img/portfolio/ibs/web_01.jpg') }}" class="img-responsive">
		</div>
	</div>
</div>