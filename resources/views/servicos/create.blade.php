@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Adicionar Novo Serviço</h1>
    <form action="{{ route('servicos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="number" name="preco" id="preco" class="form-control" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection