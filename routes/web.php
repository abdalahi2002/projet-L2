<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\Admin\UserController;
use App\Models\Necessiteux;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BénévoleController;
use App\Http\Controllers\DonController;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\NecessiteuxController;

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
Route::middleware(['utilisateur'])->group(function(){
    Route::get('benevole',[BénévoleController::class, 'index'])->name('benevole.index');
    Route::get('/benevole/create', [BénévoleController::class, 'Create'])->name('benevole.create');
    Route::post('/benevole/create', [BénévoleController::class, 'store'])->name('benevole.store');
    Route::get('benevole/{benevole}/edit' , [BénévoleController::class, 'edit'])->name('benevole.edit');;
    Route::patch('/benevole/{id}' , [BénévoleController::class, 'update'])->name('benevole.update');
    Route::delete('/benevole/{id}', [BénévoleController::class, 'destroy'])->name('benevole.destory');
    Route::get('necessiteux',[NecessiteuxController::class, 'index'])->name('necessiteux.index');
    Route::get('/necessiteux/create',[NecessiteuxController::class,'Create'])->name('necessiteux.create');
    Route::post('/necessiteux/create',[NecessiteuxController::class,'store'])->name('necessiteux.store');
    Route::get('/necessiteux/{necessiteux}/edit',[NecessiteuxController::class,'edit'])->name('necessiteux.edit');
    Route::patch('/necessiteux/{id}',[NecessiteuxController::class,'update'])->name('necessiteux.update');

    Route::delete('/necessiteux/{$id}', [NecessiteuxController::class, 'destroy'])->name('necessiteux.destory');
    Route::get('don',[DonController::class,'index'])->name('don.index');
    Route::get('don/create',[DonController::class,'create'])->name('don.create');
    Route::post('don/create',[DonController::class,'store'])->name('don.store');
    Route::get('/don/{dons}/edit',[DonController::class,'edit'])->name('don.edit');
    Route::patch('/don/{id}',[DonController::class,'update'])->name('don.update');
    Route::delete('/don/{$id}',[DonController::class,'destory'])->name('don.destory');
    Route::get('/',[AccueilController::class,'accueil'])->name('accueil');
});




// Route::resource('benevole' ,'App\Http\Controllers\BénévoleController');
// Route::controller(BénévoleController::class)->group(function () {

//     Route::get('/', 'index');

//     Route::get('/contact/{id}', 'show');
//     Route::get('/contact/{id}/edit', 'edit');


//     Route::post('/contact', 'store');
//     Route::patch('/contact/{id}', 'update');
//     Route::delete('/contact/{id}', 'destroy');

// });

Route::resource('user','App\Http\Controllers\Admin\UserController')->middleware('admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

