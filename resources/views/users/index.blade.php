@extends('layouts.app')

@section('title', 'Listagem Dos Usuarios ')

@section('content')
    <h1>
        Listagem
        (<a href="{{ route('users.create') }}">+</a>)
    </h1>

    <form action="{{ route('users.index')}}" method="get">
 
        <input type="text" name="search" placeholder="Pesquisar"> 
        <button>Pesquisar</button>
    </form>


    <Ul>
        @foreach ($users as $user)
            <li>
                {{ $user->company }}-
                {{ $user->name }}-
                {{ $user->email }}-
                {{ $user->telephone }}
                | <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>

            </li>
        @endforeach



    </Ul>


@endsection
