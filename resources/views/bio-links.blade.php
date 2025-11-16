<x-layout.app>
    <x-container>
        <div class="text-center space-y-4 w-2/3">
            <x-img src="/storage/{{ $user->photo }}" alt="User Profile Photo"/>

            <div class="font-bold text-2xl tracking-wide">{{  $user->name  }}</div>
            <div class="font-sm opacity-80 mb-6">{{  $user->description  }}</div>

            <ul class="space-y-2">
                @foreach ($user->links as $link)
                    <li class="flex items-center justify-center gap-2">

                        <x-button href="{{ $link->link }}" block outline color="info" target="_blank">{{ $link->name }}</x-button>

                    </li>
                @endforeach
            </ul>
        </div>

    </x-container>
</x-layout.app>
