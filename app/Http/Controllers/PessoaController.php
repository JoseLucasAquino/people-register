<?php

namespace App\Http\Controllers;

use App\Actions\Pessoa\filtraPessoa;
use App\Http\Requests\FiltraPessoaRequest;
use App\Models\Pessoa;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;
use Throwable;

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
        return Inertia::render('Person/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        try{
            $pessoa = new Pessoa($data);
            $pessoa->save();
        }catch(Throwable $th){
            $response = [
                'error' => true, 'message' => 'Erro ao salvar registro de pessoa no banco de dados'
            ];
        }finally{
            $response = [
                'success' => true, 'message' => 'Pessoa Cadastrada com sucesso!'
            ];
        }

        return to_route('pessoas.index')->with('result', $response);
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

    public function filter(Request $request){
        $busca = $request->input('busca');
        $pessoas = Pessoa::where('id', $busca)
        ->orWhere('cpf', 'like', $busca . '%')
        ->orWhere('nome', 'like', '%' . $busca . '%')
        ->get();
        return response()->json($pessoas);
    }
}
