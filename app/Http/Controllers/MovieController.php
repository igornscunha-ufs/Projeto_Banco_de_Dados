<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function create(){
        return view('cinema.addmovie');
    }
    public function store(Request $request){
        Movie::create([
            'nome' => $request->get('nome'),
            'sinopse' =>$request->get('sinopse'),
            'duracao' =>$request->get('duracao'),
            'genero' =>$request->get('genero'),
            'faixa_etaria'=>$request->get('faixa_etaria'),
            'qnt_ingresso'=>$request->get('qnt_ingresso')
        ]);
        return "Filme salvo com sucesso";
    }

    public function show(){
        $movies = Movie::all();
        return view("cinema.todos",['movies'=> $movies]);
    }
    public function destroy($id){
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return "Filme removido com sucesso";
    }
    public function edit($id){
        $movie = Movie::findOrFail($id);
        return view('cinema.editMovie', ['movie'=>$movie]);
    }
    public function update(Request $request, $id){
        $movie = Movie::findOrFail($id);
        $movie->update([
            'nome' => $request->get('nome'),
            'sinopse' =>$request->get('sinopse'),
            'duracao' =>$request->get('duracao'),
            'genero' =>$request->get('genero'),
            'faixa_etaria'=>$request->get('faixa_etaria'),
            'qnt_ingresso'=>$request->get('qnt_ingresso')
        ]);
        return "Filme Atualizado com Sucesso";
    }
}
