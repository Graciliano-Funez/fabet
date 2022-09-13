@extends('layouts.app')

@section ('title','Detalhes Dos Usuarios ')

@section('content')

<h1>Listagem do Usuario {{$user->name}}</h1>

<ul>

    <li>{{$user->company}}</li>
    <li>{{$user->name}}</li>
    <li>{{$user->email}}</li>
    <li>{{$user->telephone}}</li>
</ul>

@endsection