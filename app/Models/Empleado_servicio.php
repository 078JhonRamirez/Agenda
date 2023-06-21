<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleado_servicio extends Model
{
    use HasFactory;

    

    protected $fillable =[
        'empleado_id',
        'servicio_id',
        'valor'
    ];
}
