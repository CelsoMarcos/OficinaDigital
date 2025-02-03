@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Serviço</h1>
    <form action="{{ route('servicos.update', $servico->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $servico->nome }}" required>
        </div>
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="number" name="preco" id="preco" class="form-control" value="{{ $servico->preco }}" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection