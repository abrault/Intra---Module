@extends('template.main')

@section('content')

@if($module)
	@foreach($module as $m)
		<h2>{{$m->name}}</h2>
		<a class="btn btn-primary" href="/module/public/module/inscription/{{$m->id}}" role="button">S'inscrire au module</a>
		<a class="btn btn-primary" href="/module/public/module/show/{{$m->id}}" role="button">Voir la liste des exo</a>
		<a class="btn btn-primary" href="/module/public/module/{{$m->id}}" role="button">Supprimer le module</a>
	@endforeach
@endif
@stop
