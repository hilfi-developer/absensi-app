<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">ABSENSI SEKOLAH</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">AS</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="dropdown">
        <a href="/" class="nav-link"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
      </li>
      <li class="menu-header">Menu Utama</li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>Data Users</span></a>
        <ul class="dropdown-menu" style="margin-left: -0.5rem;">
            <li><a class="nav-link" href="{{ route('datakepsek.index') }}"><i class="fas fa-caret-right" style="margin:0;"></i><span>Data KepSek</span></a></li>
            <li><a class="nav-link" href="layout-top-navigation.html"><i class="fas fa-caret-right" style="margin:0;"></i><span>Data Wali Kelas</span></a></li>
            <li><a class="nav-link" href="layout-top-navigation.html"><i class="fas fa-caret-right" style="margin:0;"></i><span>Data Guru</span></a></li>
            <li><a class="nav-link" href="layout-top-navigation.html"><i class="fas fa-caret-right" style="margin:0;"></i><span>Data Murid</span></a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cubes"></i> <span>Data Master</span></a>
        <ul class="dropdown-menu" style="margin-left: -0.5rem;">
          <li><a class="nav-link" href="layout-default.html"><i class="fas fa-caret-right" style="margin:0;"></i><span>Jurusan</span></a></li>
          <li><a class="nav-link" href="layout-top-navigation.html"><i class="fas fa-caret-right" style="margin:0;"></i><span>Tahun Pelajaran</span></a></li>
          <li><a class="nav-link" href="layout-top-navigation.html"><i class="fas fa-caret-right" style="margin:0;"></i><span>Mata Pelajaran</span></a></li>
        </ul>
      </li>
      <li class="menu-header">Menu Setting</li>
      <li><a href="#" class="nav-link"><i class="fas fa-chalkboard-teacher"></i> <span>Jadwal Mengajar</span></a></li>
        <li class="menu-header">Menu Pengolahan</li>
      <li><a href="#" class="nav-link"><i class="fas fa-book"></i> <span>Rekap Absensi Guru</span></a></li>
      <li><a href="#" class="nav-link"><i class="fas fa-book"></i> <span>Rekap Absensi Siswa</span></a></li>
    </ul>       
  </aside>