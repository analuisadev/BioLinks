<div>
    <h1>Editar um link :: {{ $link->name }}</h1>

    @if($message = session()->get('message'))
    <div>
        <span>{{ $message }}</span>
    </div>
    @endif

    <form action="{{ route('links.edit', $link) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div>
            <input type="text" name="link" id="link" placeholder="Insira o link" value="{{  old('link', $link->link)  }}">

            @error('link')
            <span>{{ $message }}</span>
            @enderror

        </div>

        <br>

        <div>
            <input type="text" name="name" id="name" placeholder="Digite o nome do link" value="{{  old('name', $link->name)  }}">

            @error('name')
            <span>{{ $message }}</span>
            @enderror

        </div>

        <a href="{{ route('dashboard') }}">Cancelar</a>

        <button>Salvar Link</button>
    </form>
</div>