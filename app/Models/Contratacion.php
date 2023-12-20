<?php

// app/Models/Contratacion.php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contratacion extends Model
{
    use HasFactory;
    protected $fillable= [
        "curso_id",
        "user_id",
    ];

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
