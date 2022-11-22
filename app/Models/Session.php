<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $table = 'sessions';
    protected $fillable = [
        'id_sessao',
        'filme_nome',
        'sala',
        'horario'
    ];

    public function users(){
        return $this->belongsToMany(User::class, 'user_sessions');
    }
}