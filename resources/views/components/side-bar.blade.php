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
                <a href="{{route('students.index')}}" aria-expanded="false">Tabel Data Siswa Aktif</a>
            </li>
            <li class="side-nav-item">
                <a href="{{route('students.moved')}}" aria-expanded="false">Tabel Data Siswa Keluar</a>
            </li>
            <li class="side-nav-item">
                <a href="{{route('students.create')}}" aria-expanded="false">Tambah Siswa Baru </a>
            </li>
            <li class="side-nav-item">
                <a href="{{route('grades.index')}}" aria-expanded="false">Tabel Data Kelas </a>
            </li>
            <li class="side-nav-item">
                <a href="{{route('grades.create')}}" aria-expanded="false">Tambah Kelas Baru </a>
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
                <a href="{{route('teachers.index')}}" aria-expanded="false">Tabel Data Guru </a>
            </li>
            <li class="side-nav-item">
                <a href="{{route('teachers.create')}}" aria-expanded="false">Tambah Guru Baru </a>
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
                <a href="{{route('lesson-values.index')}}" aria-expanded="false">Tabel Data Nilai </a>
            </li>
            <li class="side-nav-item">
                <a href="{{route('lesson-values.create')}}" aria-expanded="false">Tambah Nilai Baru </a>
            </li>
            {{-- <li class="side-nav-item">
                <a href="#" aria-expanded="false">Laporan Data Nilai</a>
            </li> --}}
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
                <a href="{{route('subjects.index')}}" aria-expanded="false">Tabel Data Mapel </a>
            </li>
            <li class="side-nav-item">
                <a href="{{route('subjects.create')}}" aria-expanded="false">Tambah Mapel Baru </a>
            </li>
            {{-- <li class="side-nav-item">
                <a href="#" aria-expanded="false">Laporan Data Mapel</a>
            </li> --}}
        </ul>
    </li>
    <li class="side-nav-item">
        <a href="{{route('school-identity.index')}}" class="side-nav-link">
            <i class="uil-location-point"></i>
            {{-- <span class="badge badge-success float-right">4</span> --}}
            <span> Identitas Sekolah </span>
        </a>
    </li>
</ul>
