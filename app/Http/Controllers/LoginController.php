<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequestUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    public function exib()
    {
        return view('admin.users.login');
    }

    public function logout()
    {
        if(auth()->check()){
            Auth::guard()->logout();
            return  redirect()->route('contacts.index')
                     ->withMessage('Hope you come back');
        }
    }

    protected function make(LoginRequestUser $request)
    {



            $user = [
                'email' => $request['email'],
                'password' => $request['password'],
            ];



                if(Auth()->guard()->attempt($user)){

                    return redirect()->route('contacts.index')
                    ->withMessage('Welcome to contact-management');


                }



                return redirect()->back()->withErrors('This credentials do not match with our records');









    //Aqui podiamos trabalhar com um evento para notificar o usuario que a conta foi criada
}
}
