<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormationModel;

class FormationController extends Controller
{
    //

    public function ajouterformation()
    {
        return view('/ajouterformation');
    }

    public  function envoiformation(Request $resultat)
    {
       $formationModels= new FormationModel;
      
       $formationModels->code=request('code');
       $formationModels->description=request('description');
       $formationModels->libelle=request('libelle');
       $formationModels->lien=(string)$resultat->file('lien')->store('image');
           
       $formationModels->save();
      
      

       return view('/ajouterformation');
   }
}
