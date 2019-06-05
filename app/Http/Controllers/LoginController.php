<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public  function login(Request $request){

        if (Auth::attempt([
            'name'=>$request->name,
            'password'=>$request->password,

        ]))
        {
            $user=User::where('name',$request->name)->first();
            if ($user->isadmin()){

                return redirect()->route('index');
            }
            return redirect()->back();
        };
        return redirect()->back();
    }
}
