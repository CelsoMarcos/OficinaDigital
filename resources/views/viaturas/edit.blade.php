@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Viatura</h1>
    <form action="{{ route('viaturas.update', $viatura->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" name="marca" id="marca" class="form-control" value="{{ $viatura->marca }}" required>
        </div>
        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" id="modelo" class="form-control" value="{{ $viatura->modelo }}" required>
        </div>
        <div class="form-group">
            <label for="cor">Cor</label>
            <input type="text" name="cor" id="cor" class="form-control" value="{{ $viatura->cor }}" required>
        </div>
        <div class="form-group">
            <label for="tipo_avaria">Tipo de Avaria</label>
            <textarea name="tipo_avaria" id="tipo_avaria" class="form-control" required>{{ $viatura->tipo_avaria }}</textarea>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <select name="estado" id="estado" class="form-control" required>
                <option value="pendente" {{ $viatura->estado == 'pendente' ? 'selected' : '' }}>Pendente</option>
                <option value="em_andamento" {{ $viatura->estado == 'em_andamento' ? 'selected' : '' }}>Em Andamento</option>
                <option value="concluido" {{ $viatura->estado == 'concluido' ? 'selected' : '' }}>Concluído</option>
            </select>
        </div>
        <div class="form-group">
            <label for="codigo_validacao">Código de Validação</label>
            <input type="text" name="codigo_validacao" id="codigo_validacao" class="form-control" value="{{ $viatura->codigo_validacao }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection