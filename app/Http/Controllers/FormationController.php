<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormationModel;

class FormationController extends Controller
{
    //
    
    public function update($id)
    {
        $formation= FormationModel::find($id);

        return view('/update',compact('formation'));
    }
    
    public  function updatepost(Request $resultat)
    {
       $formationModels= new FormationModel;
       
       $formationModels->code=request('code');
       $formation= FormationModel::find($formationModels->code);
       $formationModels->description=request('description');
       $formationModels->libelle=request('libelle');
       $formationModels->datedebut=request('datedebut');
       $formationModels->datefin=request('datefin');

        //video
        $filevideo = $resultat->file('video');
        $namevideo = $filevideo->getClientOriginalName();
        $extension = $filevideo->getClientOriginalExtension();
        $resultat->file('video')->move('storage',$namevideo);
        $formationModels->video=$namevideo;

       //image
       $fileimage = $resultat->file('image');
       $name = $fileimage->getClientOriginalName();
       $extension = $fileimage->getClientOriginalExtension();
       $resultat->file('image')->move('storage',$name);
       $formationModels->image=$name;
           
       


      // $formationModels->save();
       $formationModels = FormationModel::where('code',request('code'))
       ->update(['image'=>$formationModels->image,'video'=>$formationModels->video,
       'description'=>$formationModels->description,'libelle'=>$formationModels->libelle,'datedebut'=>$formationModels->datedebut,'datefin'=>$formationModels->datefin]);

       return view('/ajouterformation');
   }


    public function ajouterformation()
    {
        return view('/ajouterformation');
    }
    public function video($id)
    {
        $video = FormationModel::find($id);
        return view('/video',compact('video'));
    }
    public function supprimer($id)
    {
        $supprimer = FormationModel::find($id);
        $supprimer->delete();
        return view('/ajouterformation',compact('supprimer'));
    }
  
    public function image($id)
    {
        $image = FormationModel::find($id);

        return view('/image',compact('image'));
    }

    public  function envoiformation(Request $resultat)
    {
       $formationModels= new FormationModel;
      
       $formationModels->code=request('code');
       $formationModels->description=request('description');
       $formationModels->libelle=request('libelle');
       $formationModels->datedebut=request('datedebut');
       $formationModels->datefin=request('datefin');

        //video
        $filevideo = $resultat->file('video');
        $namevideo = $filevideo->getClientOriginalName();
        $extension = $filevideo->getClientOriginalExtension();
        $resultat->file('video')->move('storage',$namevideo);
        $formationModels->video=$namevideo;

       //image
       $fileimage = $resultat->file('image');
       $name = $fileimage->getClientOriginalName();
       $extension = $fileimage->getClientOriginalExtension();
       $resultat->file('image')->move('storage',$name);
       $formationModels->image=$name;
           



       $formationModels->save();
       

       return view('/ajouterformation');
   }

   


}
