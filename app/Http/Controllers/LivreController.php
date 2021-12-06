<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LivreAModel;

class LivreController extends Controller
{
    //

    public function ajouterlivre()
    {
        return view('livre');
    }

    public function supprimerlivre($id)
    {
        $supprimer = LivreAModel::find($id);
        $supprimer->delete();
       return back();;
    }
  public function  ajouterlivrepost(Request $resultat){

        request()->validate([
            'code' => ['required'],
            'description' => ['required'],
            'libelle' => ['required'],
            'image' => ['required'],
            'video' => ['required'],
        ]);
        $livre = new LivreAModel;
     
        $livre->code=request('code');
        $livre->description=request('description');
        $livre->libelle=request('libelle');

         //video
        $filevideo = $resultat->file('video');
        $namevideo = $filevideo->getClientOriginalName();
        $extension = $filevideo->getClientOriginalExtension();
        $resultat->file('video')->move('storage',$namevideo);
        $livre->video=$namevideo;

       //image
       $fileimage = $resultat->file('image');
       $name = $fileimage->getClientOriginalName();
       $extension = $fileimage->getClientOriginalExtension();
       $resultat->file('image')->move('storage',$name);
       $livre->image=$name;
           
        $livre->save();
        return back();
    
    }

    

    public function updatelivre($id)
    {
        $livres= LivreAModel::find($id);

        return view('updatelivre',compact('livres'));
    }
    public function image($id)
    {
        $image = LivreAModel::find($id);

        return view('/image',compact('image'));
    }
 
    public function downloadlivre($id)
    {   
        $video = LivreAModel::find($id);
     return view('/video',compact('video'));
    }

      
    public  function updatelivrepost(Request $resultat)
    {
       $livreAModel= new LivreAModel;
       $this->validate($resultat, [
        'video' => 'required|mimes:pdf',
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
       $livreAModel->code=request('code');
      
       $livreAModel->description=request('description');
       $livreAModel->libelle=request('libelle');
      

        //video
        $filevideo = $resultat->file('video');
        $namevideo = $filevideo->getClientOriginalName();
        $extensionvideo = $filevideo->getClientOriginalExtension();
        $resultat->file('video')->move('storage',$namevideo);
        $livreAModel->video=$namevideo;

       //image
       $fileimage = $resultat->file('image');
       $name = $fileimage->getClientOriginalName();
       $extensionimage = $fileimage->getClientOriginalExtension();
       $resultat->file('image')->move('storage',$name);
       $livreAModel->image=$name;
           
    
      


      // $formationModels->save();
       $livreAModel = LivreAModel::where('code',request('code'))->update(['image'=>$livreAModel->image,'video'=>$livreAModel->video,
       'description'=>$livreAModel->description,'libelle'=>$livreAModel->libelle]);
    
       return back();
   }
}
