<?php

Route::get("/",function (){
   return view("layout.layout_admin");
});
Route::group(['middleware' => ['auth']], function () {

    Route::group(['middleware' => ['userverify']],function(){

        Route::resources([
            'nacionalidades'=>'NacionalidadesController',
            'Empleados'=>'EmpleadosController',
            'personas'=>'PersonasController'
        ]);
    });
    Route::resource('categorias','CategoriasController')->except(['index']);
    Route::get('/home', 'HomeController@index')->name('home');
});
Route::resource("posts", "PostController");
Route::resource("preguntas", "PreguntaController");
Route::get("categorias",'CategoriasController@index');
Auth::routes();
Route::get("graficar/personas","GraficarController@graficarPersonas");







