
@php( $user = \Illuminate\Support\Facades\Auth::user()) 

<nav class="nav px-2 py-1 shadow sticky-top" style="background-color: #2aba86">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link fs-30 text-white" href="/">
                <i class="bi bi-house-door-fill fs-5"></i>
            </a>
        </li>
        <li class="nav-item" style="padding-top : 3px">
            <a class="nav-link fs-30 text-white" href="/about" style="paddin">Tentang Kami</a>
        </li>
        <li class="nav-item" style="padding-top : 3px">
            <a href="{{ url('/catalog?search=') }}" class="nav-link fs-30 text-white" style="paddin">Semua Produk</a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link fs-30 text-white" href="/contact">Hubungi Kami</a>
        </li> -->
    </ul>

    <ul class="nav ms-auto">
        @auth
        <div class="dropdown">
            <button class="btn" type="button" data-bs-toggle="dropdown" >
                <i class="bi bi-bell-fill fs-5 text-white py-1"></i>
            </button>
            <ul class="dropdown-menu px-2 py-2 row gy-2 shadow" style="width: 300px; border-color: #2aba86; transition: .5s;">
                <h5 class="fw-bold" style="color: #2aba86">Notification</h5>
                @foreach ($user->notifications as $notification)
                @if ($notification->data['message'])
                <li class="list-group-item border rounded">
                    <div class="mx-1 p-1 text-secondary">
                      <div class="fw-bold" style="color: #2aba86">Hubungi : {{ $notification->data['contact'] }}</div>
                        <a class="text-decoration-none" href="https://wa.me/{{ $notification->data['contact'] }} " style="color: #2aba86">Klik disini</a>
                      | Pengajuan anda {{ $notification->data['message'] }}
                    </div>
                </li>
                @elseif($notification === null)
                <li class="list-group-item border rounded" >
                    <div class="mx-1 p-1">
                      Belum ada notifikasi nih!!
                    </div>
                </li>
                @else
                <li class="list-group-item border rounded" >
                    <div class="mx-1 p-1">
                      Belum ada notifikasi nih!!
                    </div>
                </li>
                @endif
                @endforeach
            </ul>
        </div>

        <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample">
            <i class="bi bi-people-fill fs-5 text-white py-0"></i>
        </button>

        <div class="offcanvas offcanvas-end w-25" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header pb-0">
                <a href="/" class="d-flex align-items-center gap-3 text-decoration-none" style="color: #2aba86">
                    <i class="bi bi-people-fill fs-3"></i>
                    <span class="fs-4">{{ $user->name }}</span>
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
            <li class="nav-item pt-1">
                <a class="nav-link mx-2 py-1 fs-30 bg-white border border-white border-2 rounded" style="color: #2aba86"
                    href="/login">Masuk</a>
            </li>
            <li class="nav-item pt-1">
                <a class="nav-link mx-2 py-1 fs-30 text-white border border-white border-2 rounded"
                    href="/register">Daftar</a>
            </li>

            @endauth
    </ul>
        
</nav>