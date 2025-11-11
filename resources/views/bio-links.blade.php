<x-layout.app>
    <div>
        <img src="/storage/{{  $user->photo }}" alt="Foto de perfil de usuário"/>

        <h2>Usuário {{  $user->name  }}</h2>
        <p>{{  $user->description  }}</p>

        <ul>
            @foreach ($user->links as $link)
                <li>

                    <a href="{{ $link->link }}" target="_blank">{{  $link->id  }}.{{ $link->name }}</a>

                </li>
            @endforeach
        </ul>
    </div>
</x-layout.app>
