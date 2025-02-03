<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    public function index()
{
    // Busca os dados para o relatório (ex: número de viaturas, serviços, etc.)
    $totalViaturas = Viatura::count();
    $viaturasConcluidas = Viatura::where('estado', 'concluido')->count();
    $viaturasPendentes = Viatura::where('estado', 'pendente')->count();

    // Retorna a view 'relatorios.index' e passa os dados para ela
    return view('relatorios.index', compact('totalViaturas', 'viaturasConcluidas', 'viaturasPendentes'));
}
}
