<x-layout>
    <header class="p-3 py-4 bg-secondaire">
        <x-header.nav :active="false" />
    </header>
    <main>
        <h1 class="text-center text-color">Bonjour, {{ auth()->user()->prenom }}!</h1>
        <section class="my-5">
            <h3 class="text-center text-primaire mb-5">Vos infos</h3>
            <div class="container w-75 m-auto text-center">
                <div class="row">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 fs-6 text-secondary">Prénom:</div>
                        <div class="col-lg-3 col-md-6 col-12 fs-5 text-color">
                            {{ auth()->user()->prenom }}
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 fs-6 text-secondary">Nom:</div>
                        <div class="col-lg-3 col-md-6 col-12 fs-5 text-color">
                            {{ auth()->user()->nom }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 fs-6 text-secondary">Courriel:</div>
                        <div class="col-lg-3 col-md-6 col-12 fs-5 text-color">
                            {{ auth()->user()->email }}
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 fs-6 text-secondary">Date de création:</div>
                        <div class="col-lg-3 col-md-6 col-12 fs-5 text-color">
                            {{ auth()->user()->created_at->format('d-m-y') }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-5">
            <h3 class="text-center text-primaire mb-5">Vos publications</h3>
            <div class="container m-auto text-center publications">

                <div class="row border border-secondary align-items-center justify-content-start p-2 py-3">
                    @forelse($posts as $post)
                        <p class="col-lg-8 col-12 m-0 text-color fs-5 text-start">
                            <a href="/posts/{{ $post->id }}">{{ $post->titre }}</a>
                        </p>
                        <p class="col-lg-1 col-4 m-0 text-secondary fs-6">
                            {{ $post->categorie->nom }}
                        </p>
                        <p class="col-lg-1 col-4 m-0 text-secondary fs-6">
                            {{ $post->popularite }}
                        </p>
                        <p class="col-lg-1 col-2 m-0 text-secondary fs-6">
                            <a class="btn-sm btn-success" href="/posts/update/{{ $post->id }}">
                                ✎
                            </a>
                        </p>
                        <p class="col-lg-1 col-2 m-0 text-secondary fs-6">
                            <a class="btn-sm btn-danger" href="/posts/destroy/{{ $post->id }}">
                                ✖
                            </a>
                        </p>
                    @empty
                        <p class="text-center text-color">Aucune publication</p>
                    @endforelse
                </div>
            </div>
        </section>
    </main>
    @if (session('success') !== null)
        <div class="flash fs-6 rounded-3">{{ session('success') }}</div>
    @endif
</x-layout>
