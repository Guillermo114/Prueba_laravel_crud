<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{

protected $table='estudiantes';
protected $primaryKey='id';
protected $fillable=['nombre', 'apellido_paterno', 'apellido_materno', 'edad', 'email', 'teléfono', 'id_grupo'];
public $timestamps=false;
    //

    public function Grupo(){
        return $this->hasMany (Grupo::class, 'id', 'id_grupo');
    }
}