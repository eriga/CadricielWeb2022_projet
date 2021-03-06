@props(['active'])

<nav class="navbar navbar-expand-md d-flex flex-wrap justify-content-end align-items-center">

    <div class="d-flex align-items-center justify-content-between right-side">
        <div class="px-3">
            <a @if ($active) {!! 'class="active"' !!} @endif href="{{ url('/') }}">
                Accueil
            </a>
        </div>
        <div class="px-3">
            <form class="col-12 col-lg-auto" method="get" action="{{ url('/posts/chercher') }}">
                <input name="recherche" class="form-control" placeholder="Rechercher..." aria-label="Search">
            </form>
        </div>
        <div class="px-2">
            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                    data-bs-toggle="dropdown" aria-expanded="false">

                    @auth
                        <img src="https://i.pravatar.cc/200?img={{ auth()->user()->id % 70 }}" alt="Photo de {{ auth()->user()->nom_complet }}" width="50" height="50" class="rounded-circle">
                    @endauth
                    @guest
                        <svg id="Component_2_2" data-name="Component 2 – 2" xmlns="http://www.w3.org/2000/svg" width="50"
                            height="50" viewBox="0 0 50 50">
                            <circle id="Ellipse_2" data-name="Ellipse 2" cx="25" cy="25" r="25" fill="#f86b3a" />
                            <g id="Iconly_Bold_Login" data-name="Iconly/Bold/Login" transform="translate(11.887 11.605)">
                                <g id="Login" transform="translate(0)">
                                    <path id="Path_3" data-name="Path 3"
                                        d="M6.613,14.866H1.079a1.063,1.063,0,1,1,0-2.126H6.613v-6.6A6.259,6.259,0,0,1,12.956,0h6.956a6.241,6.241,0,0,1,6.315,6.129h0V21.478a6.238,6.238,0,0,1-6.343,6.129H12.942a6.242,6.242,0,0,1-6.329-6.115h0V14.866H15.45L13.17,17.075a1.043,1.043,0,0,0,0,1.5,1.145,1.145,0,0,0,1.554,0h0l4.162-4.017a1.027,1.027,0,0,0,0-1.5h0L14.724,9.041a1.127,1.127,0,0,0-1.554,0,1.043,1.043,0,0,0,0,1.5h0l2.281,2.195H6.613Z"
                                        transform="translate(0)" fill="#343434" />
                                </g>
                            </g>
                        </svg>
                    @endguest
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                    @auth
                        <li><a class="dropdown-item" href="{{ url('/posts/create') }}">Publier</a></li>
                        <li><a class="dropdown-item" href="{{ url('/compte') }}">Votre compte</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ url('/deconnexion') }}">Déconnexion</a></li>
                    @endauth
                    @guest
                        <li><a class="dropdown-item" href="{{ url('/enregistrement') }}">Enregistrement</a></li>
                        <li><a class="dropdown-item" href="{{ url('/connexion') }}">Connexion</a></li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</nav>
