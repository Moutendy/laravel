<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthentificationsController extends Controller
{
    //


    public function authentification()
    {

        if (auth()->user()->user_type =='Administrator')
        {
             // admin dashboard path
            return redirect(url( '/homehadmin'));
        
        } else {
            // member dashboard path

          return redirect(url( '/dashboard'));  
        }
    }

 
}
