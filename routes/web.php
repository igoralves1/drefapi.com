<?php

Route::group(['prefix'=>'api'], function (){
    Route::group(['prefix'=>'user'], function (){//Todas as Rotas aqui dentro serao api/user
        
        
        Route::get('/', function (){
            return 'devolve a lista de usuarios';
        });
        
        Route::get('/{id}', function ($id){
            return 'usuario - '.$id;
        });
        
        
        
        
    });//End of Route::group(['prefix'=>'user'], function (){
});//End of Route::group(['prefix'=>'api'], function (){

//Route::get('/', function () {
//    return view('welcome');
//});

