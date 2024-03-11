@extends('layouts.app')

@section('title', 'Lista de Usuários')

@section('content')
    <h1>Lista de Usuários</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }} - {{ $user->email }}</li>
        @endforeach
    </ul>

     <!-- Botão para criar novo usuário -->
     <a href="{{ route('create') }}" class="btn btn-primary">Criar novo usuário</a>
@endsection
