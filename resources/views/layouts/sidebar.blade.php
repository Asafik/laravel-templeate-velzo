<div class="app-menu navbar-menu">
    <div class="navbar-brand-box">
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span>@lang('translation.menu')</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="/dashboard" role="button" aria-expanded="false"
                        aria-controls="sidebarDashboards">
                        <i class="las la-home"></i> <span>@lang('translation.dashboards')</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="/portal" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarApps">
                        <i class="lab la-delicious"></i> <span>Portal</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/portal/students" class="nav-link"><i class="las la-user-graduate"></i>
                                    Mahasiswa</a>
                            </li>
                            <li class="nav-item">
                                <a href="/portal/staff" class="nav-link"><i class="las la-users-cog"></i> Pegawai</a>
                            </li>
                            <li class="nav-item">
                                <a href="/portal/announcements" class="nav-link"><i class="las la-bullhorn"></i>
                                    Pengumuman</a>
                            </li>
                            <li class="nav-item">
                                <a href="/portal/activities" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="activities" data-key="t-email">
                                    <i class="las la-calendar-alt"></i> Kegiatan
                                </a>
                                <div class="collapse menu-dropdown" id="activities">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/portal/activities/academic" class="nav-link"><i
                                                    class="las la-school"></i> Kegiatan Akademik</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/portal/activities/academic-calendar" class="nav-link"><i
                                                    class="las la-calendar-day"></i> Kalender Akademik</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/portal/activities/calendar-monitoring" class="nav-link"><i
                                                    class="las la-calendar-check"></i> Monitoring Kalender</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="/lectures" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarLectures">
                        <i class="las la-chalkboard-teacher"></i> <span>Perkuliahan</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLectures">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/lectures/curriculum" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="curriculum">
                                    <i class="las la-book-open"></i> Data Kurikulum
                                </a>
                                <div class="collapse menu-dropdown" id="curriculum">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/lectures/curriculum/subjects" class="nav-link"><i
                                                    class="las la-book"></i> Mata Kuliah</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/lectures/curriculum/program" class="nav-link"><i
                                                    class="las la-cogs"></i> Kurikulum Prodi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/lectures/curriculum/grading-scale" class="nav-link"><i
                                                    class="las la-chart-bar"></i> Skala Nilai</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/lectures/curriculum/graduation-predicate" class="nav-link"><i
                                                    class="las la-graduation-cap"></i> Predikat Kelulusan</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="/lectures/classes" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="classData">
                                    <i class="las la-chalkboard"></i> Data Kelas
                                </a>
                                <div class="collapse menu-dropdown" id="classData">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/lectures/classes/lecture" class="nav-link"><i
                                                    class="las la-users"></i> Kelas Kuliah</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/lectures/classes/schedule" class="nav-link"><i
                                                    class="las la-calendar"></i> Jadwal Kelas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/lectures/classes/attendance" class="nav-link"><i
                                                    class="las la-check-circle"></i> Presensi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/lectures/classes/student-grades" class="nav-link"><i
                                                    class="las la-pen"></i> Nilai Mahasiswa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/lectures/classes/room-usage" class="nav-link"><i
                                                    class="las la-door-open"></i> Rekap Penggunaan Ruang</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="/lectures/administration" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="administration">
                                    <i class="las la-cogs"></i> Administrasi
                                </a>
                                <div class="collapse menu-dropdown" id="administration">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/lectures/administration/semester-status" class="nav-link"><i
                                                    class="las la-calendar-check"></i> Status Semester</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/lectures/administration/grade-conversion" class="nav-link"><i
                                                    class="las la-exchange-alt"></i> Konversi Nilai</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/lectures/administration/academic-advisor" class="nav-link"><i
                                                    class="las la-chalkboard-teacher"></i> Pembimbing Akademik</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/lectures/administration/re-registration" class="nav-link"><i
                                                    class="las la-sync-alt"></i> Daftar Ulang</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="/lectures/student-activities" class="nav-link"><i
                                        class="las la-clipboard-list"></i> Aktivitas Mahasiswa</a>
                            </li>

                            <li class="nav-item">
                                <a href="/lectures/final-project" class="nav-link"><i class="las la-laptop"></i>
                                    Tugas Akhir</a>
                            </li>

                            <li class="nav-item">
                                <a href="/lectures/graduation" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="graduationData">
                                    <i class="las la-graduation-cap"></i> Data Yudisium
                                </a>
                                <div class="collapse menu-dropdown" id="graduationData">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/lectures/graduation/add-participant" class="nav-link"><i
                                                    class="las la-user-plus"></i> Tambah Peserta Yudisium</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/lectures/graduation/list" class="nav-link"><i
                                                    class="las la-list-ul"></i> Daftar Yudisium</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/lectures/graduation/period" class="nav-link"><i
                                                    class="las la-calendar-week"></i> Periode Yudisium</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/lectures/graduation/requirements" class="nav-link"><i
                                                    class="las la-file-alt"></i> Syarat Yudisium</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/lectures/graduation/dropout" class="nav-link"><i
                                                    class="las la-times-circle"></i> Kelulusan/Dropout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="/lectures/transcript/batch" class="nav-link"><i class="las la-file-alt"></i>
                                    Transkrip Angkatan</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="/kemahasiswaan" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarKemahasiswaan">
                        <i class="las la-graduation-cap"></i> <span>Kemahasiswaan</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarKemahasiswaan">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/kemahasiswaan/prestasi" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="prestasi">
                                    <i class="las la-trophy"></i> Prestasi
                                </a>
                                <div class="collapse menu-dropdown" id="prestasi">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/kemahasiswaan/prestasi/jenis" class="nav-link"><i
                                                    class="las la-cogs"></i> Jenis Prestasi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/kemahasiswaan/prestasi/kelompok" class="nav-link"><i
                                                    class="las la-users"></i> Kelompok Prestasi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/kemahasiswaan/prestasi/daftar" class="nav-link"><i
                                                    class="las la-list"></i> Daftar Prestasi</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/kemahasiswaan/beasiswa" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="beasiswa">
                                    <i class="las la-money-check-alt"></i> Beasiswa
                                </a>
                                <div class="collapse menu-dropdown" id="beasiswa">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/kemahasiswaan/beasiswa/jenis" class="nav-link"><i
                                                    class="las la-clipboard-list"></i> Jenis Beasiswa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/kemahasiswaan/beasiswa/daftar" class="nav-link"><i
                                                    class="las la-scroll"></i> Daftar Beasiswa</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="/data-pelengkap" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDataPelengkap">
                        <i class="las la-cogs"></i> <span>Data Pelengkap</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDataPelengkap">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/data-pelengkap/perguruan-tinggi" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="perguruanTinggi">
                                    <i class="las la-university"></i> Perguruan Tinggi
                                </a>
                                <div class="collapse menu-dropdown" id="perguruanTinggi">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/perguruan-tinggi/profil" class="nav-link"><i
                                                    class="las la-user-circle"></i> Profil PT</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/perguruan-tinggi/jurusan" class="nav-link"><i
                                                    class="las la-school"></i> Jurusan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/perguruan-tinggi/program-studi"
                                                class="nav-link"><i class="las la-book"></i> Program Studi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/perguruan-tinggi/tingkat-pendidikan"
                                                class="nav-link"><i class="las la-graduation-cap"></i> Tingkat
                                                Pendidikan Univ.</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/perguruan-tinggi/sistem-kuliah"
                                                class="nav-link"><i class="las la-calendar-week"></i> Sistem
                                                Kuliah</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/perguruan-tinggi/ruang-kuliah"
                                                class="nav-link"><i class="las la-door-open"></i> Ruang Kuliah</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/perguruan-tinggi/universitas-luar"
                                                class="nav-link"><i class="las la-globe"></i> Universitas Luar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/perguruan-tinggi/instansi" class="nav-link"><i
                                                    class="las la-building"></i> Instansi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/perguruan-tinggi/contact-person"
                                                class="nav-link"><i class="las la-phone"></i> Contact Person</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/data-pelengkap/perkuliahan" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="perkuliahan">
                                    <i class="las la-book-open"></i> Perkuliahan
                                </a>
                                <div class="collapse menu-dropdown" id="perkuliahan">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/perkuliahan/jenis-mata-kuliah"
                                                class="nav-link"><i class="las la-chalkboard-teacher"></i> Jenis Mata
                                                Kuliah</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/perkuliahan/kelompok-mata-kuliah"
                                                class="nav-link"><i class="las la-th-large"></i> Kelompok Mata
                                                Kuliah</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/perkuliahan/bidang-ilmu" class="nav-link"><i
                                                    class="las la-sitemap"></i> Bidang Ilmu</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/perkuliahan/grup-kelas" class="nav-link"><i
                                                    class="las la-users"></i> Grup Kelas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/perkuliahan/slot-waktu" class="nav-link"><i
                                                    class="las la-clock"></i> Slot Waktu</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/perkuliahan/jenis-pertemuan" class="nav-link"><i
                                                    class="las la-calendar-day"></i> Jenis Pertemuan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/perkuliahan/jenis-kegiatan-pendukung"
                                                class="nav-link"><i class="las la-briefcase"></i> Jenis Kegiatan
                                                Pendukung</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/data-pelengkap/biodata" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="biodata">
                                    <i class="las la-user"></i> Biodata
                                </a>
                                <div class="collapse menu-dropdown" id="biodata">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/biodata/agama" class="nav-link"><i
                                                    class="las la-praying-hands"></i> Agama</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/biodata/pekerjaan" class="nav-link"><i
                                                    class="las la-briefcase"></i> Pekerjaan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/biodata/penghasilan" class="nav-link"><i
                                                    class="las la-wallet"></i> Penghasilan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/biodata/suku" class="nav-link"><i
                                                    class="las la-users"></i> Suku</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/biodata/kebutuhan-khusus" class="nav-link"><i
                                                    class="las la-user"></i> Kebutuhan Khusus</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/data-pelengkap/mahasiswa" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="mahasiswa">
                                    <i class="las la-user-graduate"></i> Mahasiswa
                                </a>
                                <div class="collapse menu-dropdown" id="mahasiswa">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/mahasiswa/status" class="nav-link"><i
                                                    class="las la-id-badge"></i> Status Mahasiswa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/mahasiswa/jenis-tinggal" class="nav-link"><i
                                                    class="las la-home"></i> Jenis Tinggal</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/mahasiswa/transportasi" class="nav-link"><i
                                                    class="las la-bus"></i> Transportasi</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/data-pelengkap/pegawai" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="pegawai">
                                    <i class="las la-users-cog"></i> Pegawai
                                </a>
                                <div class="collapse menu-dropdown" id="pegawai">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/pegawai/jenis" class="nav-link"><i
                                                    class="las la-user-tie"></i> Jenis Pegawai</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/pegawai/status-keaktifan" class="nav-link"><i
                                                    class="las la-clipboard-list"></i> Status Keaktifan</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/data-pelengkap/wilayah" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="wilayah">
                                    <i class="las la-map-marker-alt"></i> Wilayah
                                </a>
                                <div class="collapse menu-dropdown" id="wilayah">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/wilayah/negara" class="nav-link"><i
                                                    class="las la-flag"></i> Negara</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/wilayah/provinsi" class="nav-link"><i
                                                    class="las la-flag-checkered"></i> Provinsi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/wilayah/kabupaten" class="nav-link"><i
                                                    class="las la-map"></i> Kabupaten</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/data-pelengkap/wilayah/kecamatan" class="nav-link"><i
                                                    class="las la-map-signs"></i> Kecamatan</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="/laporan" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarLaporan">
                        <i class="las la-clipboard"></i> <span>Laporan</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLaporan">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/laporan/mahasiswa" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="laporanMahasiswa">
                                    <i class="las la-user-graduate"></i> Mahasiswa
                                </a>
                                <div class="collapse menu-dropdown" id="laporanMahasiswa">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/laporan/mahasiswa/daftar-hadir" class="nav-link"><i
                                                    class="las la-calendar-check"></i> Daftar Hadir</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/mahasiswa/khs" class="nav-link"><i
                                                    class="las la-file-alt"></i> KHS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/mahasiswa/krs" class="nav-link"><i
                                                    class="las la-list-ol"></i> KRS Mahasiswa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/mahasiswa/perwalian" class="nav-link"><i
                                                    class="las la-clipboard"></i> Perwalian</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/mahasiswa/daftar-mahasiswa" class="nav-link"><i
                                                    class="las la-users"></i> Daftar Mahasiswa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/mahasiswa/transkip" class="nav-link"><i
                                                    class="las la-file-invoice"></i> Transkip Mahasiswa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/mahasiswa/ijazah" class="nav-link"><i
                                                    class="las la-graduation-cap"></i> Ijazah Mahasiswa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/mahasiswa/rekap-presensi" class="nav-link"><i
                                                    class="las la-chart-pie"></i> Rekap Presensi Mahasiswa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/mahasiswa/mahasiswa-bermasalah" class="nav-link"><i
                                                    class="las la-exclamation-triangle"></i> Mahasiswa Bermasalah</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/laporan/perkuliahan" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="laporanPerkuliahan">
                                    <i class="las la-chalkboard-teacher"></i> Perkuliahan
                                </a>
                                <div class="collapse menu-dropdown" id="laporanPerkuliahan">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/laporan/perkuliahan/silabus" class="nav-link"><i
                                                    class="las la-book-open"></i> Silabus Matakuliah</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/perkuliahan/daftar-matakuliah" class="nav-link"><i
                                                    class="las la-list-alt"></i> Daftar Matakuliah</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/perkuliahan/kehadiran" class="nav-link"><i
                                                    class="las la-chart-line"></i> Presentasi Kehadiran MHS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/perkuliahan/jadwal-kuliah" class="nav-link"><i
                                                    class="las la-calendar-alt"></i> Jadwal Kuliah</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/perkuliahan/jurnal-kuliah" class="nav-link"><i
                                                    class="las la-book"></i> Jurnal Kuliah</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/laporan/dosen" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="laporanDosen">
                                    <i class="las la-chalkboard"></i> Dosen
                                </a>
                                <div class="collapse menu-dropdown" id="laporanDosen">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/laporan/dosen/jadwal-semester-depan" class="nav-link"><i
                                                    class="las la-calendar-check"></i> Jadwal Semester Depan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/dosen/daftar-dosen" class="nav-link"><i
                                                    class="las la-users"></i> Daftar Dosen</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/dosen/jadwal-mengajar" class="nav-link"><i
                                                    class="las la-calendar"></i> Jadwal Mengajar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/dosen/rekap-jadwal" class="nav-link"><i
                                                    class="las la-clipboard-list"></i> Rekap Jadwal Dosen</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/dosen/distribusi-dosen-wali" class="nav-link"><i
                                                    class="las la-users-cog"></i> Distribusi Dosen Wali</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/laporan/tingkat-akhir" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="laporanTingkatAkhir">
                                    <i class="las la-graduation-cap"></i> Tingkat Akhir
                                </a>
                                <div class="collapse menu-dropdown" id="laporanTingkatAkhir">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/laporan/tingkat-akhir/tugas-akhir" class="nav-link"><i
                                                    class="las la-pencil-alt"></i> Tugas Akhir</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/tingkat-akhir/jumlah-mhs-tugas-akhir"
                                                class="nav-link"><i class="las la-users-cog"></i> Jumlah MHS Tugas
                                                Akhir</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/tingkat-akhir/daftar-wisuda" class="nav-link"><i
                                                    class="las la-certificate"></i> Daftar Wisuda/Yudisium</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/laporan/nilai" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="laporanNilai">
                                    <i class="las la-graduation-cap"></i> Nilai
                                </a>
                                <div class="collapse menu-dropdown" id="laporanNilai">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/laporan/nilai/ipk-mahasiswa" class="nav-link"><i
                                                    class="las la-chart-bar"></i> IPK Mahasiswa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/nilai/nilai-mahasiswa" class="nav-link"><i
                                                    class="las la-file-invoice"></i> Nilai Mahasiswa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/nilai/rekap-ipk" class="nav-link"><i
                                                    class="las la-users"></i> Rekap IPK</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/nilai/rangking-ipk" class="nav-link"><i
                                                    class="las la-crown"></i> Rangking IPK</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/laporan/administrasi" class="nav-link" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="laporanAdministrasi">
                                    <i class="las la-cogs"></i> Administrasi
                                </a>
                                <div class="collapse menu-dropdown" id="laporanAdministrasi">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="/laporan/administrasi/status-semester" class="nav-link"><i
                                                    class="las la-clock"></i> Status Semester Mahasiswa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/administrasi/jumlah-mahasiswa-status"
                                                class="nav-link"><i class="las la-users"></i> Jumlah Mahasiswa Per
                                                Status</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/administrasi/status-mahasiswa" class="nav-link"><i
                                                    class="las la-id-card"></i> Status Mahasiswa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/administrasi/kalender-akademik" class="nav-link"><i
                                                    class="las la-calendar-alt"></i> Kalender Akademik</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/laporan/administrasi/daftar-pegawai" class="nav-link"><i
                                                    class="las la-users"></i> Daftar Pegawai</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/laporan/feeder/koneksi" class="nav-link">
                                    <i class="las la-database"></i> Feeder PDDIKTI
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="/pengaturan" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarPengaturan">
                        <i class="las la-cogs"></i> <span>Pengaturan</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPengaturan">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/pengaturan/setting-aplikasi" class="nav-link">
                                    <i class="las la-cogs"></i> Setting Aplikasi
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/pengaturan/tahun-ajaran" class="nav-link">
                                    <i class="las la-calendar-alt"></i> Tahun Ajaran
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/pengaturan/periode-akademik" class="nav-link">
                                    <i class="las la-calendar-check"></i> Periode Akademik
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/pengaturan/setting-prodi" class="nav-link">
                                    <i class="las la-university"></i> Setting Prodi
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="/selengkapnya/manajemen-user" class="nav-link">
                        <i class="las la-users"></i> Manajemen User
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>
<div class="vertical-overlay"></div>
