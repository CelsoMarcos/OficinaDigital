@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Viaturas</h1>
    <a href="{{ route('viaturas.create') }}" class="btn btn-primary mb-3">Adicionar Viatura</a>
    <table class="table">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Cor</th>
                <th>Estado</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($viaturas as $viatura)
            <tr>
                <td>{{ $viatura->marca }}</td>
                <td>{{ $viatura->modelo }}</td>
                <td>{{ $viatura->cor }}</td>
                <td>{{ $viatura->estado }}</td>
                <td>
                    <a href="{{ route('viaturas.show', $viatura->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('viaturas.edit', $viatura->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('viaturas.destroy', $viatura->id) }}" method="POST" style="display:inline;">
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