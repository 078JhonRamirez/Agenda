<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
        'fecha'
    ];

    //relacion entre cliente y usuario
    public function user() {
        return $this->belongsTo(usuario::class, 'id');
        }
}
