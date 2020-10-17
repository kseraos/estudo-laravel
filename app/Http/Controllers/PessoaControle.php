<?php

namespace App\Http\Controllers;
use App\Pessoa;

use Illuminate\Http\Request;

class PessoaControle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pessoas = \App\Pessoa::all();
        $pessoas = Pessoa::paginate (10);
        return view('pessoas.index', compact('pessoas'));
    }

    public function create()
    {
        return view('pessoas.form');
    }

   
    public function store(Request $request)
    {
        $pessoa= new Pessoa();
        $pessoa->nome =$request->nome;
        $pessoa->telefone=$request->telefone;
        $pessoa->email =$request->email;

        $pessoa->save();
        return redirect('/pessoas');
    }

    public function show(Pessoa $pessoa)
    {
        // $pessoa= Pessoa::find($id);
        return view ('pessoas.show', compact('pessoa'));
    }

    public function edit(Pessoa $pessoa)
    {
        return view('pessoas.form', compact('pessoa'));
    }

    public function update(Request $request, Pessoa $pessoa)
    {

        $pessoa->nome =$request->nome;
        $pessoa->telefone=$request->telefone;
        $pessoa->email =$request->email;

        $pessoa->save();
        return redirect('/pessoas');
    }

    public function destroy(Pessoa $pessoa)
    {

        $pessoa->delete();
        
        return redirect('/pessoas');
    }
}
