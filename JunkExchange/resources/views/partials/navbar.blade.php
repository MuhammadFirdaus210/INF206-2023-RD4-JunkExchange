<nav class="nav px-2 py-2 shadow sticky-top" style="background-color: #2aba86">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link fs-30 text-white" href="/">Home</a>
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
        <li class="nav-item">
            <a class="nav-link text-white" href="/dasbor">
                Dasbor
                {{-- <i class="bi bi-person-circle"></i> --}}
            </a>
        </li>
        <li class="nav-item">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn text-white">Logout</button>
            </form>
        </li>
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