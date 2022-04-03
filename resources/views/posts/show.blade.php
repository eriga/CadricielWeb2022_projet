<x-layout>
    <!-- https://getbootstrap.com/docs/5.1/examples/headers/ -->
    <header class="p-3 py-4 bg-secondaire">
        <x-header.nav :active="false"/>
    </header>
    <main>
        <div class="container py-4">
            <div class="row mb-5">
                <a class="d-flex justify-content-center" href="{{ url('/') }}"><button>Retour</button></a>
            </div>
            <div class="row">
                <div class="mb-3 text-center">
                    <h6 class="text-center text-color">
                        {{ $post->user->nom_complet }} |
                        {{ $post->categorie->nom }} |
                        {{ ucfirst($post->created_at->diffForHumans()) }} |
                        {{ $post->popularite }}</h6>
                
                    @if($post->image == null) 
                        <img src="https://via.placeholder.com/600x400" class="" alt="" width="600px" height="400px">
                    @else
                        <img src="{{ asset('storage/img/' . $post->image) }}" width="600px" height="400px">
                    @endif

                    @auth
                        <div class="mt-3">
                            <a href="{{ url('/posts/popularite/like/' . $post->id) }}">
                                <svg class="like" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                                    <g id="Circle_Button" data-name="Circle Button" transform="translate(-0.375 -0.375)">
                                        <rect id="Area" width="36" height="36" rx="18" transform="translate(0.375 0.375)" fill="#2e741d" />
                                        <g id="Icon" transform="translate(10.719 10.719)">
                                            <rect id="Area-2" data-name="Area" width="16" height="16" transform="translate(-0.343 -0.344)"
                                                fill="#fcfcfc" opacity="0" />
                                            <g id="Icon-2" data-name="Icon" transform="translate(0.988 1.913)">
                                                <path id="Path"
                                                    d="M13.6,3.527a3.51,3.51,0,0,0-4.964,0L7.959,4.2l-.676-.676A3.51,3.51,0,0,0,2.318,8.491L3,9.167l4.964,4.964,4.964-4.964.677-.676A3.509,3.509,0,0,0,13.6,3.527Z"
                                                    transform="translate(-1.29 -2.499)" fill="none" stroke="#fcfcfc" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="1.667" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <a href="{{ url('/posts/popularite/dislike/' . $post->id) }}">
                                <svg class="dislike" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                                    <g id="Circle_Button" data-name="Circle Button" transform="translate(-0.375 -0.375)">
                                        <rect id="Area" width="36" height="36" rx="18" transform="translate(0.375 0.375)" fill="#802525" />
                                        <g id="Icon" transform="translate(73.036 20.368)">
                                            <path id="Path_1" data-name="Path 1" d="M-59.866-7.2-49.455,3.213" transform="translate(0 0)" fill="none"
                                                stroke="#fff" stroke-linecap="round" stroke-width="2" />
                                            <path id="Path_2" data-name="Path 2" d="M0,0,10.411,10.411" transform="translate(-49.455 -7.198) rotate(90)"
                                                fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2" />
                                        </g>
                                    </g>
                                </svg>
                            </a>

                        </div>
                    @endauth



                    <div>
                        <h1 class="text-primaire fs-1">{{ $post->titre }}</h1>
                        <section class="w-75 text-start fs-5 m-auto text-color">
                            {{ $post->texte }}
                        </section>
                    </div>
                </div>


            </div>
        </div>
    </main>
</x-layout>
