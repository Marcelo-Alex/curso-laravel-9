<div class="w-full bg-white shadow-md rounded px-8 py-12">
        @csrf
        <input type="text" name="name" placeholder="Nome:" value="{{$user->name ?? old('name')}}">
        <input type="email" name="email" placeholder="E-mail:" value="{{$user->email ?? old('email')}} " >
        <input type="password" name="password" placeholder="Senha:">
        <button type="submit" class="shadow bg-purple-500 hover:hover:bg-purple-400 focus:shadow-outline h-9 rounded px-4">
                Enviar
        </button>
</div>