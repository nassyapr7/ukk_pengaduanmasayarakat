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
        <a class="active" href="{{url('admin/masyarakat')}}"><i class="fas fa-hotel"></i> Masyarakat</a>
        <a href="{{url('admin/pengaduan')}}"><i class="fas fa-crown"></i></i> Pengaduan</a>
        <a href="{{url('admin/tanggapan')}}"><i class="fa fa-fw fa-user"></i> Tanggapan</a>
        <a href="{{ url('logout') }}" style="float:right;"><i class="fa fa-fw fa-user"></i>Logout</a>
        </div>

        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <strong>Data Masyarakat</strong>
                </div>
                <div class="card-body">
                <a style="background-color: #c66a00;padding: 10px; margin: 10px;text-decoration:none;color:white;"
        href="{{url('admin/masyarakat/cetak')}}">Cetak Data Masyarakat(PDF)</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($masyarakat as $row)
                <tr>
                    <td>{{$row->nik}}</td>
                    <td>{{$row->nama}}</td>
                    <td>{{$row->username}}</td>
                    <td>{{$row->telp}}</td>
                    <td>
                        <a style="background-color: #449D44;padding: 10px;text-decoration:none;color:white;float:center;"
                        href="{{url('admin/masyarakat/forgot/'.$row->id_user)}}">Lupa Password</a>
                        <a style="background-color: #FFC107;padding: 10px;text-decoration:none;color:white;float:center;"
                        href="{{url('admin/masyarakat/edit/'.$row->id_user)}}">Sunting</a>
                        <form action="{{url('admin/masyarakat/delete'.$row->id_user)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button style="background-color:#D2322D;padding: 10px;margin-top:25px;float: center;font-family:'Nexa-Regular';color:white;
                            border:none;">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
      </div>
      </div>
      <div>
        
      </div>
      <footer>
        <div style="text-align:center;padding-top:10px;">
        2020 © KEMAS
        </div>
      </footer>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
