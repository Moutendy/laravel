<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function ajouteradmin()
    {
        return view('/ajouteradmin');
    }

    

    public  function envoiadmin(Request $resultat)
    {
     /* 
      
      
        
      
       ,['contactModel'=>$contactModels]
     */

    $adminModels= new User;

    $adminModels->email=request('email');
    $adminModels->password=request('password');
    $adminModels->save();

   

       return view('/ajouteradmin');
   }

}
