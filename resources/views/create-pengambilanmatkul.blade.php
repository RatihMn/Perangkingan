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
            <h1 class="m-0 text-dark">Pengambilan Mata Kuliah</h1>
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
                  <form action="{{ route('simpan-pengambilanmatkul')}}" method="POST">
                    {{ csrf_field() }}
                      <div class="form-group">
                          <input type="text" id="id" name="id" class="form-control" placeholder="ID">
                      </div>
                      <div class="form-group">
                          <select class="form-control select2" style="width: 100%;" name="matakuliah" id="matakuliah">
                            <option disabled valule>Id Mata Kuliah</option>
                            @foreach ($peng as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_mk }}</option>
                            @endforeach
                          </select>
                        </div>

                      <div class="form-group">
                          <label for="thn_ajaran">Tahun Ajaran</label>
                          <input type="text" id="thn_ajaran" name="thn_ajaran" class="form-control" placeholder="Tahun Ajaran">
                      </div>
                      <div class="form-group">
                          <label for="semester">Semester</label>
                          <input type="text" id="semester" name="semester" class="form-control" placeholder="Semester">
                      </div>
                      <div class="form-group">
                        <label for="nilai_huruf">Nilai Huruf</label>
                        <input type="text" id="nilai_huruf" name="nilai_huruf" class="form-control" placeholder="Nilai Huruf">
                    </div>
                    <div class="form-group">
                        <label for="nilai_angka">Nilai Angka</label>
                        <input type="text" id="nilai_angka" name="nilai_angka" class="form-control" placeholder="Nilai Angka">
                    </div>
                    <div class="form-group">
                        <label for="sks">SKS</label>
                        <input type="text" id="sks" name="sks" class="form-control" placeholder="SKS">
                    </div>
                    <div class="form-group">
                        <label for="nilai">Nilai</label>
                        <input type="text" id="nilai" name="nilai" class="form-control" placeholder="Nilai">
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
