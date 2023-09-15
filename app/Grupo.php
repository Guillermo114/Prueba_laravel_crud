<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table='grupos';
    protected $primaryKey='id';
    protected $fillable=['nombre_grupo', 'semestre', 'turno'];
    public $timestamps=false;
    //
}
