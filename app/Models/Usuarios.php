<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'lista_de_libros_reservados'
    ];

    protected $casts = [
        'lista_de_libros_reservados' => 'array'
    ];
    
    use HasFactory;
}
