<?php

use App\Http\Controllers\Back\PanelController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

///////////////////////////////////PAGE ROUTE////////////////////
Route::get('/contactPage',[PageController::class,'contactPage'])->name('contactPage');
Route::post('/contactAdd',[PageController::class,'contactAdd'])->name('contactAdd');
Route::get('/about',[PageController::class,'about'])->name('about');



//////////PANEL ROUTE/////////////
Route::get('/panel/aboutPage',[PanelController::class,'aboutPage'])->name('panel.aboutPage');
Route::post('/panel/createAbout',[PanelController::class,'createAbout'])->name('panel.createAbout');

















///////////////////////TEST ROUTE//////////////////
Route::get('/denemeapp',function(){
    return view('front.pages.index');
});
Route::get('/denemecontact',function(){
    return view('front.pages.contact');
});
Route::get('/denemeabout',function(){
    return view('front.pages.about');
});
Route::get('/panelindexdeneme',function(){
    return view('panel.layouts.app');
});
/////////////////////////////Panel Test Route/////////////
Route::get('/denemepanelabout',function(){
    return view('panel.pages.about');
});
