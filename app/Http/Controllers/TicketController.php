<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function create(){
        return view('cinema.addticket');
    }
    public function store(Request $request){
        Ticket::create([
            'id_ingresso' =>$request->get('id_ingresso'),
            'filme_nome' =>$request->get('filme_nome'),
            'valor' =>$request->get('valor'),
            'sala' =>$request->get('sala'),
            'cadeira'=>$request->get('cadeira'),
            'horario'=>$request->get('horario')
        ]);
        return "Ingresso salvo com sucesso";
    }

    public function show(){
        $tickets = Ticket::all();
        return view("cinema.todosingressos",['tickets'=> $tickets]);
    }
    public function destroy($id){
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();
        return "Ingresso removido com sucesso";
    }
    public function edit($id){
        $ticket = Ticket::findOrFail($id);
        return view('cinema.editTicket', ['ticket'=>$ticket]);
    }
    public function update(Request $request, $id){
        $ticket = Ticket::findOrFail($id);
        $ticket->update([
            'id_ingresso' => $request->get('id_ingresso'),
            'filme_nome' =>$request->get('filme_nome'),
            'valor' =>$request->get('valor'),
            'sala' =>$request->get('sala'),
            'cadeira'=>$request->get('cadeira'),
            'horario'=>$request->get('horario')
        ]);
        return "Ingresso Atualizado com Sucesso";
    }
}