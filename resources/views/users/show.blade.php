@extends('layouts.app')

@section('title', 'Listagem do Usuário')


@section('content')

    <h1 class="text-7x1 font-bold leading-tigh py-2">Listagem do Usuário {{$user->name}}</h1>



    <table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
        <thead>
          <tr>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">NOME</th> 
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">EMAIL</th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">DATA E HORA DA INSERÇÃO NO SISTEMA</th>
          </tr>
        </thead>
    
        <tbody>
              <tr>
    
                <td class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">{{$user->name}}</td>
                <td class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">{{$user->email}}</td>
                <td class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">{{$user->created_at}}</td>


                <td class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">

                  <form action="{{route('users.destroy', $user->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="shadow bg-purple-500 hover:hover:bg-purple-400 focus:shadow-outline h-9 rounded px-4">Deletar</button>
                  </form>

                </td>
              </tr>  
        </tbody>

    
      </table>

      

      

    
@endsection

