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
                            <h1 class="m-0">Data Transaksi</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('beranda')}}">Home</a></li>
                                <li class="breadcrumb-item active"><a href="{{route('data-transaksi')}}">Data
                                        Transaksi</a></li>
                                <li class="breadcrumb-item active">Edit Data Transaksi</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h3>Form Edit Data Transaksi</h3>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('update-transaksi', $trs->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <select class="form-control" name="id_customer" required>
                                    @foreach($customer as $data)
                                    <option value="{{$data->id}}" {{($data->id == $trs->id_customer) ? 'selected': ''}}>{{$data->nama_customer}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="id_service" required>
                                    @foreach($service as $data)
                                    <option value="{{$data->id}}" {{($data->id == $trs->id_service) ? 'selected': ''}}>{{$data->nama_service}} (Rp. {{$data->tarif}})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" id="total" name="total" class="form-control" placeholder="Total"
                                    value="{{ $trs->total }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Ubah Data</button>
                            </div>
                        </form>
                    </div>

                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <!-- <aside class="control-sidebar control-sidebar-dark"> -->
        <!-- Control sidebar content goes here -->
        <!-- <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside> -->
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <!-- @include('Template.footer') -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    @include('Template.script')
</body>

</html>
