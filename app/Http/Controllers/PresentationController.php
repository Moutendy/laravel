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

    public function updatepresentation($id)
    {
        $formation= PresentationModel::find($id);

        return view('/updatepresentation',compact('formation'));
    }

    public function video($id)
    {
        $video = PresentationModel::find($id);
        return view('/video',compact('video'));
    }
    
    public function image($id)
    {
        $image = PresentationModel::find($id);

        return view('/image',compact('image'));
    }
    public function supprimer($id)
    {
        $supprimer = PresentationModel::find($id);
        $supprimer->delete();
       return back();;
    }
    public  function updatepost(Request $resultat)
    {
       $formationModels= new PresentationModel;
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
       
        'image' => ['required'],
    ]);
       $formationModels->code=request('code');
       $formation= PresentationModel::find($formationModels->code);
       $formationModels->description=request('description');
       $formationModels->libelle=request('libelle');
      

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
           
    
      


      // $formationModels->save();
       $formationModels = PresentationModel::where('code',request('code'))
       ->update(['image'=>$formationModels->image,'video'=>$formationModels->video,
       'description'=>$formationModels->description,'libelle'=>$formationModels->libelle]);
    
       return redirect('/ajouterpresentation');
   }


  public  function envoipresentation(Request $resultat)
     {
        $formationModels= new PresentationModel;
       request()->validate([
        'code' => ['required'],
        'description' => ['required'],
        'libelle' => ['required'],
        'video' => ['required'], 
        'image' => ['required'],
    ]);
      
       $formationModels->code=request('code');
       $formationModels->description=request('description');
       $formationModels->libelle=request('libelle');
    
   

       

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
       

       return back();
    }
}