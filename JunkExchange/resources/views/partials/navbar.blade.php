<nav class="nav px-2 py-2 shadow sticky-top" style="background-color: #2aba86">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link fs-30 text-white" href="/">
                <i class="bi bi-house-door-fill fs-5"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-30 text-white" href="/about">Tentang Kami</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fs-30 text-white" href="/contact">Hubungi Kami</a>
        </li>
    </ul>

    <ul class="nav ms-auto">
        @auth

        <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample">
            <i class="bi bi-people-fill fs-5 text-white "></i>
        </button>

        <div class="offcanvas offcanvas-end w-25" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header pb-0">
                <a href="/" class="d-flex align-items-center gap-3 text-decoration-none" style="color: #2aba86">
                    <i class="bi bi-people-fill fs-3"></i>
                    <span class="fs-4">Pengguna</span>
                </a>
                <button type="button" class="btn-close" style="color: #2aba86" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <hr>
                <div>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link" style="color: #2aba86" aria-current="page">
                                <i class="bi bi-house-door-fill"></i>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dasbor" class="nav-link" style="color: #2aba86">
                                <i class="bi bi-person-workspace"></i>
                                Dashboard
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="nav-link" style="color: #2aba86">
                                    <i class="bi bi-box-arrow-right"></i>
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

            @else
            <li class="nav-item">
                <a class="nav-link mx-2 py-1 fs-30 bg-white border border-white border-2 rounded" style="color: #2aba86"
                    href="/login">Masuk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-2 py-1 fs-30 text-white border border-white border-2 rounded"
                    href="/register">Daftar</a>
            </li>

            @endauth
    </ul>
        
</nav>