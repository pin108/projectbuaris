<nav class="navbar navbar-expand-xl bg-ghost-white">
    <div class="container-xxl justify-content-md-start">
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="./images/alsteduaribu.png" width="80" height="80" class="d-inline-block align-top" alt="Icon">
            <!-- <img src="./assets/logo.svg" alt="" /> -->
        </a>
        <!-- /.navbar-brand -->

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="./assets/icons/bars.svg" class="svg-inject svg-icon" alt="" />
        </button>
        <!-- /.navbar-toggler-mobile -->

        <div class="d-none d-md-flex d-xl-none ms-auto">
            <a class="btn btn-alice-blue text-dark fw-semiBold py-12 px-34 me-12 rounded-pill" href="/applicationform.html" role="button">Log In</a>
            <a class="btn btn-primary fw-semiBold py-12 px-43 rounded-pill" href="/applicationform.html" role="button">Sign Up</a>
        </div>
        <!-- /.btn-login and btn-signup mobile -->

        <div class="collapse navbar-collapse" id="navbarContent">
            <div class="d-grid d-xl-flex align-items-xl-center pb-15 pb-xl-0 w-100 gap-20 gap-xl-0">
                <ul class="navbar-nav mx-xl-auto order-2 order-xl-1">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('registerbeasiswa')}}">Pendaftaran Beasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('galangdana')}}">Galang Dana</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('kirimdonasi')}}">Donasi Saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/joblist.html">Inbox</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/joblist.html">Akun</a>
                    </li>
                </ul>
                <!-- /.navbar-nav -->

                <form class="order-1 order-xl-2" role="search" action="#" method="get">
                    <div class="form-search">
                        <input class="form-control" type="search" placeholder="Search here..." aria-label="Search" />
                    </div>
                </form>
                <!-- /.form-search -->

                @if(Auth::check())
                <div class="d-grid d-md-none d-xl-flex gap-15 gap-xl-0 order-3">
                    <form method="POST" action="{{ url('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-alice-blue text-dark fw-semiBold py-12 px-xl-34 ms-xl-12 rounded-pill" role="button">Log Out</button>
                    </form>
                    <!-- <span class="text-dark fw-semiBold py-12 px-xl-34 ms-xl-12 rounded-pill">{{ Auth::user()->name }}</span> -->
                    <form method="POST" action="{{ url('profile') }}">
                        @csrf
                        <button type="submit" class="btn btn-alice-blue text-dark fw-semiBold py-12 px-xl-34 ms-xl-12 rounded-pill" role="button">profile</button>
                    </form>
                </div>
                @else
                <div class="d-grid d-md-none d-xl-flex gap-15 gap-xl-0 order-3">
                    <a class="btn btn-alice-blue text-dark fw-semiBold py-12 px-xl-34 ms-xl-12 rounded-pill" href="{{ url('login') }}" role="button">Log In</a>
                    <a class="btn btn-primary fw-semiBold py-12 px-xl-43 ms-xl-12 rounded-pill" href="{{ url('register') }}" role="button">Daftar</a>
                </div>
                @endif

                <!-- /.btn-login and btn-sign-up desktop -->
            </div>
        </div>
    </div>
</nav>