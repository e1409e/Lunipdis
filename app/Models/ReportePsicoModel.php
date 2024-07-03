<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportePsicoModel extends Model
{
    use HasFactory;
    protected $table = 'reporte_psicologico';
    public $timestamps = false;
    protected $primaryKey = 'id_psicologico';
    protected  $fillable = [ 'id_psicologico',
                             'Nombre', 
                             'Apellido', 
                             'lugnac',
                             'fechnac', 
                             'edad', 
                             'nv_ins', 
                             'motivocon', 
                             'sintdiag', 
                             'observaciones', 
                             'recomendaciones'];
}
