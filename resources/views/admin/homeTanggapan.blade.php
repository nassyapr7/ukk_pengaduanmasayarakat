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
        <a class="navbar-brand" href="#"><b>ADMIN KEMAS | {{Session::get('username')}}</b></a>
        <a href="{{url('admin/home')}}"><i class="fa fa-fw fa-home"></i>Home</a>
        <a href="{{url('admin/petugas')}}"><i class="fa fa-fw fa-check"></i> Petugas</a>
        <a href="{{url('admin/masyarakat')}}"><i class="fas fa-hotel"></i> Masyarakat</a>
        <a href="{{url('admin/pengaduan')}}"><i class="fas fa-crown"></i> Pengaduan</a>
        <a class="active" href="{{url('admin/tanggapan')}}"><i class="fa fa-fw fa-user"></i> Tanggapan</a>
        <a href="{{ url('logout') }}" style="float:right;"><i class="fa fa-fw fa-user"></i>Logout</a>
        </div>

        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <strong>Data Tanggapan</strong>
                </div>
                <div class="card-body">
                    
                    <table class="table table-bordered">
            <tr>
                <th>ID Pengaduan</th>
                <th>Nama Pengadu</th>
                <th>Tanggal</th>
                <th>Tanggapan</th>
                <th>Petugas yang men-ACC</th>
                <th>Aksi</th>
            </tr>
                @foreach($tanggapan as $row)
            <tr>

                    <td>{{$row->id_pengaduan}}</td>
                    <td>{{$row->pengaduan->masyarakat->nama}}</td>
                    <td>{{$row->tgl_tanggapan}}</td>
                    <td>{{$row->tanggapan}}</td>
                    <td>{{$row->petugas->nama_petugas}}</td>

                <td>
                    <form action="{{url('admin/tanggapan/hapus'.$row->id_tanggapan)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button style="background-color:#D2322D;padding: 10px;float: right;font-family:'Nexa-Regular';color:white;
                        border:none;"type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
                    @endforeach
        </table>
      </div>
      <footer>
        <div style="text-align:center;padding-top:10px;">
        2020 © KEMAS
        </div>
      </footer>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
