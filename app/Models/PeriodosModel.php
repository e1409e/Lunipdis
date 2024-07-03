<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodosModel extends Model
{
    use HasFactory;
    protected $table = 'periodo';

    protected $primaryKey = 'id_periodo';
    public $incrementing = true;
    protected  $fillable = ['id_periodo', 'periodos'];

    public function Universidad()
    {
        return $this->belongsTo(UniversidadModel::class, 'id_periodo', 'periodo_id');
    }
}
