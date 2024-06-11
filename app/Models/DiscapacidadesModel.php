<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscapacidadesModel extends Model
{
    use HasFactory;

    protected $table = 'discapacidad';
    
    protected $primaryKey = 'id_discapacidad';
    public $incrementing = true;
    protected  $fillable = ['id_discapacidad', 'discapacidades'];

    public $timestamps = false;

    
}
