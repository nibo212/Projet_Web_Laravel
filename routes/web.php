<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\EvaluerController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CandidatureController;
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

Route::get('/login', function () {
    return view('login');
});

Route::get('/offres/stages', function () {
    return view('Offre');
})->name('stage');

Route::get('offres/apprentissage', function () {
    return view('apprentissage');
});

Route::get('/entreprises', function () {
    return view('entreprises');
});

Route::get('OffreE/destroy/{Offre}', [CandidatureController::class, 'destroy']);


// Route::get('/search', [EntrepriseController::class, 'search'])
// ->name("entreprise.search");

Route::get('/search', [EntrepriseController::class, 'search'])
->name("Entreprise.search");

Route::get('/searchoffre', [OffreController::class, 'search'])
->name("Offre.search");

Route::get('/offres/entreprises/template', function () {
    return view('entreprisetemplate');
});

Route::get('/offres/stages/template', function () {
    return view('stagetemplate');
});
Route::get('/userspace/candidatures')
->name("candidature");

Route::get('/userspace', function () {
    return view('userspace');
});

Route::get('/userspace/candidatures', function () {
    return view('candidatures');
});

Route::get('/userspace/tuteurs', function () {
    return view('formtuteurs');
});

Route::get('/userspace/offres', function () {
    return view('formoffres');
});
Route::get('/User/wishlist', [UserController::class, 'wishlist'])
->name("User.wishlist");
// Route::get('/stages', function () {
//     return view('Offre');
// });
Route::get('Offre/add/{Offre}', [WishlistController::class, 'add']);

Route::get('OffreE/add/{Offre}', [CandidatureController::class, 'add']);

Route::get('Entreprise/add/{Entreprise}', [EvaluerController::class, 'add']);

Route::resource('User', UserController::class);

Route::resource('Evaluer', EvaluerController::class);

// Route::resource('Offre', EntrepriseController::class);

Route::resource('candidatures', OffreController::class);
Route::resource('competences', OffreController::class);
Route::resource('concerners', OffreController::class);
Route::resource('droits', OffreController::class);
Route::resource('emails', OffreController::class);
Route::resource('Entreprise', EntrepriseController::class);
Route::resource('etre_interresses', OffreController::class);
Route::resource('evaluers', OffreController::class);
Route::resource('faireconfiances', OffreController::class);
Route::resource('localites', OffreController::class);
Route::resource('Offre', OffreController::class);
Route::resource('possederdroits', OffreController::class);
Route::resource('promotions', OffreController::class);
Route::resource('recherchers', OffreController::class);
Route::resource('souhaiters', OffreController::class);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
