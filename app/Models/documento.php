<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Documento extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','tipo_documento','numero_documento','nombres','apellidos','departamento','ciudad','direccion','celular','correo','nombre_in','departamento_in','ciudad_in','vereda_in','matricula_in','Ciudad_registro_in','hechos','abogado',];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    protected $table = 'documento';


}
