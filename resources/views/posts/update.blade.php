<x-layout>
    <header class="p-3 py-4 bg-secondaire">
        <x-header.nav :active="false"/>
    </header>
    <main>
        <div class="container py-4">
            <div class="row mb-5">
                <a class="d-flex justify-content-center" href="{{ url('/') }}"><button>Retour</button></a>
            </div>

            <h1 class="text-center text-color">Modifier la publication</h1>

            <form class="d-flex flex-column align-items-center" action="/posts" method="post" enctype="multipart/form-data">
                @csrf

                @error('categorie')                   
                    <span class="alert alert-danger">
                        {{ $message }}
                    </span>
                @enderror

                <div class="w-100 d-flex flex-column align-items-center">
                    <!-- https://getbootstrap.com/docs/5.1/forms/floating-labels/#selects -->
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating select" name="categorie">
                           @foreach($categories as $categorie)
                                <option
                                    value="{{ $categorie->id }}"
                                    @if($categorie->id == $post->categorie->id)
                                        selected
                                    @endif
                                >
                                    {{ $categorie->nom }}
                                </option>
                            @endforeach
                        </select>
                        <label class="form" for="floatingSelect">Catégories</label>
                    </div>

                    @error('titre')                   
                        <span class="alert alert-danger">
                            {{ $message }}
                        </span>
                    @enderror
                    <input class="ps-3 py-2 mt-5 mb-3" type="text" name="titre" placeholder="Votre titre..." value="{{ $post->titre }}" autofocus>

                    @error('texte')                   
                        <span class="alert alert-danger">
                            {{ $message }}
                        </span>
                    @enderror
                    <textarea
                        class="ps-3 py-2 my-3"
                        name="texte"
                        placeholder="Votre texte...">{{ $post->texte }}
                    </textarea>

                    @error('image')                   
                        <span class="alert alert-danger">
                            {{ $message }}
                        </span>
                    @enderror
                    <h5 class="text-color mt-3">Associer une image à votre publication:</h5>

                    @if($post->image != null)
                        <img src="{{ asset('storage/img/' . $post->image) }}" width="200px" class="mb-3">
                    @endif

                    <label for="image" class="bouton">Téléverser</label>
                    <input type="file" id="image" name="image" style="visibility: hidden;">

                    {{-- L'id du post doit être reçu dans la méthode store --}}
                    <input type="hidden" name="id" value="{{ $post->id }}">

                    <p class="d-flex justify-content-center my-5">
                        <button type="submit">Modifier!</button>
                    </p>
                    <!-- </div> -->
                </div>
            </form>
        </div>
    </main>
</x-layout>
