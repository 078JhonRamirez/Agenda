<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'emial',
        'usuario',
        'password',
        'remember_token'

    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];
    //relacion entre usuario y cliente
    public function clientes(){
        return $this->hasOne(cliente::class);
        }
}
