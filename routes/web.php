<?php

Route::get("/",function (){
   return view("layout.layout");
});

Route::resources([
    'categorias'=>'CategoriasController',
    'nacionalidades'=>'NacionalidadesController',
    'Empleados'=>'EmpleadosController',
    'personas'=>'PersonasController'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
