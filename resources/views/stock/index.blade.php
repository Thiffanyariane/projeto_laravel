@extends('layouts.app')

@section('content')
    <h1>Itens de Estoque</h1>

    <a style="color:inherit" href="{{ route('stock.create') }}">Adicionar Novo Item</a>

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
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->value }}</td>
                    <td>
                        <a style="color:inherit" href="{{ route('stock.edit', $item) }}">Editar</a>
                        <form action="{{ route('stock.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
