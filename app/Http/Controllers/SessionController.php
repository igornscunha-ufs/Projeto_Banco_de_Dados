<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;

class SessionController extends Controller
{
    public function create(){
        return view('cinema.addsession');
    }
    public function store(Request $request){
        Session::create([
            'id_sessao' =>$request->get('id_sessao'),
            'filme_nome' =>$request->get('filme_nome'),
            'sala' =>$request->get('sala'),
            'horario'=>$request->get('horario'),
        ]);
        return view('confirma.sessao.salve');
    }

    public function show(){
        $sessions = Session::all();
        return view("cinema.todassessoes",['sessions'=> $sessions]);
    }
    public function destroy($id){
        $session = Session::findOrFail($id);
        $session->delete();
        return view('confirma.sessao.del');
    }
    public function edit($id){
        $session = Session::findOrFail($id);
        return view('cinema.editsession', ['session'=>$session]);
    }
    public function update(Request $request, $id){
        $session = Session::findOrFail($id);
        $session->update([
            'id_sessao' => $request->get('id_sessao'),
            'filme_nome' =>$request->get('filme_nome'),
            'sala' =>$request->get('sala'),
            'horario'=>$request->get('horario')
        ]);
        return view('confirma.sessao.up');
    }
}