<x-layout>
    <h1>{{ $post ->description }}</h1>
    <p>{{ $post ->description }}</p>
    <form  method="POST" action="/posts/{{ $post->id }}">
    @method("DELETE")
    @csrf
     <button>Supprimer</button>
    </form>
</x-layout>
