@extends('layouts.app')

@section('title', "Editar Usuario {$user->name }")

@section('content')

    <h1>Editar Usuario {{ $user->name }}</h1>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route ('users.update', $user->id)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="company" placeholder="Empresa:" value="{{$user->company}}">
        <input type="text" name="name" placeholder="Nome:"value="{{ $user->name}}">
        <input type="email" name="email" placeholder="E-mail:"value="{{ $user->email}}">
        <input type="text" name="telephone" placeholder="Telefone:"value="{{$user->telephone}}">
        <button type="submit">
            Enviar
        </button>
    </form>

@endsection