<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'email',
        'password',
        'role',
    ];
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

  public function cursosContratados()
  {
      return $this->belongsToMany(Curso::class, 'contratacions', 'user_id', 'curso_id')
          ->select('cursos.id as curso_id', 'cursos.title', 'cursos.content', 'cursos.price', 'cursos.created_at')
          ->withTimestamps();
  }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
