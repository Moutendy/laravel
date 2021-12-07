<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\TemoignageModel;

class TemoingnageController extends Controller
{
    //

    public function ajoutertemoignage()
    {
        return view('temoignage');
    }

    public function envoitemoignage()
    {


        
        $temoingnages= new TemoignageModel;
        
        $temoingnages->code=request('code');
        $temoingnages->description=request('description');
        $temoingnages->image=request('image');
        $temoingnages->video=request('video');
        $temoingnages->save();
        return back();
        
    }

    public function affichermoingage()
    {
         
        $temoingnage = TemoignageModel::all();
        return view('actualitetemoignage',compact('temoingnage'));    
    }

    public function updatetemoingnages($id)
    {
        $temoignage= TemoignageModel::find($id);

        return view('/updatetemoingnagespost',compact('temoignage'));
    }

    public function videotemoingnages($id)
    {
        $video = TemoignageModel::find($id);
        return view('/video',compact('video'));
    }
    
    public function imagetemoingnages($id)
    {
        $image = TemoignageModel::find($id);

        return view('/image',compact('image'));
    }

    public function supprimertemoingnage($id)
    {
        $supprimer = TemoignageModel::find($id);

        $supprimer->delete();

       return back();
    }
   

    public  function updatetemoingnagespost(Request $resultat)
    {
       $temoignageModel= new TemoignageModel;
      
       
       $temoignageModel->code=request('code');
    
       $temoignageModel->description=request('description');
  
      

        //video
        $filevideo = $resultat->file('video');
        $namevideo = $filevideo->getClientOriginalName();
        $extensionvideo = $filevideo->getClientOriginalExtension();
        $resultat->file('video')->move('storage',$namevideo);
        $temoignageModel->video=$namevideo;

       //image
       $fileimage = $resultat->file('image');
       $name = $fileimage->getClientOriginalName();
       $extensionimage = $fileimage->getClientOriginalExtension();
       $resultat->file('image')->move('storage',$name);
       $temoignageModel->image=$name;
           
    
      


      // $formationModels->save();
      $temoignageModel =TemoignageModel::where('code',request('code'))
       ->update(['image'=>$temoignageModel->image,'video'=>$temoignageModel->video,
       'description'=>$temoignageModel->description]);
    
       return view('temoignage')->with("modifier!!");
   }


}
