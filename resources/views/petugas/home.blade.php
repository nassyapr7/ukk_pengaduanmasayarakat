@extends('admin.base')
@section('content')
<style media="screen">
#section {
    width:350px;
    float:left;
    padding:10px;
}
body {
    margin: 0;
}
.topnav {
  overflow: hidden;
  background-color: #808080;
}

.topnav a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 14px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color:#545454;
  color: white;
}

</style>
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">

      <div class="topnav">
        <a class="navbar-brand" href="#"><b>PETUGAS KEMAS | {{Session::get('username')}}</b></a>
        <a class="active" href="{{url('admin/home')}}">Home</a>
        <a href="{{url('petugas/tanggapan')}}"> Data Tanggapan</a>
        <a href="{{ url('logout') }}" style="float:right;">Logout</a>
      </div>

      <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <strong>Data Tanggapan</strong>
                </div>
                <div class="card-body">
                    
                <table class="table table-bordered">
                <tr>
                <th>Tanggal</th>
                <th>Isi Laporan</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
                @foreach($tanggapan as $data)
            <tr>
                <td>{{$data->tgl_pengaduan}}</td>
                <td>{{$data->isi_laporan}}</td>
                <td><a style="background-color: #47d147;padding: 10px;text-decoration:none;color:white;
                  "target="_blank" href="url('../../../../public/images/{{$data->foto}}">Tampilkan</a></td>
                <td>
                    @if($data->status == "0")
                    <a style="background-color: #ff9933;padding: 10px;text-decoration:none;color:white;
                    "href="{{url('petugas/tanggapan/proses/'.$data->id_pengaduan)}}">ACC PENGADUAN</a>
                    @elseif($data->status == "proses")
                    <a style="background-color: #0088cc;padding: 10px;text-decoration:none;color:white;
                    "href="{{url('petugas/tanggapan/tambah/'.$data->id_pengaduan)}}">TANGGAPI</a>

                    @endif
                </td>
            </tr>
                @endforeach
        </table>
      </div>
            </div>
      <footer>
        <div style="text-align:center;padding-top:10px;">
        2020 © KEMAS
        </div>
      </footer>

        <!-- /.content -->
    </section>
    <!-- /.main-section -->
