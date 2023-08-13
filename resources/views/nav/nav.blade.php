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
            <a class="nav-link" href="{{ url('pelanggan') }}">
                <i class="menu-icon mdi mdi-map-marker"></i>
                <span class="menu-title">Tambah Donasi</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('adminis/beasiswa') }}">
                <i class="menu-icon mdi mdi-map-marker"></i>
                <span class="menu-title">Informasi Beasiswa</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('transasksireport') }}">
                <i class="menu-icon mdi mdi-map-marker"></i>
                <span class="menu-title">Laporan Informasi</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('transasksireport') }}">
                <i class="menu-icon mdi mdi-map-marker"></i>
                <span class="menu-title">Informasi Pengguna</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('transasksireport') }}">
                <i class="menu-icon mdi mdi-map-marker"></i>
                <span class="menu-title">Verifikasi Data Penyedia Donasi</span>
            </a>
        </li>
    </ul>
</nav>
