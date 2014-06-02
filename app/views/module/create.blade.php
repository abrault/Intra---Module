@extends('template.main')

@section('content')

	<?php
		if (isset($module) && $module == 'ok')
		{
			echo "<div class='alert alert-success'>Le module a été ajouté avec succès !";
			echo "</div>";
		}
	?>
	<h2>Info du module</h2>
	{{ Form::open(array('action' => 'ModuleController@store')) }}

	<div class="input-group">
		<span class="input-group-addon">Nom du module</span>
		{{ Form::text('name', '', $attributes = array('class' => 'form-control')); }}
	</div>

	<div class="input-group">
		<span class="input-group-addon">Description</span>
		{{ Form::text('desc', '', $attributes = array('class' => 'form-control')); }}
	</div>

	<div class="input-group">
		<span class="input-group-addon">Nombre de place</span>
		{{ Form::input('number', 'nb_place', '', $attributes = array('class' => 'form-control')); }}
	</div>

	<div class="input-group">
		<span class="input-group-addon">Nombre de crédit(s)</span>
		{{ Form::input('number', 'nb_credit', '', $attributes = array('class' => 'form-control')); }}
	</div>

	<h2>Inscription</h2>

	<div class="input-group">
		<span class="input-group-addon">Début d'inscription</span>
		{{ Form::input('date', 'beg_insc', '', $attributes = array('class' => 'form-control')); }}
	</div>

	<div class="input-group">
		<span class="input-group-addon">Fin de l'inscription</span>
		{{ Form::input('date', 'end_insc', '', $attributes = array('class' => 'form-control')); }}
	</div>

	<div class="input-group">
		<span class="input-group-addon">Début du module</span>
		{{ Form::input('date', 'beg_mod', '', $attributes = array('class' => 'form-control')); }}
	</div>

	<div class="input-group">
		<span class="input-group-addon">Fin du module</span>
		{{ Form::input('date', 'end_mod', '', $attributes = array('class' => 'form-control')); }}
	</div>
	</br>

	{{ Form::submit('Créer le module !', $attributes = array('class' => 'btn btn-primary')); }}

	{{ Form::close() }}

@stop
