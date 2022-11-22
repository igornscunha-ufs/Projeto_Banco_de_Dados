<?php

namespace App\Http\Controllers;

use App\Models\UserSession;
use Illuminate\Http\Request;

class UserSessionController extends Controller
{
    public function show(){
        $usersessions = UserSession::all();
        return view("cinema.todasreservas",['usersessions'=> $usersessions]);
    }
}
