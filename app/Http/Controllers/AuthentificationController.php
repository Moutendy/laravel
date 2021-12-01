<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthentificationController extends Controller
{
    //

    public function authentification()
    {
        return view('login');
    }

    public function authentificationpost()
    {
        $user= new User ;
        $user->email=request('email');
        $user->password=request('password');

        $user = Auth::user();
      $resultat=auth()->attempt([
            'email'=>request('email'),
            'password'=>request('password'),
        ]);
        var_dump($resultat);
        if($resultat)
        {
         return redirect('/home');
        }
     return request('password')." et ".request('email');
    }
}
