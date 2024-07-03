<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstudiantesModel extends Model
{
    use HasFactory;

    protected $table = 'estudiantes';
    public $timestamps = false;
    protected $primaryKey = 'id_estudiante';
    protected  $fillable = [ 'id_estudiante',
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

    
     public function Padres()
    {
        return $this->belongsTo(PadresModel::class, 'id_estudiante', 'id_estudiante');
    }
    public function Citas()
    {
        return $this->belongsTo(CitasModel::class, 'id_estudiante', 'id_estudiante');
    }
    public function Historial()
    {
        
        return $this->belongsTo(HistorialMedicoModel::class, 'id_estudiante', 'id_estudiante');
    }
    public function Facultad()
    {
        return $this->belongsToMany(FacultadModel::class, 'universidad', 'id_estudiante', 'facultad_id');
    }
    public function Universidad()
    {
        return $this->belongsToMany(UniversidadModel::class, 'id_estudiante', 'id_estudiante');
    }
    public function Incidencia()
    {
        return $this->belongsToMany(IncidenciasModel::class, 'id_estudiante', 'id_estudiante');
    }

}
