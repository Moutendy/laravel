<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemoingnageController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\UserformationController;
use App\Http\Controllers\AuthentificationsController;

use App\Models\PresentationModel;
use App\Models\FormationModel;



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


Route::get('/', function () {
    $presentation= PresentationModel::all();
    $formation= FormationModel::all();


    if($presentation)
    return view('welcome',compact('presentation'));

    
    if($formation)
    return view('welcome',compact('formation'));
});



require __DIR__.'/auth.php';

 //router user
Route::middleware(['auth','user_type:user'])->group(function()
{
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
  //afficher les page des formations 
Route::get('/livreformation', [UserformationController::class, 'livre']);

Route::get('/formationuser', [UserformationController ::class, 'formation']);

});


Route::middleware(['auth'])->group(function()
{
  

//regarder les formations
Route::get('/image/{id}', [FormationController::class, 'image']);

Route::get('/video/{id}', [FormationController::class, 'video']);
});





 //router admin
Route::middleware(['auth', 'isAdmin'])->group(function () {
  Route::get('/homehadmin', [AdminController::class, 'homeadmin']);
//router temoignage
Route::get('/ajoutertemoignage', [TemoingnageController::class, 'ajoutertemoignage']);

Route::post('/envoitemoignage', [TemoingnageController::class, 'envoitemoignage']);

Route::get('/actualitetemoingnage', [TemoingnageController::class, 'affichermoingage']);




Route::get('/supprimertemoingnages/{id}', [TemoingnageController::class, 'supprimertemoingnage']);

Route::get('/updatetemoingnages/{id}', [TemoingnageController::class, 'updatetemoingnages']);

Route::post('/updatetemoingnagespost', [TemoingnageController::class, 'updatetemoingnagespost']);

//router presentation
Route::get('/ajouterpresentation', [PresentationController::class, 'ajouterpresentation']);

Route::post('/envoipresentation', [PresentationController::class, 'envoipresentation']);


Route::get('/supprimerpresentation/{id}', [PresentationController::class, 'supprimer']);

Route::get('/updatepresentation/{id}', [PresentationController::class, 'updatepresentation']);


//router formation
Route::get('/afficherformation', [FormationController::class, 'afficherformation']);

Route::get('/ajouterformation', [FormationController::class, 'ajouterformation']);

Route::post('/envoiformation', [FormationController::class, 'envoiformation']);


Route::get('/supprimer/{id}', [FormationController::class, 'supprimer']);

Route::get('/update/{id}', [FormationController::class, 'update']);

Route::post('/updatepost', [FormationController::class, 'updatepost']);

Route::post('/updatepostpresentation', [PresentationController::class, 'updatepost']);

//router contact
Route::get('/ajoutercontact', [ContactController::class, 'ajoutercontact']);

Route::post('/envoicontact', [ContactController::class, 'envoicontact']);

Route::get('/updatecontact/{id}', [ContactController::class, 'updatecontact']);

Route::post('/updatecontactpost', [ContactController::class, 'updatecontactpost']);

Route::get('/deletecontact/{id}', [ContactController::class, 'deletecontact']);







//route livre
Route::get('/livre',  [ LivreController::class, 'ajouterlivre']);

Route::get('/imagelivre/{id}',  [ LivreController::class, 'image']);

Route::get('/supprimerlivre/{id}',  [ LivreController::class, 'supprimerlivre']);


Route::get('/updatelivre/{id}',  [ LivreController::class, 'updatelivre']);

Route::post('/updatelivrepost',  [ LivreController::class, 'updatelivrepost']);
//a ajouter coter user
Route::get('/lirelivre/{livre}',[ LivreController::class, 'downloadlivre']);

Route::post('/downloadlivre',  [ LivreController::class, 'ajouterlivrepost']);


    });

    Route::get('/authentification',  [ AuthentificationsController::class, 'authentification']);

    Route::get('/imagepresentation/{id}', [PresentationController::class, 'image']);

    Route::get('/videopresentation/{id}', [PresentationController::class, 'video']);

    Route::get('/imagetemoingnages/{id}', [TemoingnageController::class, 'imagetemoingnages']);

Route::get('/videotemoingnages/{id}', [TemoingnageController::class, 'videotemoingnages']);