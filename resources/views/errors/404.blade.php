@extends('layouts.master')
@section('title', 'Página no encontrada')
@section('sectionId', 'home')

@section('content')

  <div class="container-fluid home1">
    <div class="row bottommargin-lg topmargin">
      <div class="col-xs-12">
        <div class="row bottommargin-xs">
          <div class="col-xs-12 col-sm-8 col-sm-offset-2">
            <h2 class="wow fadeIn">Lo sentimos</h2>
            <p class="text-xxl text-center wow fadeIn">No hemos encontrado la página que buscas pero puedes volver al inicio haciendo click <a href="{{ route('home') }}">aquí</a></p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <img src="{{ url('assets/img/team.png') }}" class="img-responsive img-center wow fadeIn">
          </div>
        </div>
      </div>
    </div>
  </div>

@stop
