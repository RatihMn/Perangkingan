<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">Aplikasi Perangkingan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="logo.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Informatika</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-bars"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('data-mahasiswa')}}" class="nav-link">
                    <i class="fas fa-users nav-icon"></i>
                  <p>Data Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('mata-kuliah')}}" class="nav-link">
                  <i class="fas fa-graduation-cap nav-icon"></i>
                  <p>Mata Kuliah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('pengambilanmatkul')}}" class="nav-link">
                    <i class="fas fa-graduation-cap nav-icon"></i>
                  <p>Pengambilan MataKuliah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('poling')}}" class="nav-link">
                    <i class="fas fa-graduation-cap nav-icon"></i>
                  <p>Poling</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('kriteria')}}" class="nav-link">
                    <i class="fas fa-graduation-cap nav-icon"></i>
                  <p>Kriteria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('mahasiswa-terbaik')}}" class="nav-link">
                    <i class="fas fa-graduation-cap nav-icon"></i>
                  <p>Mahasiswa Terbaik</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
        </li>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
