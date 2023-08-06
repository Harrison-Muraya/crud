<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    public function register(Request $request){
        $incomingfields= $request->validate([
            'name' =>['required','min:3',Rule::unique('users','name')],
            'email'=> ['required',Rule::unique('users','email')],
            'password'=>'required'
        ]);
        $incomingfields['password']=bcrypt($incomingfields['password']);
        $user=User::create($incomingfields);
        auth()->login($user);
        return redirect('/');
    }

    public function login(Request $request){
        $incomingfields= $request->validate([
            'lname'=>'required',
            'lpassword'=>'required'
        ]);
        if(auth()->attempt(['name'=>$incomingfields['lname'],'password'=>$incomingfields['lpassword']])){
            $request->session()->regenerate();
        }
        return redirect('/');
    }
    public function logout() {
        auth()->logout();
        return redirect('/');
    }
}
