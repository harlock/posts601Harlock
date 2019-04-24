<?php

Route::get("/",function (){
   return view("layout.layout");
});
Route::resource('categorias','CategoriasController');