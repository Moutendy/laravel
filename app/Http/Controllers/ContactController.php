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

    public function updatecontact($id)
    {
       
        $contactModels = ContactModel::find($id);
        return view('updatecontact',compact('contactModels'));
    }

   
    public function deletecontact($id)
    {
       
        $supprimer = ContactModel::find($id);
        $supprimer->delete();
        return view('ajoutercontact');
    }


    public  function envoicontact(Request $resultat)
    {
      $contactModels= new ContactModel ;
       
      request()->validate([
        'adressemail' => ['required'],
        'tel' => ['required'],
        'adressepostal' => ['required'],
      
    ]);

       $contactModels->adressemail=request('adressemail');
       $contactModels->tel=request('tel');
       $contactModels->adressepostal=request('adressepostal');
       $contactModels->save();
       $contact = ContactModel::all();

       return view('ajoutercontact',compact('contact'));
   }


   public  function updatecontactpost(Request $resultat)
   {
      $contact= new ContactModel;
      
      request()->validate([
       'adressemail' => ['required'],
       'tel' => ['required'],
       'adressepostal' => ['required'],
     
   ]);
   $contact->adressemail=request('adressemail');
     
   $contact->tel=request('tel');
   $contact->adressepostal=request('adressepostal');

   $contact = ContactModel::where('adressemail',request('adressemail'))->update([
      'tel'=> $contact->tel,'adressepostal'=>$contact->adressepostal]);
   
      return view('ajoutercontact');
  }
}
