<x-layout>
    <header class="p-3 py-4 bg-secondaire">
        <x-header.nav :active="false" />
    </header>
    <main>
        <div class="container py-4">
            <div class="row mb-5">
                <a class="d-flex justify-content-center" href="{{ url('/') }}"><button>Retour</button></a>
            </div>

            <h1 class="text-center text-color">Nouvelle publication</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="d-flex flex-column align-items-center" action="{{ url('/posts') }}" method="post"
                enctype="multipart/form-data">
                @csrf

                <div class="w-100 d-flex flex-column align-items-center">
                    <!-- https://getbootstrap.com/docs/5.1/forms/floating-labels/#selects -->
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating select" name="categorie">
                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}"
                                    @if ($categorie->id == old('categorie')) selected @endif>
                                    {{ $categorie->nom }}
                                </option>
                            @endforeach
                        </select>
                        <label class="form" for="floatingSelect">Catégories</label>
                    </div>

                    <input class="ps-3 py-2 mt-5 mb-3" type="text" name="titre" placeholder="Votre titre..."
                        value="{{ old('titre') }}" autofocus>

                    <textarea class="ps-3 py-2 my-3" name="texte">{{ old('texte') }}</textarea>

                    <h5 class="text-color mt-3">Associer une image à votre publication:</h5>
                    <!-- Pour modifier l'apparence du bouton d'upload (visibility hidden) -->
                    <label for="image" class="bouton">Téléverser</label>
                    <input type="file" id="image" name="image" style="visibility: hidden;">

                    <p class="d-flex justify-content-center my-5">
                        <button type="submit">Publier!</button>
                    </p>
                    <!-- </div> -->
                </div>
            </form>
        </div>
    </main>
</x-layout>
