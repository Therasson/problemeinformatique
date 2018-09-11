<?php

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

Route::get('/', 'CoreController@index');

Route::get('qui-sommes-nous', 'AboutUsController@index');

Route::get('demande-d-intervention', 'DemandeDinterventionController@index');

Route::get('achat-de-materiel', 'AchatController@index');
Route::get('achat-de-materiel/ordinateur-neuf', 'AchatController@ordinateurNeuf');
Route::get('achat-de-materiel/ordinateur-occasion', 'AchatController@ordinateurOccasion');
Route::get('achat-de-materiel/accesoire', 'AchatController@accessoire');

Route::get('details-produits', 'TempController@details');
Route::get('panier', 'TempController@panier');
Route::get('passer-commande', 'TempController@passezCommande');
Route::get('valider', 'TempController@valider');

Route::get('services-aux-particuliers', 'ServiceParticulierController@index');

Route::get('services-aux-entreprises', 'ServiceEntrepriseController@index');

Route::get('foire-aux-questions', 'FaqController@index');

Route::get('base-de-connaissance', 'BaseConnaissanceController@index');


Route::get('aidez-moi', 'AideController@index');

Route:: get('en-savoir-plus', 'EnsavoirController@index');



/******************************************************************************************/
/******************** ROUTE ADMINISTRATION ************************************************/
/******************************************************************************************/
Route::get('admin', 'Admin\AdminController@index');

Route::resource('admin/categorie', 'Admin\CategorieController');
Route::get('admin/commande/new', 'Admin\CommandeController@new');
Route::get('admin/commande/en-cours', 'Admin\CommandeController@enCours');
Route::get('admin/commande/livree', 'Admin\CommandeController@livree');

Route::resource('admin/produit', 'Admin\ProduitController');

Route::resource('admin/base-de-connaissance', 'Admin\BaseConnaissanceController');

Route::resource('admin/partenaire', 'Admin\PartenaireController');

Route::resource('admin/utilisateur', 'Admin\UserController');