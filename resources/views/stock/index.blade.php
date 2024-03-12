@extends('layouts.app')

@section('content')
    <h1>Itens de Estoque</h1>

    <a href="{{ route('stock.create') }}"class="btn btn-primary">Adicionar Novo Item</a>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Valor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stockItems as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td style="display: flex; justify-content:center; align-items: center; padding: 2em;" >{{ $item->quantity }}</td>
                    <td>{{ $item->value }}</td>
                    <td>
                        <a href="{{ route('stock.edit', $item) }}">
                            <button type="submit" class="btn btn-primary">
                                <ion-icon name="create-outline"></ion-icon>
                            </button>
                        </a>
                        <form action="{{ route('stock.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <ion-icon name="trash-outline"></ion-icon>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
