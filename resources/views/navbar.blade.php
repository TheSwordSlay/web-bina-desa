<nav class="navbar navbar-expand-lg navbar-dark shadow-lg custom-bg-color sticky-top" style="background-color: #9EDDFF;">
        <div class="container">
            <a class="navbar-brand p-0 m-0 fs-3 fw-medium text-dark" href="#">
                Tanjung Laut
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ps-3 pe-3 ">
                        <a class="nav-link {{ Request::is('home') ? 'active' : '' }} text-dark" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item ps-3 pe-3 ">
                        <a class="nav-link {{ Request::is('perangkat_desa') ? 'active' : '' }} text-dark" href="/perangkat_desa">Perangkat Desa</a>
                    </li>
                    <li class="nav-item ps-3 pe-3">
                        <a class="nav-link {{ Request::is('mata_pencaharian') ? 'active' : '' }} text-dark" href="/mata_pencaharian">Mata Pencaharian</a>
                    </li>
                    <li class="nav-item ps-3 pe-3">
                        <a class="nav-link text-dark" href="#">Page 4</a>
                    </li>
                    <li class="nav-item ps-3 pe-3">
                        <a class="nav-link text-dark" href="#">Page 5</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <style>
        .navbar-nav .nav-link {
            font-weight: bold;
        }

        .navbar-nav .nav-link:hover {
            text-decoration: underline;
        }
    </style>