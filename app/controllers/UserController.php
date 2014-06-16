<?php

class UserController extends BaseController {

	public function login($user)
	{

		
	}

	public function logout()
	{
		Auth::logout();
		$data = array('info' => 'Vous avez été déconnecté');
		return Redirect::action('ModuleController@index')->with($data);
	}

	public function register()
	{
		$user = new User;
	    $user->permissions = 'admin';
	    $user->password = 'admin';
	    $user->email = 'admin@admin.fr';
	    $user->save();
	    echo 'Register OK';
	}

}
