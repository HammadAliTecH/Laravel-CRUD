<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Userdata; //Add Controller File


Route::get('/', function () {
    return view('welcome');
})->name('wellcome');

//any_mean HTTP request PUT/POST/GET

Route::controller(Userdata::class)->group(function(){
Route::any('/add','adduser')->name('add');  //->To ADD_DATA
Route::get('/read','readuser')->name('read'); //->TO FETCH_ALL_DATA
Route::get('/read_1/{name}','readuser_1')->name('read_1');   //->TO FETCH_INDIVIUAL_DATA
Route::any('/update_1','updateuser_1')->name('update_1'); //->TO FETCH_DATA_FOR_UPDATION
Route::any('/update_2','updateuser_2')->name('update_2'); //->TO UPDATE_DATA
Route::any('/delete_1','deleteuser_1')->name('delete_1'); //->TO FETCH_DATA_FOR_DELETATION
Route::any('/delete_2','deleteuser_2')->name('delete_2'); //->TO DELETATION_DATA
});


//FOR STATIC PAGES OF ADD/UPDATE/DELETE
Route::view('/newuser','add')->name('new_u');
Route::view('/newuser_1','update_1')->name('new_u_1');
Route::view('/newuser_2','delete_1')->name('v_delete_1');

//FOR FALLBACK PAGE_NOT_FOUND
Route::fallback(function(){
    return view('not_found');
});
//------------------------------------------
Route::get('/trail',[Userdata::class,'trail']);


