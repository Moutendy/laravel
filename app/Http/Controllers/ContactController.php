<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;
 

class ContactController extends Controller
{
    //

    public function ajoutercontact()
    {
        return view('ajoutercontact');
    }


    public  function envoicontact(Request $resultat)
    {
      $contactModels= new ContactModel ;
      
       $contactModels->adressemail=request('adressemail');
       $contactModels->tel=request('tel');
       $contactModels->adressepostal=request('adressepostal');
       $contactModels->save();
       $contact = ContactModel::all();
       return view('ajoutercontact',compact('contact'));
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
     
   ]);
      $livreAModel->code=request('code');
     
      $livreAModel->description=request('description');
      $livreAModel->libelle=request('libelle');

      $livreAModel = LivreAModel::where('code',request('code'))->update([
      'description'=>$livreAModel->description,'libelle'=>$livreAModel->libelle]);
   
      return back();
  }
}
