<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormationModel;
use Carbon\Carbon;
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
       $this->validate($resultat, [
        'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
        ]);
        $this->validate($resultat, [
            'image' => 'required|mimes:jpg,png,jpeg',
            ]);
       request()->validate([
        'code' => ['required'],
        'description' => ['required'],
        'libelle' => ['required'],
        'video' => ['required'],
        'datedebut' => ['required'],
        'datefin' => ['required'],
        'image' => ['required'],
    ]);
       $formationModels->code=request('code');
       $formation= FormationModel::find($formationModels->code);
       $formationModels->description=request('description');
       $formationModels->libelle=request('libelle');
       $formationModels->datedebut=request('datedebut');
       $formationModels->datefin=request('datefin');

       $date1 = Carbon::parse($formationModels->datedebut);
       $date2 = Carbon::parse($formationModels->datefin);
      
 
       $result = $date2->gt($date1);

        //video
        $filevideo = $resultat->file('video');
        $namevideo = $filevideo->getClientOriginalName();
        $extensionvideo = $filevideo->getClientOriginalExtension();
        $resultat->file('video')->move('storage',$namevideo);
        $formationModels->video=$namevideo;

       //image
       $fileimage = $resultat->file('image');
       $name = $fileimage->getClientOriginalName();
       $extensionimage = $fileimage->getClientOriginalExtension();
       $resultat->file('image')->move('storage',$name);
       $formationModels->image=$name;
           
    
      


      

       if($result)
               {
        
       $formationModels = FormationModel::where('code',request('code'))
       ->update(['image'=>$formationModels->image,'video'=>$formationModels->video,
       'description'=>$formationModels->description,'libelle'=>$formationModels->libelle,'datedebut'=>$formationModels->datedebut,'datefin'=>$formationModels->datefin]);
        return redirect('/ajouterformation');
               }
               
      return back();
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
       return back();
    }
  
    public function image($id)
    {
        $image = FormationModel::find($id);

        return view('/image',compact('image'));
    }

    public function afficherformation()
    {
        $afficherformation = FormationModel::all();

        return view('/afficherformation',compact('afficherformation'));
    }

    public  function envoiformation(Request $resultat)
    {
       $formationModels= new FormationModel;
       request()->validate([
        'code' => ['required'],
        'description' => ['required'],
        'libelle' => ['required'],
        'video' => ['required'],
        'datedebut' => ['required'],
        'datefin' => ['required'],
        'image' => ['required'],
    ]);
      
       $formationModels->code=request('code');
       $formationModels->description=request('description');
       $formationModels->libelle=request('libelle');
       $formationModels->datedebut=request('datedebut');
       $formationModels->datefin=request('datefin');
       $date1 = Carbon::parse($formationModels->datedebut);
       $date2 = Carbon::parse($formationModels->datefin);
      
 
       $result = $date2->gt($date1);
    
       

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
           


               if($result)
               {
                $formationModels->save();
                return back();
               }
       
       $date="les dates ne sont pas bien choisi";
     
       return view('/ajouterformation',compact('date'));
   }

   


}
