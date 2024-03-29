<aside class="main-sidebar sidebar-dark-warning elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('siode.dashboard.index') }}" class="brand-link text-sm">
        <img src="{{ URL::asset('images/siode.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">SiODe</span>
    </a>

    <!-- Sidebar -->

    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel d-flex mt-2 mb-2 pb-2">
            <div class="image">
                <img src="{{ url(Storage::url($desa->logo)) }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('siode.dashboard.index') }}" class="d-block">Desa Selapajang</a>
            </div>
        </div>

        <div class="form-inline d-flex mt-2 mb-2 pb-2">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar form-control-sm" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar btn-sm">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-compact nav-flat nav-child-indent nav-collapse-hide-child text-sm"
                data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">MENU UTAMA</li>
                <li class="nav-item">
                    <a href="{{ route('siode.dashboard.index') }}" class="nav-link {!! request()->is(['siode/dashboard']) || request()->is(['siode/dashboard/*']) ? 'active' : '' !!}">
                        <i class="nav-icon fas fa-solid fa-house-chimney"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('home.index') }}" class="nav-link {!! request()->is(['siode/beranda']) || request()->is(['siode/beranda/*']) ? 'active' : '' !!}">
                        <i class="nav-icon fas fa-house-user"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>
                @can('info.desa')
                    {{--  Info Desa  --}}
                    <li class="nav-item {!! request()->is(['siode/info-desa']) || request()->is(['siode/info-desa/*']) ? 'menu-open' : '' !!}">
                        <a href="#" class="nav-link {!! request()->is(['siode/info-desa']) || request()->is(['siode/info-desa/*']) ? 'active' : '' !!}">
                            <i class="nav-icon fas fa-solid fa-circle-info text-danger"></i>
                            <p>
                                Info Desa
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview {!! request()->is(['siode/info-desa']) || request()->is(['siode/info-desa/*']) ? 'menu-open' : '' !!}" style="display: none;">
                            <li class="nav-item">
                                <a href="{{ route('siode.infodesa.identitas-desa.index') }}"
                                    class="nav-link {!! request()->is(['siode/info-desa/identitas-desa']) || request()->is(['siode/info-desa/identitas-desa/*'])
                                        ? 'active'
                                        : '' !!}">
                                    <i class="far fa-circle nav-icon text-red"></i>
                                    <p>Identitas Desa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('siode.infodesa.wilayah-administratif.index') }}"
                                    class="nav-link {!! request()->is(['siode/info-desa/wilayah-administratif/']) ||
                                    request()->is(['siode/info-desa/wilayah-administratif/*'])
                                        ? 'active'
                                        : '' !!}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Wilayah Administratif</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('siode.infodesa.pemerintah.index') }}"
                                    class="nav-link {!! request()->is(['siode/info-desa/pemerintah/']) || request()->is(['siode/info-desa/pemerintah/*'])
                                        ? 'active'
                                        : '' !!}">
                                    <i class="far fa-circle nav-icon text-yellow"></i>
                                    <p>Pemerintahan Desa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon text-green"></i>
                                    <p>Status Desa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('siode.infodesa.lembaga.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon text-blue"></i>
                                    <p>Lembaga Desa</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can('kependudukan')
                    {{--  Kependudukan  --}}

                    <li class="nav-item {!! request()->is(['siode/kependudukan']) || request()->is(['siode/kependudukan/*']) ? 'menu-open' : '' !!}">
                        <a href="#" class="nav-link {!! request()->is(['siode/kependudukan']) || request()->is(['siode/kependudukan/*']) ? 'active' : '' !!}">
                            <i class="nav-icon fas fa-solid fa-people-group text-info"></i>
                            <p>
                                Kependudukan
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview {!! request()->is(['siode/kependudukan']) || request()->is(['siode/kependudukan/*']) ? 'menu-open' : '' !!}" style="display: none;">
                            <li class="nav-item">
                                <a href="{{ route('siode.kependudukan.anggota-keluarga.index') }}"
                                    class="nav-link {!! request()->is(['siode/kependudukan/kartu-keluarga/anggota-keluarga']) ||
                                    request()->is(['siode/kependudukan/kartu-keluarga/anggota-keluarga/*'])
                                        ? 'active'
                                        : '' !!}">
                                    <i class="far fa-circle nav-icon text-blue"></i>
                                    <p>Penduduk</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('siode.kependudukan.kepala-keluarga.index') }}"
                                    class="nav-link {!! request()->is(['siode/kependudukan/kartu-keluarga/kepala-keluarga']) ||
                                    request()->is(['siode/kependudukan/kartu-keluarga/kepala-keluarga/*'])
                                        ? 'active'
                                        : '' !!}">
                                    <i class="far fa-circle nav-icon text-green"></i>
                                    <p>Keluarga</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon text-yellow"></i>
                                    <p>Rumah Tangga</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('siode.kependudukan.kelompok.index') }}"
                                    class="nav-link {!! request()->is(['siode/kependudukan/kelompok']) || request()->is(['siode/kependudukan/kelompok/*'])
                                        ? 'active'
                                        : '' !!}">
                                    <i class="far fa-circle nav-icon text-red"></i>
                                    <p>Kelompok</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link {!! request()->is(['siode/kependudukan/data-suplemen']) || request()->is(['siode/kependudukan/data-suplemen/*'])
                                    ? 'active'
                                    : '' !!}">
                                    <i class="far fa-circle nav-icon text-purple"></i>
                                    <p>Data Suplemen</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon text-white"></i>
                                    <p>Calon Pemilih</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                <li class="nav-item {!! request()->is(['siode/bukuadministrasidesa']) || request()->is(['siode/bukuadministrasidesa/*'])
                    ? 'menu-open'
                    : '' !!}">
                    <a href="#" class="nav-link {!! request()->is(['siode/bukuadministrasidesa']) || request()->is(['siode/bukuadministrasidesa/*'])
                        ? 'active'
                        : '' !!}">
                        <i class="nav-icon fas fa-book text-success"></i>
                        <p>
                            Buku Administrasi Desa
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview {!! request()->is(['siode/bukuadministrasidesa']) || request()->is(['siode/bukuadministrasidesa/*'])
                        ? 'menu-open'
                        : '' !!}">
                        <li class="nav-item">
                            <a href="{{ route('siode.buku.umum.index') }}" class="nav-link {!! request()->is(['siode/bukuadministrasidesa/umum']) || request()->is(['siode/bukuadministrasidesa/umum/*'])
                                ? 'active'
                                : '' !!}">
                                <i class="far fa-circle nav-icon text-blue"></i>
                                <p>Umum</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('siode.buku.bukupenduduk.index') }}"
                                class="nav-link {!! request()->is(['siode/bukuadministrasidesa/bukupenduduk']) ||
                                request()->is(['siode/bukuadministrasidesa/bukupenduduk/*'])
                                    ? 'active'
                                    : '' !!}">
                                <i class="far fa-circle nav-icon text-white"></i>
                                <p>Penduduk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon text-green"></i>
                                <p>Pembangunan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('siode.buku.kearsipan.index') }}"
                                class="nav-link {!! request()->is(['siode/bukuadministrasidesa/kearsipan']) ||
                                request()->is(['siode/bukuadministrasidesa/kearsipan/*'])
                                    ? 'active'
                                    : '' !!}">
                                <i class="far fa-circle nav-icon text-red"></i>
                                <p>Arsip Desa</p>
                            </a>
                        </li>
                        @can('gagasan.dusun')
                            <li class="nav-item">
                                <a href="{{ route('siode.buku.gagasan.index') }}"
                                    class="nav-link {!! request()->is(['siode/bukuadministrasidesa/gagasan']) ||
                                    request()->is(['siode/bukuadministrasidesa/gagasan/*'])
                                        ? 'active'
                                        : '' !!}">
                                    <i class="far fa-circle nav-icon text-red"></i>
                                    <p>Gagasan Dusun</p>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>

                {{--  Statistik  --}}
                @can('statistik')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie text-warning"></i>
                            <p>
                                Statistik
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('siode.statistik.statistik.index') }}"
                                    class="nav-link {!! request()->is(['siode/statistik/statistik']) || request()->is(['siode/statistik/statistik/*'])
                                        ? 'active'
                                        : '' !!}">
                                    <i class="far fa-circle nav-icon text-blue"></i>
                                    <p>Statistik Kependudukan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon text-white"></i>
                                    <p>Laporan Bulanan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon text-purple"></i>
                                    <p>Laporan Penduduk</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('petadesa')
                    <li class="nav-item">
                        <a href="{{ route('siode.arsip-desa.kearsipan.peta.petalokasi') }}"
                            class="nav-link {!! request()->is(['siode/arsipdesa/kearsipan/peta']) || request()->is(['siode/arsipdesa/kearsipan/peta/*'])
                                ? 'active'
                                : '' !!}">
                            <i class="nav-icon fas fa-university text-info"></i>
                            <p>
                                Peta Desa
                                {{--  <i class="right fas fa-angle-left"></i>  --}}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('user')
                    {{--  user  --}}
                    <li class="nav-header">USER MANAGE</li>
                    <li class="nav-item {!! request()->is(['permissions', 'roles', 'users']) || request()->is(['permissions/*', 'roles/*', 'users/*'])
                        ? 'menu-open'
                        : '' !!}">
                        <a href="#" class="nav-link {!! request()->is(['permissions', 'roles', 'users']) || request()->is(['permissions/*', 'roles/*', 'users/*'])
                            ? 'active'
                            : '' !!}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Admin
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('permissions.index') }}" class="nav-link {!! request()->is(['permissions']) || request()->is(['permissions/*']) ? 'active' : '' !!}">
                                    <i class="far fa-circle nav-icon text-info"></i>
                                    <p>Permissions</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('roles.index') }}" class="nav-link {!! request()->is(['roles']) || request()->is(['roles/*']) ? 'active' : '' !!}">
                                    <i class="far fa-circle nav-icon text-warning"></i>
                                    <p>Roles</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}" class="nav-link {!! request()->is(['users']) || request()->is(['users/*']) ? 'active' : '' !!}">
                                    <i class="far fa-circle nav-icon text-danger"></i>
                                    <p>Users</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                {{--  Buku Administrasi Desa  --}}
                {{-- @can('user') --}}

                {{--  layanan Surat  --}}
                <li class="nav-item {!! request()->is(['siode/layanan-surat']) || request()->is(['siode/layanan-surat/*']) ? 'menu-open' : '' !!}">
                    <a href="#" class="nav-link {!! request()->is(['siode/layanan-surat']) || request()->is(['siode/layanan-surat/*']) ? 'active' : '' !!}">
                        <i class="nav-icon fas fa-edit text-primary"></i>
                        <p>
                            Layanan Surat
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('siode.surat.surat.index') }}"
                                class="nav-link {!! request()->is(['siode/layanan-surat/surat']) || request()->is(['siode/layanan-surat/surat/*'])
                                    ? 'active'
                                    : '' !!}">
                                <i class="far fa-circle nav-icon text-green"></i>
                                <p>Pengaturan Surat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('siode.surat.cetak-surat.index') }}"
                                class="nav-link {!! request()->is(['siode/layanan-surat/cetak-surat']) || request()->is(['siode/layanan-surat/cetak-surat/*'])
                                    ? 'active'
                                    : '' !!}">
                                <i class="far fa-circle nav-icon text-yellow"></i>
                                <p>Cetak Surat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon text-purple"></i>
                                <p>Arsip Layanan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon text-red"></i>
                                <p>Panduan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon text-blue"></i>
                                <p>Daftar Persyaratan</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
