<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;

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

    $adminModels= new AdminModel;
    $adminModels->email=request('email');
    $adminModels->password=request('password');
    $adminModels->save();

    $adminModels = AdminModel::all();

       return view('/ajouteradmin',['adminModel'=>$adminModels]);
   }

}
