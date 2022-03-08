<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Cadriciel Web 2022</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- https://getbootstrap.com/docs/5.1/examples/headers/ -->
    <header class="p-3 py-4 bg-secondaire">
        <nav class="navbar navbar-expand-md d-flex flex-wrap justify-content-end align-items-center">

            <div class="d-flex align-items-center justify-content-between right-side">
                <div class="px-3"><a class="active" href="/">Accueil</a></div>
                <div class="px-3">
                    <form class="col-12 col-lg-auto">
                        <input type="search" class="form-control" placeholder="Rechercher..." aria-label="Search">
                    </form>
                </div>
                <div class="px-2">
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="50" height="50" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="publish.html">Publier</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Déconnexion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <h1 class="mt-5 mb-3 m-auto text-center">Cadriciel Web 2022</h1>
        <p class="text-center mb-5 m-auto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, iste perferendis dolore non quae cumque eos atque itaque aut repudiandae at velit, quibusdam vel repellendus, deleniti ipsa ratione! Sequi, recusandae!</p>
    </header>
    <main>
        <div class="container py-5">
            <div class="row">
                @forelse($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-3 post-container">
                            <div
                                class="post"
                                onclick="window.location.href ='/posts/{{ $post->id }}'"
                            >
                                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80">
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
                @empty
                    <h3>Aucune publication trouvée</h3>
                @endforelse

            </div>

            <div class="row d-flex justify-content-center my-5">
                <button>Voir tout</button>
            </div>
        </div>
    </main>
        <!-- https://getbootstrap.com/docs/5.1/examples/footers/ (3e) -->
    <footer class="py-3 bg-footer text-footer">
        <h5 class="text-center pb-3 mb-3 mt-3">
            Cadriciel Web 2022
        </h5>
        <p class="text-center">CadW © 2022 Tous droits réservés</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
