<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitasModel extends Model
{
    use HasFactory;

    protected $table = 'citas';
    
    protected $primaryKey = 'id_citas';
    public $incrementing = true;
    protected  $fillable = ['id_estudiante', 'fecha_cita', 'motivo_cita'];

    public $timestamps = false;

    
   
}
