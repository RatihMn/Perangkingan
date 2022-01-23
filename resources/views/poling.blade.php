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
            <h1>Data Poling</h1>
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

                <div class="card-tools">
                    <a href="{{ route('create-poling') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 360px;">
                <table class="table table-bordered">
                  <thead>
                    <tr>

                        <th>Nama Mahasiswa</th>
                        <th>Pemberi Poling</th>
                        <th>Photogenic</th>
                        <th>Bertanggung Jawab</th>
                        <th>Jujur dan Santun</th>
                        <th>Aktif Berorganisasi</th>
                        <th>Kreatif dan Berbakat</th>
                        <th>Nilai</th>
                    </tr>
                  </thead>
                  @foreach ($dtPoling as $item )
                  <tbody>
                    <tr>

                      <td>{{ $item->nama_mhs }}</td>
                      <td>{{ $item->pemberi_poling }}</td>
                      <td>{{ $item->photogenic }}</td>
                      <td>{{ $item->tanggung_jawab }}</td>
                      <td>{{ $item->jujur }}</td>
                      <td>{{ $item->aktif }}</td>
                      <td>{{ $item->kreatif }}</td>
                      <td>{{ $item->nilai }}</td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        <!-- /.row -->
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

</body>
</html>
