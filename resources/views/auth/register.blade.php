<div>
    {{ auth()->id() }}

    <h1>Registro</h1>

    @if($message = session()->get('message'))
    <div>
        <span>{{ $message }}</span>
    </div>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div>
            <input type="text" name="name" id="name" placeholder="Digite o seu nome" value="{{  old('name')  }}">
            
            @error('name')
            <span>{{ $message }}</span>
            @enderror

        </div>

        <br>

        <div>
            <input type="email" name="email" id="email" placeholder="Informe o seu e-mail" value="{{  old('email')  }}">
            
            @error('email')
            <span>{{ $message }}</span>
            @enderror

        </div>

        <br>

        <div>
            <input type="email" name="email_confirmation" id="email_confirmation" placeholder="Confirme o seu e-mail">
        </div>

        <br>

        <div>
            <input type="password" name="password" id="password" placeholder="Digite a sua senha">

            @error('password')
            <span>{{ $message }}</span>
            @enderror
            
        </div>

        <br>

        <button>Registrar</button>
    </form>
</div>