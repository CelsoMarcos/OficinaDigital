@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Relatórios</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Estatísticas</h5>
            <p class="card-text"><strong>Total de Viaturas:</strong> {{ $totalViaturas }}</p>
            <p class="card-text"><strong>Viaturas Concluídas:</strong> {{ $viaturasConcluidas }}</p>
            <p class="card-text"><strong>Viaturas Pendentes:</strong> {{ $viaturasPendentes }}</p>
        </div>
    </div>
</div>
@endsection