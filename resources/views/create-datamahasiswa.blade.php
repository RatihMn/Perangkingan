<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>Aplikasi Perangkingan</title>
    @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
    @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('Template.left-sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Data Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">

                <!-- /.card-header -->
                <div class="card-body">
                  <form action="{{ route('simpan-datamahasiswa')}}" method="POST">
                    {{ csrf_field() }}
                      <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM">
                    </div>
                      <div class="form-group">
                          <label for="nama">Nama Mahasiswa</label>
                          <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Mahasiswa">
                      </div>
                      <div class="form-group">
                          <label for="lahir">Tempat Lahir</label>
                          <input type="text" id="tempat_lahir" name="lahir" class="form-control" placeholder="Tempat Lahir">
                      </div>
                      <div class="form-group">
                          <label for="tgl_lahir">Tanggal Lahir</label>
                          <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
                      </div>
                      <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No Hp</label>
                        <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="No Hp">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="tahun_masuk">Tahun Masuk</label>
                        <input type="text" id="tahun_masuk" name="tahun_masuk" class="form-control" placeholder="Tahun Masuk">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                        <a class="btn btn-danger" href="#" role="button"><i class="fas fa-undo"></i> Batal</a>
                      </div>
                  </form>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
    @include('Template.footer');
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
    @include('Template.script')
</body>
</html>
