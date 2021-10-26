<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\User;

use Log;
use Hash;
use Validator;

class UserController extends Controller
{
	protected function authenticate(Request $req) {
		$validator = Validator::make($req->all(), [
			'username' => 'required',
			'password' => 'required',
		]);

		if ($validator->fails()) {
			return redirect()
				->back()
				->with('flash_error', 'Please fill up the form.');
		}

		$credentials = [
			'username' => $req->username,
			'password' => $req->password
		];

		if (!Auth::attempt($credentials)) {
			return redirect()
				->back()
				->with('flash_error', 'Username/Password provided is incorrect.');
		}

		return redirect()
			->intended('/')
			->with('flash_success', 'Successfully logged in.');
	}

	protected function logout() {
		Auth::logout();

		return redirect()->route('home');
	}
}