<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncidenciasModel extends Model
{
    use HasFactory;
    protected $table = 'incidencias';
    public $timestamps = false;
    protected $primaryKey = 'id_incidencia';
    protected  $fillable = [ 'id_incidencia',
                             'id_estudiante',
                             'nombres', 
                             'cedula', 
                             'telefono',
                             'correo', 
                             'nombre_contacto', 
                             'telefono_contacto', 
                             'discapacidad_id', 
                             'fecha_nacimiento', 
                             'observaciones', 
                             'seguimiento'];



    public function Estudiante()
    {
        return $this->hasOne(EstudiantesModel::class, 'id_estudiante', 'id_estudiante');
    }
}
