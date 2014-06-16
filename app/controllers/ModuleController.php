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

	public function delete($id)
	{
		$mod = Module::find($id);
		$mod->delete();
		return Redirect::action('ModuleController@index');
	}

	public function modify($id)
	{
		$mod = Module::find($id);
		$data = array('id' => $id, 'mod' => $mod);
		return View::make('module.modify')->with($data);
	}

	public function register($id)
	{
		if (Auth::check())
		{
			$user_id = Auth::user()->id;
			$user = DB::table('modules_users')
	                    ->where('module_id', '=', $id)
	                    ->orWhere('user_id', '=', $user_id)
	                    ->get();
			if (!$user)
			{
				DB::table('modules_users')->insert(array(
	           	 'module_id' => $id,
	           	 'user_id' => $user_id)
				);
			}
		}
		return Redirect::action('ModuleController@index');
	}

	public function unregister($id)
	{
		if (Auth::check())
		{
			$user_id = Auth::user()->id;
			$user = DB::table('modules_users')
	                    ->where('module_id', '=', $id)
	                    ->orWhere('user_id', '=', $user_id)
	                    ->get();
			$user->delete();
		}
		return Redirect::action('ModuleController@index');
	}

}
