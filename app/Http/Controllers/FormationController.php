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
       $formationModels->lien=request('lien');
       $formationModels->save();
       $formationaffiche = FormationModel::all();
       return view('/ajouterformation',['formationaffiche'=>$formationaffiche]);
   }
}
