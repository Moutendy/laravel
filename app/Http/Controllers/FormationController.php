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
      
       $file = $resultat->file('lien');

       $name = $file->getClientOriginalName();
       $extension = $file->getClientOriginalExtension();

       $resultat->file('lien')->move('storage',$name);
       $formationModels->lien=$name;
           
       $formationModels->save();
       

       return view('/ajouterformation');
   }

   


}
