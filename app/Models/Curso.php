<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
// Curso.php
public function usuariosQueContrataron()
{
    return $this->belongsToMany(User::class, 'contrataciones', 'curso_id', 'user_id')
        ->select('users.id as user_id', 'users.email', 'users.created_at') // Agregar las columnas que necesitas
        ->withTimestamps();
}


    use HasFactory;
    protected $fillable= [
        'title',
        'content',
        'price',
    ];

}
