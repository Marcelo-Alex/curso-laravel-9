@extends('layouts.app')

@section('title', "Comentário do Usuário {'$user->name'}")
    


@section('content')

<h1 class="text-2x1 font-semibold leading-tigh py-2">
    Comentário do Usuário {{$user->name}}
    <a href="{{route('comments.create', $user->id)}}" class="bg-blue-900 rounded-full text-white px-4 text-sm">+</a>
</h1>

<form action="{{route('users.index')}}" method="get" class=" py-5">
    <input type="text" name="search" placeholder="pesquisar..." class="md:w-1/6 bg-gray-200 appearance-none h-9 rounded">
    <button class="shadow bg-purple-500 hover:hover:bg-purple-400 focus:shadow-outline h-9 rounded px-4">pesquisar</button>
</form>

<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
    <thead>
        <tr>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">Conteúdo</th> 
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">Visível</th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">Editar</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($comments as $comment)
          <tr>

            <td class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">{{$comment->body}}</td>
            <td class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">{{$comment->visible ? 'SIM' : 'NÃO'}}</td>
            <td class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left"><a href="{{route('users.edit', $user-> id)}}" class="bg-red-300 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Editar</a></td>
          </tr>  
        @endforeach
    </tbody>

   


  </table>




    
       
  

    
    
@endsection