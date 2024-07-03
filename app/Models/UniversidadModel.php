<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversidadModel extends Model
{
    use HasFactory;
    protected $table = 'universidad';
    public $timestamps = false;
    protected $primaryKey = 'id_universidad';
    protected  $fillable = ['id_estudiante', 'facultad_id', 'carrera_id', 'periodo_id'];

    public function Facultad()
    {     
        return $this->belongsTo(FacultadModel::class, 'facultad_id', 'id_facultad');
    }
    public function Carrera()
    {     
        return $this->belongsTo(CarreraModel::class, 'carrera_id', 'id_carrera');
    }
    public function Periodo()
    {     
        return $this->belongsTo(PeriodosModel::class, 'periodo_id', 'id_periodo');
    }
    public function Estudiantes()
    {
        return $this->belongsToMany(EstudiantesModel::class, 'id_estudiante', 'id_estudiante');
    }
   
   
    
}
