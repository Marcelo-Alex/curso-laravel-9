@extends('layouts.app')

@section('title', " Editar o Usuário {{$user->name}}")


@section('content')

    <h1 class="text-7x1 font-bold leading-tigh py-2">Editar o Usuário {{$user->name}}</h1>

    @include('include.validations-form')
    

    <form action="{{route('users.update', $user->id)}}" method="post">
        @method('PUT')
        @include('users._partials.form')
    </form>
    
@endsection

