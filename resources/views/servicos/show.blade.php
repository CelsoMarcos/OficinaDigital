@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Serviço</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $servico->nome }}</h5>
            <p class="card-text"><strong>Preço:</strong> {{ $servico->preco }}</p>
            <a href="{{ route('servicos.edit', $servico->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('servicos.destroy', $servico->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
        </div>
    </div>
</div>
@endsection