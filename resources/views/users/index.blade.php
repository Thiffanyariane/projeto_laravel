@extends('layouts.app')

@section('title', 'Lista de Usuários')

@section('content')
    <h1>Lista de Usuários</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }} - {{ $user->email }}
                <!-- Botão para editar usuário-->
                <a href="{{ route('edit', $user) }}">
                    <button type="submit" class="btn btn-primary">
                        <ion-icon name="create-outline"></ion-icon>
                    </button>
                </a>
                <!-- Botão para excluir usuário-->
                <form action="{{ route('destroy', $user) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <ion-icon name="trash-outline"></ion-icon>
                    </button>
                </form>
                
            </li>
        @endforeach
        @if (Auth::check())
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        @endif

    </ul>

     <!-- Botão para criar novo usuário -->
     <a href="{{ route('create') }}" class="btn btn-primary">Criar novo usuário</a>
@endsection
