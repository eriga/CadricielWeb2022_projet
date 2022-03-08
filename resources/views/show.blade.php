<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil | Blog Cadriciel Web | 2022</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- https://getbootstrap.com/docs/5.1/examples/headers/ -->
    <header class="p-3 py-4 bg-secondaire">
        <nav class="navbar navbar-expand-md d-flex flex-wrap justify-content-between align-items-center">
            <div>
                <p class="d-flex mb-2 mb-lg-0 text-decoration-none fw-bold">
                    Cadriciel Web 2022
                </p>
            </div>

            <div class="d-flex align-items-center justify-content-between right-side">
                <div class="px-3"><a class="text-decoration-none" href="/">Accueil</a></div>
                <div class="px-3">
                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
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
    </header>
    <main>
        <div class="container py-4">
            <div class="row mb-5">
                <a class="d-flex justify-content-center" href="/"><button>Retour</button></a>
            </div>
            <div class="row">
                <div class="mb-3 text-center">
                    <h6 class="text-center text-color">
                        {{ $post[0]->auteur }} |
                        {{ $post[0]->categorie }}|
                        Date |
                        Popularité</h6>
                    <img src="https://via.placeholder.com/600x400" class="" alt="" width="600px" height="400px">

                    <div class="mt-3">
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
                        </svg><svg class="dislike" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
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

                    </div>




                    <div>
                        <h1 class="text-primaire fs-1">{{ $post[0]->titre }}</h1>
                        <section class="w-75 text-start fs-5 m-auto text-color">
                            {{ $post[0]->texte }}
                        </section>
                    </div>
                </div>


            </div>
        </div>
    </main>
    <!-- https://getbootstrap.com/docs/5.1/examples/footers/ (3e) -->
    <footer class="py-3 bg-footer texte-footer">
        <h5 class="text-center pb-3 mb-3 mt-3">
            Cadriciel Web 2022
        </h5>
        <p class="text-center">CadW © 2022 Tous droits réservés</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
