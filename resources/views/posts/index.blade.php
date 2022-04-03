
<x-layout>
    <x-slot name="titre">
        Accueil | Cadriciel Web 2022
    </x-slot>

    
    @if(session('success') != null)
        <div class="flash fs-6 rounded-3">
            {{ session('success') }}
        </div>
    @endif


    <!-- https://getbootstrap.com/docs/5.1/examples/headers/ -->
    <header class="p-3 py-4 bg-secondaire">
        <x-header.nav :active="true"/>
        <h1 class="mt-5 mb-3 m-auto text-center">Cadriciel Web 2022</h1>
        <p class="text-center mb-5 m-auto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, iste perferendis dolore non quae cumque eos atque itaque aut repudiandae at velit, quibusdam vel repellendus, deleniti ipsa ratione! Sequi, recusandae!</p>
    </header>
    <main>
        <div class="container py-5">
            <div class="row">
                @forelse($posts as $post)
                    <x-card :post="$post"/>
                @empty
                    <h3 class="text-center text-white">Aucune publication trouvée</h3>
                    <div class="row mb-5">
                    <a class="d-flex justify-content-center" href="{{ url('/') }}"><button>Retour</button></a>
                    </div>
                @endforelse

            </div>

            @isset($plus)
                <a href="{{ url('/posts/tous') }}">
                    <div class="row d-flex justify-content-center my-5">
                        <button>Voir tout</button>
                    </div>
                </a>
            @endisset

            {{-- MESSAGES DE CONFIRMATION (FLASH) --}}
            @if(session('success') != null)
                <div class="flash fs-6 rounded-3">
                    {{ session('success') }}
                </div>
            @endisset
            @if(session('update') != null)
                <div class="flash fs-6 rounded-3">
                    {{ session('update') }}
                </div>
            @endisset
            @if(session('destroy') != null)
                <div class="flash fs-6 rounded-3">
                    {{ session('destroy') }}
                </div>
            @endisset

        </div>
    </main>
</x-layout>
