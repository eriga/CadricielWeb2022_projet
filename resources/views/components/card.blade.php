@props(['post'])

<div class="col-lg-4 col-md-6 mb-3 post-container">
    <div class="post" onclick="window.location.href ='/posts/{{ $post->id }}'">
        <img
            src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80">
        <div class="post-body">

            {{-- INFOS --}}
            <h6 class="text-center">
                {{ $post->created_at->diffForHumans() }} |
                <a href="/categorie/{{ $post->categorie->id }}">
                    {{ $post->categorie->nom }}
                </a>
                | {{ $post->popularite }}
            </h6>

            {{-- AUTEUR --}}
            <h6 class="text-center">
                <a href="/auteur/{{ $post->user->id }}">
                    {{ $post->user->nom_complet }}
                </a>
            </h6>    
            
            {{-- BOUTONS --}}
            <div class="text-center my-1">
                <a href="/posts/update/{{ $post->id }}">
                    <x-buttons.edit />
                </a>
                <a href="/posts/destroy/{{ $post->id }}">
                    <x-buttons.destroy />
                </a>
            </div>

            {{-- TITRE --}}
            <h5 class="">{{ $post->titre }}</h5>                        

            {{-- RÉSUMÉ --}}
            <p class="">{{ $post->texte }}</p> 
        </div>
    </div>
    <!-- </a> -->
</div>
