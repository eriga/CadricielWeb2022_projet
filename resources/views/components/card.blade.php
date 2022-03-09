@props(['post'])

<div class="col-lg-4 col-md-6 mb-3 post-container">
    <div class="post" onclick="window.location.href ='/posts/{{ $post->id }}'">
        <img
            src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80">
        <div class="post-body">
            <h6 class="text-center">
                10 janvier 2022 |
                <a href="/categorie/{{ $post->categorie }}">
                    {{ $post->categorie }}
                </a>
                | +12
            </h6>
            <h6 class="text-center">
                <a href="/auteur/{{ $post->auteur }}">
                    {{ $post->auteur }}
                </a>
            </h6>
            <h5 class="">{{ $post->titre }}</h5>
            <p class="">{{ $post->texte }}</p>
        </div>
    </div>
    <!-- </a> -->
</div>
