<div>
    <h1>Dashboard</h1>

    @if($message = session()->get('message'))
        <div>
            <span>{{ $message }}</span>
        </div>
    @endif

    <a href="{{ route('links.create') }}">Criar Link</a>

    <ul>
        @foreach ($links as $link)
            <li>
                <a href="{{ route('links.edit', $link) }}">{{ $link->name }}</a>
                <form action="{{ route('links.destroy', $link) }}" method="POST"
                    onsubmit="return confirm('Tem certeza em deletar este link?')">
                    @csrf
                    @method('DELETE')

                    <button>deletar</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>