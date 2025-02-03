<?php

namespace App\Http\Controllers;

use App\Models\Viatura;
use Illuminate\Http\Request;

class ViaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Busca todas as viaturas no banco de dados
    $viaturas = Viatura::all();

    // Retorna a view 'viaturas.index' e passa as viaturas para ela
    return view('viaturas.index', compact('viaturas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retorna a view 'viaturas.create' (formulário de criação)
    return view('viaturas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valida os dados do formulário
    $request->validate([
        'marca' => 'required|string|max:100',
        'modelo' => 'required|string|max:100',
        'cor' => 'required|string|max:50',
        'tipo_avaria' => 'required|string',
        'estado' => 'required|in:pendente,em_andamento,concluido',
        'codigo_validacao' => 'required|string|unique:viaturas',
    ]);

    // Cria uma nova viatura no banco de dados
    Viatura::create($request->all());

    // Redireciona para a lista de viaturas com uma mensagem de sucesso
    return redirect()->route('viaturas.index')->with('success', 'Viatura criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Retorna a view 'viaturas.show' e passa a viatura para ela
    return view('viaturas.show', compact('viatura'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Retorna a view 'viaturas.edit' e passa a viatura para ela
    return view('viaturas.edit', compact('viatura'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Valida os dados do formulário
    $request->validate([
        'marca' => 'required|string|max:100',
        'modelo' => 'required|string|max:100',
        'cor' => 'required|string|max:50',
        'tipo_avaria' => 'required|string',
        'estado' => 'required|in:pendente,em_andamento,concluido',
        'codigo_validacao' => 'required|string|unique:viaturas,codigo_validacao,' . $viatura->id,
    ]);

    // Atualiza a viatura no banco de dados
    $viatura->update($request->all());

    // Redireciona para a lista de viaturas com uma mensagem de sucesso
    return redirect()->route('viaturas.index')->with('success', 'Viatura atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // Exclui a viatura do banco de dados
    $viatura->delete();

    // Redireciona para a lista de viaturas com uma mensagem de sucesso
    return redirect()->route('viaturas.index')->with('success', 'Viatura excluída com sucesso!');
    }
}
