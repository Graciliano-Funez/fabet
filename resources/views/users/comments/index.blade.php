@extends('layouts.app')

@section('title', "Comentarios do Usuario {$user->name}")

@section('content')
    <h1>
        Comentarios do Usuario {{ $user->name }}
        (<a href="{{ route('comments.create',$user->id) }}">+</a>)
    </h1>

    <form action="{{ route('comments.index', $user->id)}}" method="get">
 
        <input type="text" name="search" placeholder="Pesquisar"> 
        <button>Pesquisar</button>
    </form>


    <Ul>
        @foreach ($comments as $comment)
            <li>
                {{ $user->body }}-
                {{ $user->visible }}-
                | <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                

            </li>
        @endforeach



    </Ul>


@endsection
