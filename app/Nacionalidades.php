<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nacionalidades extends Model
{
    //
    protected $table='Nacionalidades';
    protected $primaryKey='id_nacionalidad';
    protected $fillable=['nom_na'];
    public function getPersonas(){
        return $this->hasMany("App\Personas","id_nacionalidad",
            "id_nacionalidad")->count();
    }



}

