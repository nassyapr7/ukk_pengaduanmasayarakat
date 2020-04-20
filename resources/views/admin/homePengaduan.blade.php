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
    
        <!-- Add Your Content Inside -->
        <div class="content">

        <div class="topnav">
        <a class="navbar-brand" href="#"><b>ADMIN KEMAS | {{Session::get('username')}}</b></a>
        <a href="{{url('admin/home')}}"><i class="fa fa-fw fa-home"></i>Home</a>
        <a href="{{url('admin/petugas')}}"><i class="fa fa-fw fa-check"></i> Petugas</a>
        <a href="{{url('admin/masyarakat')}}"><i class="fas fa-hotel"></i> Masyarakat</a>
        <a class="active" href="{{url('admin/pengaduan')}}"><i class="fas fa-crown"></i></i> Pengaduan</a>
        <a href="{{url('admin/tanggapan')}}"><i class="fa fa-fw fa-user"></i> Tanggapan</a>
        <a href="{{ url('logout') }}" style="float:right;"><i class="fa fa-fw fa-user"></i>Logout</a>
        </div>

      </div>
      <div>
        <div class="content">
            
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <strong>Data Pengaduan Belum Ditanggapi</strong>
                </div>
                <div class="card-body">
                <a style="background-color: #c66a00;padding: 10px;text-decoration:none;color:white;"
            href="{{url('admin/pengaduan/cetak')}}">Cetak Data(PDF)</a>

                    <br/>
                    <br/>
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Isi Laporan</th>
                        <th>Foto</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengaduan as $data)
                    <tr>
                        <td>{{$data->tgl_pengaduan}}</td>
                        <td>{{$data->masyarakat->nik}}</td>
                        <td>{{$data->masyarakat->nama}}</td>
                        <td>{{$data->isi_laporan}}</td>
                        <td><a style="background-color: #47d147;padding: 10px;text-decoration:none;color:white;"target="_blank" href="url('../../../../public/images/{{$data->foto}}">Tampilkan</a></td></td>
                        <td>
                            @if($data->status == "0")
                            <a style="background-color: #ff9933;padding: 10px;text-decoration:none;color:white;
                            "href="{{url('admin/tanggapan/proses/'.$data->id_pengaduan)}}">ACC PENGADUAN</a>
                            @elseif($data->status == "proses")
                            <a style="background-color: #0088cc;padding: 10px;text-decoration:none;color:white;
                            "href="{{url('admin/tanggapan/tambah/'.$data->id_pengaduan)}}">TANGGAPI</a>

                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
      </div>
      </div>
            <br>

     <div class="content">        
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <strong>Data Pengaduan Sudah Ditanggapi</strong>
                </div>
                <div class="card-body">
                <a style="background-color:  #c66a00;padding: 10px;text-decoration:none;color:white;" href="{{url('admin/pengaduan/selesai/cetak')}}">Cetak Data(PDF)</a>
                <br/> <br/>
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Isi Laporan</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengaduanSelesai as $row)
                    <tr>
                        <td>{{$row->tgl_pengaduan}}</td>
                        <td>{{$row->masyarakat->nik}}</td>
                        <td>{{$row->masyarakat->nama}}</td>
                        <td>{{$row->isi_laporan}}</td>
                        <td><a style="background-color: #47d147;padding: 5px;text-decoration:none;color:white;"target="_blank" href="url('../../../../public/images/{{$row->foto}}">Tampilkan</a></td></td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
      </div>
      </div>
      </div>
      <footer>
        <div style="text-align:center;padding-top:10px;">
        2020 © KEMAS
        </div>
      </footer>
        <!-- /.content -->
