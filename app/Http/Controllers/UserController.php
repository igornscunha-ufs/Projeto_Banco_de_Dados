<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Contracts\EventDispatcher\Event;

class UserController extends Controller
{
    public function create(){
        return view('cinema.adduser');
    }
    public function store(Request $request){
        User::create([
            'cpf' => $request->get('cpf'),
            'nome' =>$request->get('nome'),
            'tipo' =>$request->get('tipo'),
            'email' =>$request->get('email')
        ]);
        return view('confirma.usu.salve');
    }

    public function show(){
        $users = User::all();
        return view("cinema.todosusuarios",['users'=> $users]);
    }
    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return view('confirma.usu.del');
    }
    public function edit($id){
        $user = User::findOrFail($id);
        return view('cinema.editUser', ['user'=>$user]);
    }
    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $user->update([
            'cpf' => $request->get('cpf'),
            'nome' =>$request->get('nome'),
            'tipo' =>$request->get('tipo'),
            'email' =>$request->get('email')
        ]);
        return view('confirma.usu.up');    
    }
    public function booksession(Request $request, User $user, Session $session){
        $user->sessions()->save($session);
        return view('confirma.usu.book');
    }
}