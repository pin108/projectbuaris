<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard') }}">
                <i class="mdi mdi-view-dashboard menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('adminis/permintaan') }}">
                <i class="menu-icon mdi mdi-map-marker"></i>
                <span class="menu-title">Galang Dana</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('adminis/beasiswa') }}">
                <i class="menu-icon mdi mdi-map-marker"></i>
                <span class="menu-title">Informasi Beasiswa</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('adminis/index/lulusbeasiswa') }}">
                <i class="menu-icon mdi mdi-map-marker"></i>
                <span class="menu-title">lulus beasiswa</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('adminis/payment') }}">
                <i class="menu-icon mdi mdi-map-marker"></i>
                <span class="menu-title">Laporan Keuangan Galang Dana</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/adminis/kategoribeasiswabaru/') }}">
                <i class="menu-icon mdi mdi-map-marker"></i>
                <span class="menu-title">kategori Beasiswa Baru</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/adminis/index/kategorigalangdana') }}">
                <i class="menu-icon mdi mdi-map-marker"></i>
                <span class="menu-title">kategori Galang Dana Baru</span>
            </a>
        </li>
    </ul>
</nav>
