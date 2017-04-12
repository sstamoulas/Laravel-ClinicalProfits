<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function validateUser(Request $request){
    	if($request->input('authKey') == env('AUTHORIZATION_KEY')){
			return "You Passed The Test";
		}
		else{
			// Forbidden
			abort(403, 'Access denied');
		}
    }
}
