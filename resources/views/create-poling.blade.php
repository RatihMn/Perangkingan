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
            <h1>Tambah Poling</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Berikan poling</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Informatika</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <form action="{{ route('simpan-poling')}}" method="POST">
                             {{ csrf_field() }}
                           <div class="form-group">
                             <label for="nama_mhs">Nama Mahasiswa</label>
                             <input type="text" id="nama_mhs" name="nama_mhs" class="form-control" placeholder="Nama Mahasiswa">
                            </div>
                          </div>
                      <div class="col-sm-6">
                           <div class="form-group">
                             <label for="pemberi_poling">Pemberi Poling</label>
                             <input type="text" id="pemberi_poling" name="pemberi_poling" class="form-control" placeholder="Pemberi Poling">
                          </div>
                        </div>
                    </div>


                    <div class="row">
                      <div class="col-sm-6">
                             <div class="form-group">
                               <label for="photogenic">Photogenic</label>
                                 <select class="form-control" id="photogenic" name="photogenic" placeholder="Photogenic">
                                    <option >Pilih</option>
                                    <option >1</option>
                                    <option >2</option>
                                    <option >3</option>
                                    <option >4</option>
                                    <option >5</option>
                                 </select>
                              </div>
                            </div>
                        <div class="col-sm-6">
                             <div class="form-group">
                               <label for="tanggung_jawab">Bertanggung Jawab</label>
                                 <select class="form-control" id="tanggung_jawab" name="tanggung_jawab" placeholder="Bertanggung Jawab">
                                    <option >Pilih</option>
                                    <option >1</option>
                                    <option >2</option>
                                    <option >3</option>
                                    <option >4</option>
                                    <option >5</option>
                                 </select>
                              </div>
                            </div>
                          </div>
                      <div class="row">
                          <div class="col-sm-6">
                              <div class="form-group">
                               <label for="jujur">Jujur dan Santun</label>
                                 <select class="form-control" id="jujur" name="jujur" placeholder="Jujur dan Santun">
                                    <option >Pilih</option>
                                    <option >1</option>
                                    <option >2</option>
                                    <option >3</option>
                                    <option >4</option>
                                    <option >5</option>
                                 </select>
                              </div>
                            </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                               <label for="aktif">Aktif Berorganisasi</label>
                                 <select class="form-control" id="aktif" name="aktif" placeholder="Aktif Berorganisasi">
                                    <option >Pilih</option>
                                    <option >1</option>
                                    <option >2</option>
                                    <option >3</option>
                                    <option >4</option>
                                    <option >5</option>
                                 </select>
                                </div>
                              </div>
                            </div>
                        <div class="row">
                            <div class="col-sm-12">
                              <div class="form-group">
                               <label for="kreatif">Kreatif dan Pandai Bersosialisasi</label>
                                 <select class="form-control" id="kreatif" name="kreatif" placeholder="Kreatif">
                                    <option >Pilih</option>
                                    <option >1</option>
                                    <option >2</option>
                                    <option >3</option>
                                    <option >4</option>
                                    <option >5</option>
                                 </select>
                              </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                            </div>
                        </div>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

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
