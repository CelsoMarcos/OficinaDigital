@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes da Viatura</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $viatura->marca }} {{ $viatura->modelo }}</h5>
            <p class="card-text"><strong>Cor:</strong> {{ $viatura->cor }}</p>
            <p class="card-text"><strong>Tipo de Avaria:</strong> {{ $viatura->tipo_avaria }}</p>
            <p class="card-text"><strong>Estado:</strong> {{ $viatura->estado }}</p>
            <p class="card-text"><strong>Código de Validação:</strong> {{ $viatura->codigo_validacao }}</p>
            <a href="{{ route('viaturas.edit', $viatura->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('viaturas.destroy', $viatura->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
        </div>
    </div>
</div>
@endsection