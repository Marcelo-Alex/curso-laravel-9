@extends('layouts.app')

@section('title', 'Listagem dos Usuários')
    


@section('content')

<h1 class="text-7x1 font-bold leading-tigh py-2">Listagem dos Usuários 
    <a href="{{route('users.create')}}" class="bg-blue-900 rounded-full text-white px-4 text-sm">+</a>
</h1>

<form action="{{route('users.index')}}" method="get" class=" py-5">
    <input type="text" name="search" placeholder="pesquisar..." class="md:w-1/6 bg-gray-200 appearance-none h-9 rounded">
    <button class="shadow bg-purple-500 hover:hover:bg-purple-400 focus:shadow-outline h-9 rounded px-4">pesquisar</button>
</form>

<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
    <thead>
      <tr>
        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">Nome</th> 
        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">Email</th>
        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">Editar</th>
        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">Detalhe</th>
        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">Comentários</th>
      </tr>
    </thead>

    <tbody>
        @foreach ($users as $user)
          <tr>

            <td class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">{{$user->name}}</td>
            <td class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">{{$user->email}}</td>
            <td class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left"><a href="{{route('users.edit', $user-> id)}}" class="bg-red-300 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Editar</a></td>
            <td class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left"><a href="{{route('users.show', $user-> id)}}" class="bg-emerald-300 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded">Detalhes</a></td>
            <td class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left"><a href="{{route('comments.index', $user-> id)}}" class="bg-blue-300 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Anotações (0)</a></td>
          </tr>  
        @endforeach
    </tbody>

   


  </table>




    
       
  

    
    
@endsection