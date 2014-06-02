<?php

class ModuleController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = array('module' => Module::all());
		return View::make('module.index')->with($data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('module.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (Request::isMethod('post'))
		{
			$data = array('module' => 'ok');
			$var = Request::all();

			$module = new Module;
			$module->name = $var['name'];
			$module->description = $var['desc'];
			$module->max_places = $var['nb_place'];
			$module->credits_value = $var['nb_credit'];
			$module->start_register = $var['beg_insc'];
			$module->end_register = $var['end_insc'];
			$module->start_module = $var['beg_mod'];
			$module->end_module = $var['end_mod'];
			
			$module->save();
		    return View::make('module.create')->with($data)->with($var);
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return View::make('hello.php');
	}


}
