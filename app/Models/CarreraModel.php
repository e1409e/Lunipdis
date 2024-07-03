<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarreraModel extends Model
{
    use HasFactory;

    protected $table = 'carrera';

    protected $primaryKey = 'id_carrera';
    public $incrementing = true;
    protected  $fillable = ['id_carrera', 'carreras'];

    public function Universidad()
    {
        return $this->belongsTo(UniversidadModel::class, 'id_carrera', 'carrera_id');
    }
}
