<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;

use App\Users as Users;

use Validator;

use Exception;

use Config;

use Session;

class UsersController extends Controller
{
    public function _construct()
    {

    }

    public function userRegistration()
    {
    	$rules = array(
                    'name'          => 'required|min:2',
                    'employeeid'    => 'required|min:3|unique:users,employeeid',
                    'site'          => 'required',
                    'agent_type'    => 'required',
        );

        $validator = Validator::make($input,$rules);

        if( $validator->fails() ){
            
            return Redirect::to('index')
            ->withInput()
            ->withErrors($validator);

        }else{

        }

        return Redirect::back();
    }

}
