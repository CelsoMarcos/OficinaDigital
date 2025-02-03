@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Serviços</h1>
    <a href="{{ route('servicos.create') }}" class="btn btn-primary mb-3">Adicionar Serviço</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servicos as $servico)
            <tr>
                <td>{{ $servico->nome }}</td>
                <td>{{ $servico->preco }}</td>
                <td>
                    <a href="{{ route('servicos.show', $servico->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('servicos.edit', $servico->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('servicos.destroy', $servico->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection