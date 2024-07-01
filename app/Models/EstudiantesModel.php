<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstudiantesModel extends Model
{
    use HasFactory;

    protected $table = 'estudiantes';

    public function Citas()
    {
        
        return $this->belongsTo(CitasModel::class, 'id_estudiante', 'id_estudiante');
    }
    public function Historial()
    {
        
        return $this->belongsTo(HistorialMedicoModel::class, 'id_estudiante', 'id_estudiante');
    }
}
