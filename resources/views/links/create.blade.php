<div>
    <h1>Criar um link</h1>

    @if($message = session()->get('message'))
    <div>
        <span>{{ $message }}</span>
    </div>
    @endif

    <form action="{{ route('links.create') }}" method="POST">
        @csrf

        <div>
            <input type="text" name="link" id="link" placeholder="Insira o link" value="{{  old('link')  }}">

            @error('link')
            <span>{{ $message }}</span>
            @enderror

        </div>

        <br>

        <div>
            <input type="text" name="name" id="name" placeholder="Digite o nome do link" value="{{  old('name')  }}">

            @error('name')
            <span>{{ $message }}</span>
            @enderror

        </div>

        <br>

        <button>Salvar Link</button>
    </form>
</div>