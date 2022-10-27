<!DOCTYPE html>
<html lang="en">
<head>
  @include('DashboardInstrument.head')
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('DashboardInstrument.navbar')
  <!-- /.navbar -->

  <!-- Sidebar -->
  @include('DashboardInstrument.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><b>Proses Permohonan</b></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">BSW - BP Batam</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  Data Permohonan
                </h3>
              </div>
              <div class="card-body pad table-responsive">
                
                <div class="card-body">
                  <table class="table table-bordered">
                    <tr>
                      <th>NPWP</th>
                      <th>Nama Badan Hukum</th>
                      <th>Alamat Badan Hukum</th>
                      <th>No. telp Pemilik Badan Hukum</th>
                      <th>No. KTP Pemilik Badan Hukum</th>
                      <th>Nama Penyerah Dokumen</th>
                      <th>No. telp Penyerah</th>
                      <th>No. PL</th>
                      <th>Tanggal PL</th>
                      <th>Subwilayah Pengembangan</th>
                      <th>Alamat Lokasi</th>
                      <th>Luas Lokasi (M2)</th>
                      <th>Peruntukan</th>
                      <th>Kondisi Lokasi</th>
                    </tr>
                    
                    @foreach ($dtPermohonan as $item)
                    
                    <tr>
                        <td>{{$item->npwp}}</td>
                        <td>{{$item->nama_hukum}}</td>
                        <td>{{$item->badan_hukum}}</td>
                        <td>{{$item->no_telp}}</td>
                        <td>{{$item->no_ktp}}</td>
                        <td>{{$item->nama_penyerah}}</td>
                        <td>{{$item->no_telp_penyerah}}</td>
                        <td>{{$item->no_pl}}</td>
                        <td>{{$item->tanggal}}</td>
                        <td>{{$item->subwilayah}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>{{$item->luas_lokasi}}</td>
                        <td>{{$item->peruntukan}}</td>
                        <td>{{$item->kondisi}}</td>
                    </tr>
                    
                    @endforeach
                     
                    
                  </table>
                </div>
                
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    @include('DashboardInstrument.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('DashboardInstrument.script')
@include('sweetalert::alert')

</body>
</html>