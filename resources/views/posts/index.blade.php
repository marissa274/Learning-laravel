<x-layout>
    @if(count($posts) > 0)
        <h1> List des publications</h1>
        <ul>
            @foreach($posts as $post)
                <li>
                    <a href="/posts/{{ $post ->id }}">
                        {{ $post ->title }}
                    </a>
                </li>

            @endforeach
        </ul>
        @else
        <h1>Aucune publication trouvée</h1>
        <a href="/posts/create">Créer une publication</a>
    @endif

</x-layout>
