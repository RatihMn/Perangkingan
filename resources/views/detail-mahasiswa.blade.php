<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <title>AdminLTE 3 | Starter</title>
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Informatika</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" >
                <table class="table table-bordered">
                  <div class="content">
                      <div class="card card-info card-outline">
                      <div class="card header">
                      </div>

                      <div class="card-body">
                          <pre>

                    NIM                        :  {{ $mah->nim }}
                    Nama                       :  {{ $mah->nama }}
                    Tempat Lahir               :  {{ $mah->tempat_lahir }}
                    Tanggal                    :  {{ date('d-m-Y', strtotime($mah->tgl_lahir)) }}
                    Jenis Kelamin              :  {{ $mah->jenis_kelamin }}
                    No Hp                      :  {{ $mah->no_hp }}
                    Email                      :  {{ $mah->email }}
                    Alamat                     :  {{ $mah->alamat }}
                    Tahun Masuk                :  {{ $mah->tahun_masuk }}
                    Pengambilan Mata Kuliah    :  {{ $mah->alamat }}

                          </pre>
                        </div>

            </div>
          </div>
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
  @include('Template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('Template.script')
@include('sweetalert::alert')

</body>
</html>
