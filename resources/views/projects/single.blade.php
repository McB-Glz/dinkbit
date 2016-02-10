@extends('layouts.master')

@section('title', $project['title'])

@section('sectionId', 'proyectos-single')

@section('sectionClass', 'proyectos-single')

@section('content')
	@include('partials.header', [
		'page_id' => $page_id
	])
	@include('projects.'.$page_id)
@stop