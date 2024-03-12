@extends('layouts.app')

@section('content')
    <h1>Editar Item de Estoque</h1>

    <form action="{{ route('stock.update', $stockItem) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $stockItem->name) }}" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantidade</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity', $stockItem->quantity) }}" required>
        </div>
        <div class="form-group">
            <label for="value">Valor</label>
            <input type="number" step="0.01" class="form-control" id="value" name="value" value="{{ old('value', $stockItem->value) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
@endsection
