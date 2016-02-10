<div class="mosaic-wrapper @yield('mosaicClass', '')">
	<div class="ver {{ Request::is('proyectos') ? 'hidden' : '' }}">
		<a class="btn btn-default btn-lg btn-block" href="{{ url('/proyectos') }}">Más proyectos increíbles...</a>
	</div>
	<div class="top">
		<div class="one">
			<div class="mosaico uno"  data-delay="5000"></div>
		</div>
		<div class="two hidden-xs hidden-tablet">
			<div class="mosaico dos" data-delay="6500"></div>
		</div>
		<div class="three">
			<div class="mosaico tres" data-delay="7000"></div>
		</div>
	</div>
	<div class="middle visible-xs-block visible-tablet">
		<div class="mosaico three-sm" data-delay="6000"></div>
	</div>
	<div class="bottom">
		<div class="four hidden-xs hidden-tablet">
			<div class="mosaico cuatro" data-delay="7000"></div>
		</div>
		<div class="five">
			<div class="mosaico cinco" data-delay="5700"></div>
		</div>
		<div class="six">
			<div class="mosaico seis" data-delay="6000"></div>
		</div>
	</div>
</div>
<div class="row">
	
</div>

<script type="text/javascript">var images = new Array();</script>
<?php
    $files = glob('assets/mosaic/*.{jpg,jpeg,png}', GLOB_BRACE);
    shuffle($files);
    echo '<script type="text/javascript">';
    for ($i = 0; $i < count($files); ++$i) {
        $num = $files[$i];
        echo 'images['.$i.'] = "'.basename($num).'"; ';
    }
    echo '</script>';
?> 