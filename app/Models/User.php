<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'cpf',
        'nome',
        'tipo',
        'email'
    ];
    public function sessions(){
        return $this->belongsToMany(Session::class, 'user_sessions');
    }
}