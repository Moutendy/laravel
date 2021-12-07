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
    
    public function homeadmin()
    {
        return view('homehadmin');
    }

    

}
