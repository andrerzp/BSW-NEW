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
                        <h1><b>Buat Permohonan</b></h1>
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
                                    Manajemen Data Users
                                </h3>
                            </div>
                            <div class="card-body pad table-responsive">

                                <h5>Silahkan masukkan data.</h5>

                                <div class="card-body">
                                    <form action="{{route('simpan')}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <div class="form-group"><b>NPWP Badan Hukum</b>
                                            <input type="text" id="npwp" name="npwp" class="form-control @error('npwp')
                                            is-invalid @enderror" placeholder="Isi data NPWP Badan Hukum">
                                            @error('npwp')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>Nama Badan Hukum</b>
                                            <input type="text" id="nama_hukum" name="nama_hukum" class="form-control @error('nama_hukum')
                                            is-invalid @enderror" placeholder="Isi data Nama Badan Hukum">
                                            @error('nama_hukum')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>Alamat Badan Hukum</b>
                                            <input type="text" id="badan_hukum" name="badan_hukum" class="form-control @error('badan_hukum')
                                            is-invalid @enderror" placeholder="Isi data Alamat Badan Hukum">
                                            @error('badan_hukum')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>No. Telp Pemilik Badan Hukum</b>
                                            <input type="text" id="no_telp" name="no_telp" class="form-control @error('no_telp')
                                            is-invalid @enderror" placeholder="Isi data No. Telepon Pemilik Badan Hukum">
                                            @error('no_telp')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>No. KTP Pemilik Badan Hukum</b>
                                            <input type="text" id="no_ktp" name="no_ktp" class="form-control @error('no_ktp')
                                            is-invalid @enderror" placeholder="Isi data No KTP Pemilik Badan Hukum">
                                            @error('no_ktp')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>Nama Penyerah Dokumen</b>
                                            <input type="text" id="nama_penyerah" name="nama_penyerah" class="form-control @error('nama_penyerah')
                                            is-invalid @enderror" placeholder="Isi data Nama Penyerah Dokumen">
                                            @error('nama_penyerah')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>No. Telepon Penyerah</b>
                                            <input type="text" id="no_telp_penyerah" name="no_telp_penyerah" class="form-control @error('no_telp_penyerah')
                                            is-invalid @enderror" placeholder="Isi data No. Telepon Penyerah">
                                            @error('no_telp_penyerah')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>No. PL</b>
                                            <input type="text" id="no_pl" name="no_pl" class="form-control @error('no_pl')
                                            is-invalid @enderror" placeholder="Isi data No. PL">
                                            @error('no_pl')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>Tanggal PL</b>
                                            <input type="date" id="tanggal" name="tanggal" class="form-control @error('tanggal')
                                            is-invalid @enderror" placeholder="Tanggal PL">
                                            @error('tanggal')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>Subwilayah Pengembangan</b>
                                            <select id="subwilayah" name="subwilayah" class="form-control" placeholder="Isi data Subwilayah Pengembangan">
                                                <option>SWP - Batam Center (Core)</option>
                                                <option>SWP - Batam Center (Kelurahan)</option>
                                                <option>SWP - Nagoya</option>
                                                <option>SWP - Nagoya (Sei Panas)</option>
                                                <option>SWP - Tanjung Piayu</option>
                                                <option>SWP - Nongsa</option>
                                                <option>SWP - Kabil</option>
                                                <option>SWP - Muka Kuning</option>
                                                <option>SWP - Sekupang</option>
                                                <option>SWP - Tanjung Uncang</option>
                                            </select>
                                        </div>

                                        <div class="form-group"><b>Alamat Lokasi</b>
                                            <input type="text" id="alamat" name="alamat" class="form-control @error('alamat')
                                            is-invalid @enderror" placeholder="Isi data Alamat Lokasi">
                                            @error('alamat')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>Luas Lokasi (M2)</b>
                                            <input type="text" id="luas_lokasi" name="luas_lokasi" class="form-control @error('luas_lokasi')
                                            is-invalid @enderror" placeholder="Isi data Luas Lokasi">
                                            @error('peruntukan')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>Peruntukan</b>
                                            <input type="text" id="peruntukan" name="peruntukan" class="form-control @error('peruntukan')
                                            is-invalid @enderror" placeholder="Isi data Peruntukan ">
                                            @error('peruntukan')
                                            <span class="text-danger">This field is required.</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><b>Kondisi Lokasi</b>
                                            <select id="kondisi" name="kondisi" class="form-control" placeholder="Isi data  Kondisi Lokasi">
                                                <option>Terbangun</option>
                                                <option>Tidak Terbangun</option>
                                            </select>
                                        </div>

                                        <div class="alert alert-danger" role="alert">
                                            <i class="fa fa-exclamation-triangle fa-1 pull-left"></i> <strong>Warning:</strong> File Scan Harus Asli dan Berwarna
                                        </div>
                                        <div class="form-group"><b>Surat Perubahan Peruntukan</b>
                                            <input type="file" id="surat_perubahan_peruntukan" name="surat_perubahan_peruntukan" class="form-control" placeholder="Isi data Surat Perubahan Peruntukan">
                                        </div>

                                        <div class="form-group"><b>File Scan UWT</b>
                                            <input type="file" id="file_scan_uwt" name="file_scan_uwt" class="form-control" placeholder="Isi data File Scan UWT">
                                        </div>
                                        <div class="form-group"><b>File Endorsement PL</b>
                                            <input type="file" id="file_endorsement_pl" name="file_endorsement_pl" class="form-control" placeholder="Isi data File Endorsement PL">
                                        </div>
                                        <div class="form-group">
                                            <button type="simpan" class="btn btn-success">Simpan</button>
                                        </div>
                                    </form>
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

</body>
</html>
