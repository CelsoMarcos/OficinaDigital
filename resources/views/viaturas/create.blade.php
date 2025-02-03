@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Adicionar Nova Viatura</h1>
    <form action="{{ route('viaturas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" name="marca" id="marca" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" id="modelo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cor">Cor</label>
            <input type="text" name="cor" id="cor" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tipo_avaria">Tipo de Avaria</label>
            <textarea name="tipo_avaria" id="tipo_avaria" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <select name="estado" id="estado" class="form-control" required>
                <option value="pendente">Pendente</option>
                <option value="em_andamento">Em Andamento</option>
                <option value="concluido">Concluído</option>
            </select>
        </div>
        <div class="form-group">
            <label for="codigo_validacao">Código de Validação</label>
            <input type="text" name="codigo_validacao" id="codigo_validacao" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection