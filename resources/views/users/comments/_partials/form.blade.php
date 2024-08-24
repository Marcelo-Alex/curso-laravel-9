<div class="w-full bg-white shadow-md rounded px-8 py-12">
        @csrf
        <textarea name="body" id="" cols="30" rows="10" placeholder="Comentário" 
        class="form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue">
        </textarea>
        
        <label for="visible">
                <input type="checkbox" name="visible">
                Visível?
        </label>
        <input type="password" name="password" placeholder="Senha:" class="md:w-1/6 bg-gray-200 appearance-none h-9 rounded px-8"> 
        
        <button type="submit" class="shadow bg-purple-500 hover:hover:bg-purple-400 focus:shadow-outline h-9 rounded px-4">
                Enviar
        </button>
</div>