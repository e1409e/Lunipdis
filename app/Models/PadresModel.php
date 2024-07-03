<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PadresModel extends Model
{
    use HasFactory;

    protected $table = 'padres';
    protected $primaryKey = 'id_padres';
    public $timestamps = false;
    protected  $fillable = [ 'id_padres',
                             'tipo_familiar', 
                             'cedula_padre', 
                             'lugar_nacimiento',
                             'fecha_nacimiento', 
                             'direccion_habitacion', 
                             'telefono_contacto', 
                             'lugar_trabajo', 
                             'estado', 
                             'municipio', 
                             'departamento',
                             'estadodo_civil',
                             'id_estudiante'];

    
    public function estudiantes()
    {
        return $this->hasMany(EstudiantesModel::class, 'id_estudiante', 'id_estudiante');
    }
}
