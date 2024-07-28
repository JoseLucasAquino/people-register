<?php

namespace App\Http\Controllers;

use App\Actions\Pessoa\filtraPessoa;
use App\Http\Requests\FiltraPessoaRequest;
use App\Models\Pessoa;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Home', [
            'pessoas' => Pessoa::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pessoa $pessoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pessoa $pessoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pessoa $pessoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pessoa $pessoa)
    {
        //
    }

    public function filter( Request $request){
        $busca = $request->input('busca');
        $pessoas = Pessoa::where('id', $busca)
        ->orWhere('cpf', $busca)
        ->orWhere('nome', 'like', '%' . $busca . '%')
        ->get();
        return Inertia::render('Home', [
            'pessoas' => $pessoas
        ]);
    }
}
