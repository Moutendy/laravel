<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PresentationModel;

class PresentationController extends Controller
{
 
    //
    public function ajouterpresentation()
    {
        return view('/presentation');
    }

  public  function envoipresentation(Request $resultat)
     {
        $presentationModels= new PresentationModel;
        
        $presentationModels->code=request('code');
        $presentationModels->description=request('description');
        $presentationModels->libelle=request('libelle');
        $presentationModels->lien=request('lien');
        $presentationModels->save();
        $presentationaffiche = PresentationModel::all();
        return view('/presentation',['presentationaffiche'=>$presentationaffiche]);
    }
}