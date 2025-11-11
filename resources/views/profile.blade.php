<x-layout.app>
    <div>
        <h1>Perfil</h1>

        @if($message = session()->get('message'))
            <span>{{ $message  }}</span>
        @endif

        <form action="{{ route('profile') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <img src="/storage/{{ $user->photo }}" alt="Foto de perfil do usuário"/>
                <input type="file" name="photo" id="photo">
                @error('photo')
                <span>{{ $message }}</span>
                @enderror

            </div>

            <br>

            <div>
                <input type="text" name="name" id="name" placeholder="Nome" value="{{  old('name', $user->name)  }}">
                @error('name')
                <span>{{ $message }}</span>
                @enderror

            </div>

            <br>

            <div>
            <textarea type="text" name="description" id="description"
                      placeholder="Descrição">{{  old('description', $user->description)  }}</textarea>
                @error('description')
                <span>{{ $message }}</span>
                @enderror

            </div>

            <br>

            <div>
                <span>biolinks.com.br/</span>
                <input type="text" name="handler" id="handler" placeholder="@seulink"
                       value="{{  old('handler', $user->handler)  }}"/>

                @error('handler')
                <span>{{ $message }}</span>
                @enderror

            </div>

            <br>

            <a href="{{  route('dashboard')  }}">Cancelar</a>
            <button>Atualizar</button>
        </form>
    </div>
</x-layout.app>
