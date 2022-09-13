@extends('layouts.app')

@section ('title','Listagem Dos Usuarios ')

@section('content')
<h1>
  Listagem
  (<a href="{{ route('users.create')}}">+</a>)
</h1>


<Ul>
    @foreach ($users as $user)

    <li>
      {{$user->company}}-
      {{$user->name}}-
      {{$user->email}}-
      {{$user->telephone}}
      | <a href="{{ route ('users.show', $user->id) }}">Detalhes</a>

    </li>


    @endforeach



</Ul>


@endsection