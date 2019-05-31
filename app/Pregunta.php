<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table='preguntas';
    protected $primaryKey='id_pregunta';
    protected $fillable=['pregunta','id_usuario','id_catpreg'];


    function getUser(){
        return $this->hasMany("App\Personas",'id_persona','id_usuario');
    }
    function getCategoria(){
        return $this->hasMany("App\Categorias",'id_catpreg','id_catpreg');
    }

}
