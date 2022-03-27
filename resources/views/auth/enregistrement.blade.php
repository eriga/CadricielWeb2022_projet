<x-layout>
    <header class="p-3 py-4 bg-secondaire">
        <x-header.nav :active="false" />
    </header>
    <main>
        <div class="container py-5">
            <h1 class="text-center text-color m-0 fs-1">Créez un compte</h1>
            <h4 class="text-center text-color fs-5">ou <a href="/connexion">connectez-vous</a></h4>
            <form action="/enregistrement" method="post" class="mt-4">
                @csrf

                <div class="w-75 m-auto">
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="nom" placeholder="Votre nom" name="nom" autofocus>
                        <label class="form" for="nom">Nom</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prénom">
                        <label class="form" for="prenom">Prénom</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Courriel">
                        <label class="form" for="email">Courriel</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Mot de passe" autocomplete="off">
                        <label class="form" for="password">Mot de passe</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="password" class="form-control" id="password-confirm" name="password-confirm"
                            placeholder="Confirmez le mot de passe" autocomplete="off">
                        <label class="form" for="password-confirm">Confirmez le mot de passe</label>
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
