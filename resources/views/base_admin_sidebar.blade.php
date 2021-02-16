<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
{{--                <img src="{{ url('assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">--}}
                <strong><span class="text-info">SI</span> <span class="text-indigo">PKK</span></strong>
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li id="menu-dashboard" class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <i class="ni ni-shop text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li id="menu-member" class="nav-item">
                        <a class="nav-link" href="{{ route('anggota.index') }}">
                            <i class="ni ni-single-02 text-info"></i>
                            <span class="nav-link-text">Profile Anggota</span>
                        </a>
                    </li>
                    <li id="menu-program-kerja" class="nav-item">
                        <a class="nav-link" href="{{ route('program-kerja.index') }}">
                            <i class="ni ni-calendar-grid-58 text-red"></i>
                            <span class="nav-link-text">Program Kerja</span>
                        </a>
                    </li>
                    <li id="menu-kegiatan-pelatihan" class="nav-item">
                        <a class="nav-link" href="{{ route('kegiatan-pelatihan.index') }}">
                            <i class="ni ni-align-left-2 text-green"></i>
                            <span class="nav-link-text">Kegiatan Pelatihan</span>
                        </a>
                    </li>
                    @if(Auth::user()->jabatan == 'admin')
                    <li id="menu-laporan" class="nav-item">
                        <a id="nav-laporan" class="nav-link" href="#navbar-reports" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-reports">
                            <i class="ni ni-single-copy-04 text-primary"></i>
                            <span class="nav-link-text">Laporan</span>
                        </a>
                        <div class="collapse" id="navbar-reports">
                            <ul class="nav nav-sm flex-column">
                                <li id="nav-laporan-program-kerja" class="nav-item">
                                    <a href="{{ route('laporan-program-kerja') }}" class="nav-link">Hasil Program Kerja</a>
                                </li>
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#" class="nav-link">Hasil Kegiatan Pelatihan</a>--}}
{{--                                </li>--}}
                            </ul>
                        </div>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>