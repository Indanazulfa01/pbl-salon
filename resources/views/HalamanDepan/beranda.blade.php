<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Halaman Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('beranda')}}">Home</a></li>
              <li class="breadcrumb-item active">Halaman Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Customer</h5>

                <p class="card-text">
                  Data Seluruh Customer Permata Salon & Spa
                </p>
                <a href="{{route('data-customer')}}" class="btn btn-primary">Lihat</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Karyawan</h5>

                <p class="card-text">
                  Data Seluruh Karyawan Permata Salon & Spa
                </p>
                <a href="{{route('data-karyawan')}}" class="btn btn-primary">Lihat</a>
              </div>
            </div><!-- /.card -->

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Reservasi</h5>

                <p class="card-text">
                  Data Seluruh Reservasi Pelanggan Permata Salon & Spa
                </p>
                <a href="{{route('data-reservasi')}}" class="btn btn-primary">Lihat</a>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Service</h5>
              </div>
              <div class="card-body">

                <p class="card-text">Data Seluruh Service Pelanggan Permata Salon & Spa</p>
                <a href="{{route('data-service')}}" class="btn btn-primary">Lihat</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Transaksi</h5>
              </div>
              <div class="card-body">

                <p class="card-text">Data Seluruh Transaksi Permata Salon & Spa</p>
                <a href="{{route('data-transaksi')}}" class="btn btn-primary">Lihat</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
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
