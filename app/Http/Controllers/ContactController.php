<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;
 

class ContactController extends Controller
{
    //

    public function ajoutercontact()
    {
        return view('/ajoutercontact');
    }


    public  function envoicontact(Request $resultat)
    {
      $contactModels= new ContactModel ;
      
       $contactModels->code=request('code');
       $contactModels->description=request('description');
       $contactModels->libelle=request('libelle');
       $contactModels->lien=request('lien');
       $contactModels->save();
        
       $contactModels = ContactModel::all();
     

       return view('/ajoutercontact',['contactModel'=>$contactModels]);
   }
}
