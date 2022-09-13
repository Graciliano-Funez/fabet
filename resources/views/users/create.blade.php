@extends('layouts.app')

@section ('title',' Novo Usuario ')

@section('content')

<h1>Novo Usuario</h1>

<form action="{{ route('users.store')}}" method="post">
    @csrf
   <input type="text" name="company" placeholder="Empresa:">
   <input type="text" name="name" placeholder="Nome:">
   <input type="email" name="email" placeholder="E-mail:">
   <input type="text" name="telephone" placeholder="Telefone:">
   <button type="submit">
      Enviar
   </button>
</form>

@endsection