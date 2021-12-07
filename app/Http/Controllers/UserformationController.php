<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivreAModel;
use App\Models\FormationModel;
class UserformationController extends Controller
{
    //


    public function livre()
    {
        $livre=LivreAModel::all();

        return view('user.livre',compact('livre'));

    }

    public function formation()
    {
        $formation=FormationModel::all();

        return view('user.fomationuser',compact('formation'));

    }

  
}