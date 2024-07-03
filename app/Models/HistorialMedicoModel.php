<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialMedicoModel extends Model
{
    use HasFactory;

    protected $table = 'historial_medico';
    
    protected $primaryKey = 'id_historialmedico';
    public $incrementing = true;
    protected  $fillable = ['id_historialmedico', 'id_estudiante', 'certificado_conapdis', 'informe_medico', 'tratamiento'];

    public $timestamps = false;

    public function estudiantes()
    {
        return $this->hasOne(EstudiantesModel::class, 'id_estudiante', 'id_estudiante');
    }

}
