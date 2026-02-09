@push("stylesheets")
    <link rel="stylesheet" href="{{asset("stylesheets/posts/create.css")}}">
@endpush
<x-layout>
    <h1>Créer une publication</h1>
    <p>Cette page permet de creer une publication </p>
    <form method="POST" action="/posts">
        @csrf
        <div>
            <label for="title">Titre</label>
            <input type="text" id="title" name="title" placeholder="Ma publication"  value="{{ old('title') }}" class="@error('title') is-invalid  @enderror">
            @error('title')
            <div  class="error-message"> {{$message}}</div>
            @enderror

        </div>

        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description" placeholder="..." class="@error('description') is-invalid  @enderror">
                {{ old('description') }}
            </textarea>
            @error('description')
            <div  class="error-message"> {{$message}}</div>
            @enderror
        </div>
        <button> Soumettre</button>
    </form>
</x-layout>
