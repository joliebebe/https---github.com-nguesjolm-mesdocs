<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
use App\Http\Controllers\ActeDecesController;
use App\Http\Controllers\ActeMariageController;
use App\Http\Controllers\ActeNaissanceEtrangController;
use App\Http\Controllers\CasierJudiciaireEtrangereController;
use App\Http\Controllers\CasierJudiciaireController;
use App\Http\Controllers\CertificationDocumentController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\CopieIntegraleDecesController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\LegalisationSignatureController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\StatutController;
use App\Http\Controllers\TypeActeController;
use App\Http\Controllers\TypeJuridiqueController;

/*
|__________________________________________________________________________
| API Routes
|__________________________________________________________________________
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('/actes_deces', [ActeDecesController::class, 'index']);
Route::post('/actes_deces', [ActeDecesController::class, 'store']);
Route::get('/actes_deces/{id}', [ActeDecesController::class, 'show']);
Route::put('/actes_deces/{id}', [ActeDecesController::class, 'update']);
Route::delete('/actes_deces/{id}', [ActeDecesController::class, 'destroy']);

Route::get('/actes_mariage', 'ActeMariageController@index');
Route::post('/actes_mariage', 'ActeMariageController@store');
Route::get('/actes_mariage/{id}', 'ActeMariageController@show');
Route::put('/actes_mariage/{id}', 'ActeMariageController@update');
Route::delete('/actes_mariage/{id}', 'ActeMariageController@destroy');

Route::get('/actes_naissance_etrang', 'ActeNaissanceEtrangController@index');
Route::post('/actes_naissance_etrang', 'ActeNaissanceEtrangController@store');
Route::get('/actes_naissance_etrang/{id}', 'ActeNaissanceEtrangController@show');
Route::put('/actes_naissance_etrang/{id}', 'ActeNaissanceEtrangController@update');
Route::delete('/actes_naissance_etrang/{id}', 'ActeNaissanceEtrangController@destroy');

Route::get('/actes_naissance', 'ActeNaissanceController@index');
Route::post('/actes_naissance', 'ActeNaissanceController@store');
Route::get('/actes_naissance/{id}', 'ActeNaissanceController@show');
Route::put('/actes_naissance/{id}', 'ActeNaissanceController@update');
Route::delete('/actes_naissance/{id}', 'ActeNaissanceController@destroy');

Route::get('/casiers_judiciaires_etrangere', 'CasierJudiciaireEtrangereController@index');
Route::post('/casiers_judiciaires_etrangere', 'CasierJudiciaireEtrangereController@store');
Route::get('/casiers_judiciaires_etrangere/{id}', 'CasierJudiciaireEtrangereController@show');
Route::put('/casiers_judiciaires_etrangere/{id}', 'CasierJudiciaireEtrangereController@update');
Route::delete('/casiers_judiciaires_etrangere/{id}', 'CasierJudiciaireEtrangereController@destroy');

Route::get('/casiers_judiciaires', 'CasierJudiciaireController@index');
Route::post('/casiers_judiciaires', 'CasierJudiciaireController@store');
Route::get('/casiers_judiciaires/{id}', 'CasierJudiciaireController@show');
Route::put('/casiers_judiciaires/{id}', 'CasierJudiciaireController@update');
Route::delete('/casiers_judiciaires/{id}', 'CasierJudiciaireController@destroy');

Route::post('users','usersController@index');

Route::get('/certification_documents', 'CertificationDocumentController@index');
Route::post('/certification_documents', 'CertificationDocumentController@store');
Route::get('/certification_documents/{id}', 'CertificationDocumentController@show');
Route::put('/certification_documents/{id}', 'CertificationDocumentController@update');
Route::delete('/certification_documents/{id}', 'CertificationDocumentController@destroy');

Route::get('/commandes', 'CommandeController@index');
Route::post('/commandes', 'CommandeController@store');
Route::get('/commandes/{id}', 'CommandeController@show');
Route::put('/commandes/{id}', 'CommandeController@update');
Route::delete('/commandes/{id}', 'CommandeController@destroy');

Route::get('/copies_deces', 'CopieIntegraleDecesController@index');
Route::post('/copies_deces', 'CopieIntegraleDecesController@store');
Route::get('/copies_deces/{id}', 'CopieIntegraleDecesController@show');
Route::put('/copies_deces/{id}', 'CopieIntegraleDecesController@update');
Route::delete('/copies_deces/{id}', 'CopieIntegraleDecesController@destroy');

Route::get('/document', 'DocumentController@index');
Route::post('/document', 'DocumentController@store');
Route::get('/document/{id}', 'DocumentController@show');
Route::put('/document/{id}', 'DocumentController@update');
Route::delete('/document/{id}', 'DocumentController@destroy');

Route::get('/legalisation_signature', 'LegalisationSignatureController@index');
Route::post('/legalisation_signature', 'LegalisationSignatureController@store');
Route::get('/legalisation_signature/{id}', 'LegalisationSignatureController@show');
Route::put('/legalisation_signature/{id}', 'LegalisationSignatureController@update');
Route::delete('/legalisation_signature/{id}', 'LegalisationSignatureController@destroy');

Route::get('/paiement', 'PaiementController@index');
Route::post('/paiement', 'PaiementController@store');
Route::get('/paiement/{id}', 'PaiementController@show');
Route::put('/paiement/{id}', 'PaiementController@update');
Route::delete('/paiement/{id}', 'PaiementController@destroy');

Route::get('/statut', 'StatutController@index');
Route::post('/statut', 'StatutController@store');
Route::get('/statut/{id}', 'StatutController@show');
Route::put('/statut/{id}', 'StatutController@update');
Route::delete('/statut/{id}', 'StatutController@destroy');

Route::get('/types_acte', 'TypeActeController@index');
Route::post('/types_acte', 'TypeActeController@store');
Route::get('/types_acte/{id}', 'TypeActeController@show');
Route::put('/types_acte/{id}', 'TypeActeController@update');
Route::delete('/types_acte/{id}', 'TypeActeController@destroy');

Route::get('/types_juridiques', 'TypeJuridiqueController@index');
Route::post('/types_juridiques', 'TypeJuridiqueController@store');
Route::get('/types_juridiques/{id}', 'TypeJuridiqueController@show');
Route::put('/types_juridiques/{id}', 'TypeJuridiqueController@update');
Route::delete('/types_juridiques/{id}', 'TypeJuridiqueController@destroy');

Route::middleware('auth:sanctum')_>post('/user', function (Request $request) {
    return $request_>user();
});