@extends('template.main')

@section('content')

@if($module)
	@foreach($module as $m)
		<h2>{{$m->name}}</h2>

		<?php

 			$user_id = 5; // ID d'user with Auth::
			$user = DB::table('modules_users')
	        ->where('module_id', '=', $m->id)->orWhere('user_id', '=', $user_id)->get();
	        if ($user)
	        {
	        	?><a class="btn btn-primary" href="{{action('ModuleController@unregister', $m->id)}}" role="button">Se désinscrire du module</a><?php
	        }
	        else
	        {
	        	?><a class="btn btn-primary" href="{{action('ModuleController@register', $m->id)}}" role="button">S'inscrire au module</a><?php
	        }

		?>

		<a class="btn btn-primary" href="{{action('ModuleController@index', $m->id)}}" role="button">Voir la liste des exo</a>
		
		<?php
		if ("admin")
		{?>
		<a class="btn btn-primary" href="{{action('ModuleController@modify', $m->id)}}" role="button">Editer le module</a>
		<a class="btn btn-primary" href="{{action('ModuleController@delete', $m->id)}}" role="button">Supprimer le module</a>
		<?php
		}
		?>	
	@endforeach
@endif
@stop
