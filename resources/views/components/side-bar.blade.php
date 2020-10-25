<!--- Sidemenu -->
<ul class="metismenu side-nav">

    <li class="side-nav-item">
        <a href="{{route('home')}}" class="side-nav-link">
            <i class="uil-home-alt"></i>
            {{-- <span class="badge badge-success float-right">4</span> --}}
            <span> Beranda </span>
        </a>
    </li>


    <li class="side-nav-item">
        <a href="#" class="side-nav-link">
            <i class="uil-folder-plus"></i>
            <span> Siswa </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="side-nav-second-level" aria-expanded="false">
            <li class="side-nav-item">
                <a href="{{route('students.index')}}" aria-expanded="false">Tabel Data Siswa </a>
            </li>
            <li class="side-nav-item">
                <a href="{{route('students.create')}}" aria-expanded="false">Tambah Siswa Baru </a>
            </li>
            <li class="side-nav-item">
                <a href="{{route('students.report')}}" aria-expanded="false">Laporan Data Siswa</a>
            </li>
        </ul>
    </li>
    <li class="side-nav-item">
        <a href="#" class="side-nav-link">
            <i class="uil-folder-plus"></i>
            <span> Guru </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="side-nav-second-level" aria-expanded="false">
            <li class="side-nav-item">
                <a href="#" aria-expanded="false">Tabel Data Guru </a>
            </li>
            <li class="side-nav-item">
                <a href="#" aria-expanded="false">Tambah Guru Baru </a>
            </li>
            <li class="side-nav-item">
                <a href="#" aria-expanded="false">Laporan Data Guru</a>
            </li>
        </ul>
    </li>
    <li class="side-nav-item">
        <a href="#" class="side-nav-link">
            <i class="uil-folder-plus"></i>
            <span> Nilai </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="side-nav-second-level" aria-expanded="false">
            <li class="side-nav-item">
                <a href="#" aria-expanded="false">Tabel Data Nilai </a>
            </li>
            <li class="side-nav-item">
                <a href="#" aria-expanded="false">Tambah Nilai Baru </a>
            </li>
            <li class="side-nav-item">
                <a href="#" aria-expanded="false">Laporan Data Nilai</a>
            </li>
        </ul>
    </li>
    <li class="side-nav-item">
        <a href="#" class="side-nav-link">
            <i class="uil-folder-plus"></i>
            <span> Mapel </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="side-nav-second-level" aria-expanded="false">
            <li class="side-nav-item">
                <a href="#" aria-expanded="false">Tabel Data Mapel </a>
            </li>
            <li class="side-nav-item">
                <a href="#" aria-expanded="false">Tambah Mapel Baru </a>
            </li>
            <li class="side-nav-item">
                <a href="#" aria-expanded="false">Laporan Data Mapel</a>
            </li>
        </ul>
    </li>

</ul>
