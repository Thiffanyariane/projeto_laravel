@extends('layouts.app')

@section('content')
    <h1>Adicionar Novo Item de Estoque</h1>

    <form action="{{ route('stock.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Item" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantidade</label>
            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantidade" required>
        </div>
        <div class="form-group">
            <label for="value">Valor</label>
            <input type="number" step="0.01" class="form-control" id="value" name="value" placeholder="Valor" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
