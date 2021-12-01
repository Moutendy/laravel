<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemoingnageController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/laravel', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/inscription', function () {
    return view('inscription');
});
Route::post('/livre', function () {

    request()->validate([
        'code' => ['required'],
        'description' => ['required'],
        'libelle' => ['required'],
        'lien' => ['required'],
    ]);
    $livre = new App\Models\livre;

    $livre->code=request('code');
    $livre->description=request('description');
    $livre->libelle=request('libelle');
    $livre->lien=request('lien');
    $livre->save();

    return "nous avons reçu votre code ".request('code')." et votre ".request('description'). " libelle ".request('libelle');
});

Route::get('/livre', function () {
    $livreaffiche = App\Models\livre::all(); 
    return view('livre',['livre'=>$livreaffiche]);
}); 

Route::get('/livreaffiche', function () {
    
    $livreaffiche = App\Models\livre::all();  
    return view('livreaffiche',['livre'=>$livreaffiche]);
}); 

Route::get('/livreaffiche/{id}', function ($id) {
    
    $id = App\Models\livre::find($id);  
     $id->delete();
     
    return view('livreaffiche',['livre'=>$id]);
});
//router temoignage
Route::get('/ajoutertemoingage', [TemoingnageController::class, 'ajoutertemoingage']);

Route::post('/envoitemoignage', [TemoingnageController::class, 'envoitemoignage']);

Route::get('/actualitetemoingnage', [TemoingnageController::class, 'affichermoingage']);

//router presentation
Route::get('/ajouterpresentation', [PresentationController::class, 'ajouterpresentation']);

Route::post('/envoipresentation', [PresentationController::class, 'envoipresentation']);

Route::get('/actualitepresentation', [TemoingnageController::class, 'afficherpresentation']);


//router formation
Route::get('/ajouterformation', [FormationController::class, 'ajouterformation']);

Route::post('/envoiformation', [FormationController::class, 'envoiformation']);

Route::get('/actualiteformation', [FormationController::class, 'afficherformation']);


//router contact
Route::get('/ajoutercontact', [ContactController::class, 'ajoutercontact']);

Route::post('/envoicontact', [ContactController::class, 'envoicontact']);

Route::get('/actualitecontact', [ContactController::class, 'affichercontact']);


//router admin
Route::get('/ajouteradmin', [AdminController::class, 'ajouteradmin']);

Route::post('/envoiadmin', [AdminController::class, 'envoiadmin']);

Route::get('/actualiteadmin', [AdminController::class, 'afficheradmin']);


