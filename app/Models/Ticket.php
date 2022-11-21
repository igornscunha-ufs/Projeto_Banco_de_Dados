<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'tickets';
    protected $fillable = [
        'id_ingresso',
        'filme_nome',
        'valor',
        'sala',
        'cadeira',
        'horario'
    ];
}
