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
            <h1 class="m-0 text-dark">Tambah Data Mata Kuliah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Mata Kuliah</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">

                <!-- /.card-header -->
                <div class="card-body">
                  <form action="{{ route('simpan-matakuliah')}}" method="POST">
                    {{ csrf_field() }}
                      <div class="form-group">
                        <label for="kd_mk">Kode Mata Kuliah</label>
                        <input type="text" id="kd_mk" name="kd_mk" class="form-control" placeholder="Kode Mata Kuliah">
                    </div>
                      <div class="form-group">
                          <label for="nama_mk">Nama Mata Kuliah</label>
                          <input type="text" id="nama_mk" name="nama_mk" class="form-control" placeholder="Nama Mata Kuliah">
                      </div>
                      <div class="form-group">
                          <label for="sks">SKS</label>
                          <input type="text" id="sks" name="sks" class="form-control" placeholder="SKS">
                      </div>
                      <div class="form-group">
                          <label for="semester">Semester</label>
                          <input type="text" id="semester" name="semester" class="form-control" placeholder="Semester">
                      </div>
                      <div class="form-group">
                        <label for="kelompok">Kelompok</label>
                        <input type="text" id="kelompok" name="kelompok" class="form-control" placeholder="Semester">
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
