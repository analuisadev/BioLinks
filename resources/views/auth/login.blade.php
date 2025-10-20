<div>
    {{ auth()->id() }}
    <h1>Login</h1>

    @if($message = session()->get('message'))
    <div>
        <span>{{ $message }}</span>
    </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div>
            <input type="email" name="email" id="email" placeholder="E-mail" value="{{  old('email')  }}">
            @error('email')
            <span>{{ $message }}</span>
            @enderror

        </div>

        <br>

        <div>
            <input type="password" name="password" id="password" placeholder="Senha">

            @error('password')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <button>Logar</button>
    </form>
</div>