<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemoingnageController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\UserformationController;


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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
//router temoignage
Route::get('/ajoutertemoignage', [TemoingnageController::class, 'ajoutertemoignage']);

Route::post('/envoitemoignage', [TemoingnageController::class, 'envoitemoignage']);

Route::get('/actualitetemoingnage', [TemoingnageController::class, 'affichermoingage']);


Route::get('/imagetemoingnages/{id}', [TemoingnageController::class, 'imagetemoingnages']);

Route::get('/videotemoingnages/{id}', [TemoingnageController::class, 'videotemoingnages']);

Route::get('/supprimertemoingnages/{id}', [TemoingnageController::class, 'supprimertemoingnage']);

Route::get('/updatetemoingnages/{id}', [TemoingnageController::class, 'updatetemoingnages']);

Route::post('/updatetemoingnagespost', [TemoingnageController::class, 'updatetemoingnagespost']);

//router presentation
Route::get('/ajouterpresentation', [PresentationController::class, 'ajouterpresentation']);

Route::post('/envoipresentation', [PresentationController::class, 'envoipresentation']);

Route::get('/imagepresentation/{id}', [PresentationController::class, 'image']);

Route::get('/videopresentation/{id}', [PresentationController::class, 'video']);

Route::get('/supprimerpresentation/{id}', [PresentationController::class, 'supprimer']);

Route::get('/updatepresentation/{id}', [PresentationController::class, 'updatepresentation']);


//router formation
Route::get('/afficherformation', [FormationController::class, 'afficherformation']);

Route::get('/ajouterformation', [FormationController::class, 'ajouterformation']);

Route::post('/envoiformation', [FormationController::class, 'envoiformation']);

Route::get('/image/{id}', [FormationController::class, 'image']);

Route::get('/video/{id}', [FormationController::class, 'video']);

Route::get('/supprimer/{id}', [FormationController::class, 'supprimer']);

Route::get('/update/{id}', [FormationController::class, 'update']);

Route::post('/updatepost', [FormationController::class, 'updatepost']);

Route::post('/updatepostpresentation', [PresentationController::class, 'updatepost']);



//router user
Route::get('/livreformation', [UserformationController::class, 'livre']);

Route::get('/formationuser', [UserformationController ::class, 'formation']);


//router contact
Route::get('/ajoutercontact', [ContactController::class, 'ajoutercontact']);

Route::post('/envoicontact', [ContactController::class, 'envoicontact']);

Route::get('/updatecontact/{id}', [ContactController::class, 'updatecontact']);

Route::post('/updatecontactpost', [ContactController::class, 'updatecontactpost']);

Route::get('/deletecontact/{id}', [ContactController::class, 'deletecontact']);



//router aut admin
Route::get('/authadmin', [AdminController::class, 'ajouteradmin']);

Route::get('/homehadmin', [AdminController::class, 'homeadmin']);

//route livre
Route::get('/livre',  [ LivreController::class, 'ajouterlivre']);

Route::get('/imagelivre/{id}',  [ LivreController::class, 'image']);

Route::get('/supprimerlivre/{id}',  [ LivreController::class, 'supprimerlivre']);


Route::get('/updatelivre/{id}',  [ LivreController::class, 'updatelivre']);

Route::post('/updatelivrepost',  [ LivreController::class, 'updatelivrepost']);

Route::get('/lirelivre/{livre}',[ LivreController::class, 'downloadlivre']);

Route::post('/downloadlivre',  [ LivreController::class, 'ajouterlivrepost']);
 


Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', function () {
      return view('admin.dashboard');
    })->name('dashboard');
  });