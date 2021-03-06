<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table='posts';
    protected $primaryKey='id_persona';
    protected $fillable=['nom_p','ap_p','am_p','id_nacionalidad'];

    function getNacionalidad(){
        return $this->hasMany("App\Nacionalidades",'id_nacionalidad','id_nacionalidad');
    }
}
