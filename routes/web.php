<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [loginController::class,"login"])->name('login');
Route::get('/registration', [loginController::class,"registration"])->name('registration');
Route::post('/registreentreprise', [loginController::class,"registreentreprise"])->name('registreentreprise');
Route::post('/loginentreprise', [loginController::class,"loginentreprise"])->name('loginentreprise');
Route::get('/dachbord', [loginController::class,"dachbord"])->name('dachbord')->middleware('isloged');
Route::get('/logout', [loginController::class,"logout"])->name('logout');
Route::get('/index', [loginController::class,"index"])->name('index');
Route::get('/home', [loginController::class,"home"])->name('home');
Route::get('/profil', [loginController::class,"profil"])->name('profil');
Route::post('/updateprofil', [loginController::class,"updateprofil"])->name('updateprofil');//impossible to syft image in url so we syfto in body
Route::get('/addcampanie', [loginController::class,"addcampanie"])->name('addcampanie');
Route::post('/addingcompanie', [loginController::class,"addingcompanie"])->name('addingcompanie');
Route::get('/yourcampanies', [loginController::class,"yourcampanies"])->name('yourcampanies');
Route::get('/updatecampanie/{id}', [loginController::class,"updatecampanie"])->name('updatecampanie');
Route::post('/updatingcampanie', [loginController::class,"updatingcampanie"])->name('updatingcampanie');
Route::get('/deletecampanie/{id}', [loginController::class,"deletecampanie"])->name('deletecampanie');
Route::get('/search', [loginController::class,"search"])->name('search');
Route::post('/profcomp', [loginController::class,"profcamp"])->name('profcomp');
Route::get('/profcomphome/{id}', [loginController::class,"profcomphome"])->name('profcomphome');
Route::get('/profilewhithoutinputs', [loginController::class,"profilewhithoutinputs"])->name('profilewhithoutinputs');
Route::get('/affprofilecampanies/{city}', [loginController::class,"affprofilecampanies"])->name('affprofilecampanies');










