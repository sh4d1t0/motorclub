<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
    {
	    // get all the users
	    $users = User::all();

	    // load the view and pass the users
	    return view('users.index')
		    ->with('users', $users);
	    /*return View::make('users.index')
	               ->with('users', $users);*/
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// load the create form (app/views/users/create.blade.php)
		return view('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store()
    {
	    // validate
	    // read more on validation at http://laravel.com/docs/validation
	    $rules = array(
		    'firstname'  => 'required',
		    'lastname'   => 'required',
		    'email'      => 'required|email'
	    );
	    $validator = Validator::make(Input::all(), $rules);

	    // process the login
	    if ($validator->fails()) {
		    return Redirect::to('nerds/create')
		                   ->withErrors($validator)
		                   ->withInput(Input::except('password'));
	    } else {
		    // store
		    $user = new Nerd;
		    $user->firstname  = Input::get('firstname');
		    $user->lastname   = Input::get('lastname');
		    $user->email      = Input::get('email');
		    $user->save();

		    // redirect
		    Session::flash('message', 'Successfully created user!');
		    return Redirect::to('users');
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
		// get the nerd
		$user = User::find($id);

		// show the view and pass the nerd to it
		return view('users.show')
		           ->with('user', $user);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function edit($id)
    {
	    // get the user
	    $user = User::find($id);

	    // show the edit form and pass the user
	    return view('users.edit')
	               ->with('user', $user);
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update($id)
    {
	    // validate
	    // read more on validation at http://laravel.com/docs/validation
	    $rules = array(
		    'firstname'  => 'required',
		    'lastname'   => 'required',
		    'email'      => 'required|email'
	    );
	    $validator = Validator::make(Input::all(), $rules);

	    // process the login
	    if ($validator->fails()) {
		    return Redirect::to('usuarios/' . $id . '/editar')
		                   ->withErrors($validator)
		                   ->withInput(Input::except('password'));
	    } else {
		    // store
		    $user = User::find($id);
		    $user->firstname       = Input::get('firstname');
		    $user->lastname       = Input::get('lastname');
		    $user->email      = Input::get('email');
		    $user->save();

		    // redirect
		    Session::flash('message', 'Successfully updated user!');
		    return Redirect::to('users');
	    }
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function destroy($id)
    {
    	//
    }
}
