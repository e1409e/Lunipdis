<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultadModel extends Model
{
    use HasFactory;
    protected $table = 'facultad';

    protected $primaryKey = 'id_facultad';
    public $incrementing = true;
    protected  $fillable = ['id_facultad', 'facultades', 'Siglas'];

    public function Estudiantes()
    {
        return $this->belongsToMany(EstudiantesModel::class, 'universidad');
    }

    public function Universidad()
    {
        return $this->hasMany(UniversidadModel::class, 'facultad_id', 'id_facultad');
    }
}
