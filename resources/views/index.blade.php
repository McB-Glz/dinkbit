@extends('layouts.master')
@section('title', 'Hacemos cosas increíbles')
@section('sectionId', 'home')


@section('mosaic')
  @include('partials.mosaic')
@stop

@section('content')

  <div class="container-fluid home1">
    <div class="row bottommargin-lg topmargin">
      <div class="col-xs-12">
        <div class="row bottommargin-xs">
          <div class="col-xs-12 col-sm-8 col-sm-offset-2">
            <h2 class="wow fadeIn">Hacemos cosas increíbles</h2>
            <p class="text-xxl text-center wow fadeIn">Exploramos en los lugares menos visitados, para diseñar experiencias ideadas con imaginación y pasión.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <img src="assets/img/team.png" class="img-responsive img-center wow fadeIn">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid home2" id="que-hacemos">
    <div class="row bottommargin-xl topmargin-xl">
      <div class="col-xs-12 col-sm-10 col-sm-offset-1">
        <h2 class="wow fadeInUp">Qué Hacemos</h2>
        <p class="text-xxl text-center bottommargin wow fadeInUp"> Creamos proyectos integrales de alta calidad con un equipo minuciosamente seleccionado de diseñadores, programadores, creativos y creadores de contenido.</p>
        <p class="text-xxl text-center wow fadeInUp">
        <a href="{{ route('projects.category', ['slug' => 'identidad']) }}">Identidad</a> | <a href="{{ route('projects.category', ['slug' => 'activaciones']) }}">Activaciones</a> | <a href="{{ route('projects.category', ['slug' => 'apps']) }}">Apps</a> <br class="hidden-xs"> <a href="{{ route('projects.category', ['slug' => 'desarrolloWeb']) }}">Desarrollo Web</a> | <a href="{{ route('projects.category', ['slug' => 'campanasDigitales']) }}">Campañas Digitales</a> | <a href="{{ route('projects.category', ['slug' => 'multimedia']) }}">Multimedia</a></p>
      </div>
    </div>  
  </div>
  <div class="container-fluid home4">
    <div class="row">
      <div class="col-xs-12">
        <img src="{{ url('assets/img/oficina01.jpg') }}" class="img-responsive">
      </div>
    </div>
  </div>

@stop

@section('js')
  <script type="text/javascript" src="{{ url('/assets/js/mosaic.min.js') }}"></script>
@stop
