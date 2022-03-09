@props(['active'])

<nav class="navbar navbar-expand-md d-flex flex-wrap justify-content-end align-items-center">

    <div class="d-flex align-items-center justify-content-between right-side">
        <div class="px-3">
            <a
            @if($active)
                {!! 'class="active"' !!}
            @endif
            href="/">
                Accueil
            </a>
        </div>
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
