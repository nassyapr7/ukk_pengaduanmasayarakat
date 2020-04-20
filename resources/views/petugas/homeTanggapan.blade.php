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
        <a href="{{url('admin/home')}}">Home</a>
        <a class="active" href="{{url('petugas/tanggapan')}}"> Data Tanggapan</a>
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
                   <th>ID Pengaduan</th>
                   <th>Nama Pengadu</th>
                   <th>Tanggal</th>
                   <th>Tanggapan</th>
                   <th>Petugas yang men-ACC</th>
                   <th>Aksi</th>
               </tr>
                   @foreach($tanggapan1 as $row)
               <tr>

                       <td>{{$row->id_pengaduan}}</td>
                       <td>{{$row->pengaduan->masyarakat->nama}}</td>
                       <td>{{$row->tgl_tanggapan}}</td>
                       <td>{{$row->tanggapan}}</td>
                       <td>{{$row->petugas->nama_petugas}}</td>

                   <td>
                       <a style="margin: 10px;background-color: #47d147;padding: 10px;float: center;text-decoration: none;color:white;"
                       href="{{url('petugas/tanggapan/edit/'.$row->id_pengaduan)}}">Sunting</a>
                       <form action="{{url('petugas/tanggapan/hapus'.$row->id_tanggapan)}}" method="post">
                           @csrf
                           @method('DELETE')
                           <button style="background-color:#f44336;padding: 10px;float: center; margin-top:20px;font-family:'Nexa-Regular'; color:white;
                           border:none;"type="submit">Hapus</button>
                       </form>
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
