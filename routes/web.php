<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;

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

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin
Route::get('administrateur/home', [App\Http\Controllers\admin\HomeAdminController::class, 'index'])->name('homeAdmin')->middleware('role:admin');
Route::get('/administrateur/vue-vacancier', [App\Http\Controllers\admin\VacancierController::class, 'index'])->name('AdminViewVacanciers')->middleware('role:admin');
Route::post('/administrateur/vue-vacancier/modification/{id}', [App\Http\Controllers\admin\VacancierController::class, 'update'])->name('UpdateVacancier')->middleware('role:admin');
Route::get('/administrateur/vue-vacancier/modifier/{id}', [App\Http\Controllers\admin\VacancierController::class, 'updatepage'])->name('ViewUpdateVacancier')->middleware('role:admin');
Route::get('/administrateur/vue-vacancier/supprimer/{id}', [App\Http\Controllers\admin\VacancierController::class, 'delete'])->name('ViewDeleteVacancier')->middleware('role:admin');

Route::get('/administrateur/vue-organisme', [App\Http\Controllers\admin\OrganismeController::class, 'index'])->name('AdminViewOrganismes')->middleware('role:admin');
Route::post('/administrateur/vue-organisme/modification/{id}', [App\Http\Controllers\admin\OrganismeController::class, 'update'])->name('UpdateOrganisme')->middleware('role:admin');
Route::get('/administrateur/vue-organisme/modifier/{id}', [App\Http\Controllers\admin\OrganismeController::class, 'updatepage'])->name('ViewUpdateOrganisme')->middleware('role:admin');
Route::get('/administrateur/vue-organisme/supprimer/{id}', [App\Http\Controllers\admin\OrganismeController::class, 'delete'])->name('ViewDeleteOrganisme')->middleware('role:admin');

Route::get('/administrateur/vue-administrateurs', [App\Http\Controllers\admin\AdministrateurController::class, 'index'])->name('AdminViewAdministrateurs')->middleware('role:admin');


//organisme
Route::get('organisme/home', [App\Http\Controllers\organisme\HomeOrganismeController::class, 'indexOrganisme'])->name('homeOrganisme')->middleware('role:organisme| vacancier');

//Annonce
Route::get('organisme/creer-annonce', [App\Http\Controllers\annonce\AnnonceController::class, 'create'])->name('vueCreerAnnonce')->middleware('role:organisme');
Route::post('organisme/creation-annonce', [App\Http\Controllers\annonce\AnnonceController::class, 'store'])->name('CreerAnnonce')->middleware('role:organisme');
Route::get('vacancier/vue-annonce', [App\Http\Controllers\annonce\AnnonceController::class, 'indexVacancier'])->name('VueAnnonceVacancier')->middleware('role:vacancier');
Route::get('organisme/supprimer-annonce/{id}', [App\Http\Controllers\annonce\AnnonceController::class, 'delete'])->name('ViewDeleteAnnonce')->middleware('role:organisme');

//vacancier
Route::get('vacancier/home', [App\Http\Controllers\organisme\HomeOrganismeController::class, 'indexVacancier'])->name('homeVacancier')->middleware('role:vacancier');


//postulations
Route::get('organisme/postulation',[App\Http\Controllers\postulation\PostulationController::class, 'indexOrganisme'])->name('postulationOrganisme')->middleware('role:organisme');
Route::post('vacancier/postulation/{id}',[App\Http\Controllers\postulation\PostulationController::class, 'postuler'])->name('postulationVacancier')->middleware('role:vacancier');
Route::get('vacancier/postulation/vue',[App\Http\Controllers\postulation\PostulationController::class, 'storeVacancier'])->name('vuepostulationVacancier')->middleware('role:vacancier');
Route::get('organisme/postulation/vue',[App\Http\Controllers\postulation\PostulationController::class, 'storeOrganisme'])->name('vuepostulationOrganisme')->middleware('role:organisme');
Route::get('organisme/postulation/annonce/{id}',[App\Http\Controllers\postulation\PostulationController::class, 'seePostByAd'])->name('seePostByAd')->middleware('role:organisme');

//Profil
Route::post('vacancier/enregistrement-profile',[App\Http\Controllers\profile\ProfileController::class, 'store'])->name('vacancierSaveProfil')->middleware('role:vacancier');
Route::get('vacancier/edit-profile',[App\Http\Controllers\profile\ProfileController::class, 'edit'])->name('vacancierEditProfil')->middleware('role:vacancier');
Route::get('vacancier/show-profile',[App\Http\Controllers\profile\ProfileController::class, 'show'])->name('vacancierShowProfil')->middleware('role:vacancier');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
