@extends('layouts.app')

@section('title', "Editar o Usuário {$user->company}")

@section('content')
<h1 class="text-3xl text-center font-semibold leading-tigh py-2">
    EDITAR
</h1>

<h1 class="text-2xl font-semibold leading-tigh py-2">Editar o Usuário {{ $user->company }}</h1>

@include('includes.validations-form')


<form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @include('users._partials.form')
</form>

@endsection