<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disponibilidade extends Model
{
    use HasFactory;

    protected $fillable =[
        'hora_inicio',
        'hora_fin',
        'empleados_id',
        'servicios_id'
    ];
}
