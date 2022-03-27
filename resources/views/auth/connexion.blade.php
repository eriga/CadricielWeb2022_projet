<x-layout>
    <header class="p-3 py-4 bg-secondaire">
        <x-header.nav :active="false" />
    </header>
    <main>
        <div class="container py-5">
            <h1 class="text-center text-color m-0 fs-1">Connectez-vous</h1>
            <h4 class="text-center text-color fs-5">ou <a href="/enregistrement">créez un compte</a></h4>
            <form action="/connexion" method="post" class="mt-4">
                @csrf
                <div class="w-75 m-auto">
                    <div class="form-floating mb-2">
                        <input type="email" class="form-control" id="email" placeholder="Courriel" name="email">
                        <label class="form" for="email">Courriel</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="password" class="form-control" id="password" placeholder="Mot de passe"
                            name="password">
                        <label class="form" for="password">Mot de passe</label>
                    </div>
                    <p class="d-flex justify-content-center my-5">
                        <button type="submit">Soumettre</button>
                    </p>
                </div>
            </form>
            @if ($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </main>
</x-layout>
