<nav class="navbar navbar-expand-lg navbar-dark shadow-lg bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand p-0 m-0 fs-3 fw-medium" href="#">
                Tanjung Laut
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ps-3 pe-3 ">
                        <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item ps-3 pe-3 ">
                        <a class="nav-link {{ Request::is('perangkat_desa') ? 'active' : '' }}" href="/perangkat_desa">Perangkat Desa</a>
                    </li>
                    <li class="nav-item ps-3 pe-3">
                        <a class="nav-link {{ Request::is('mata_pencaharian') ? 'active' : '' }}" href="/mata_pencaharian">Mata Pencaharian</a>
                    </li>
                    <li class="nav-item ps-3 pe-3">
                        <a class="nav-link" href="#">Page 4</a>
                    </li>
                    <li class="nav-item ps-3 pe-3">
                        <a class="nav-link" href="#">Page 5</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>