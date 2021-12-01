<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\temoingnage;

class TemoingnageController extends Controller
{
    //

    public function ajoutertemoingage()
    {
        return view('/ajoutertemoingnage');
    }

    public function envoitemoignage()
    {


        
        $temoingnages= new temoingnage;
        
        $temoingnages->code=request('code');
        $temoingnages->description=request('description');
        $temoingnages->lien=request('lien');
        $temoingnages->save();
        return redirect('/ajoutertemoingage');
        
    }

    public function affichermoingage()
    {


        
     
        $livreaffiche = temoingnage::all();
        return view('actualitetemoingnag',['livre'=>$livreaffiche]);
        
       
        
    }

}
