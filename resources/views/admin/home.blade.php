@extends('admin.base')
@section('content')

<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

<style media="screen">
#section {
    width:350px;
    float:left;
    padding:10px;
}
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
li a:hover:not(.active) {
    background-color: #111;
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
        <a class="active" href="{{url('admin/home')}}"><i class="fa fa-fw fa-home"></i>Home</a>
        <a href="{{url('admin/petugas')}}"><i class="fa fa-fw fa-check"></i> Petugas</a>
        <a href="{{url('admin/masyarakat')}}"><i class="fas fa-hotel"></i> Masyarakat</a>
        <a href="{{url('admin/pengaduan')}}"><i class="fas fa-crown"></i></i> Pengaduan</a>
        <a href="{{url('admin/tanggapan')}}"><i class="fa fa-fw fa-user"></i> Tanggapan</a>
        <a href="{{ url('logout') }}" style="float:right;"><i class="fa fa-fw fa-user"></i>Logout</a>
        </div>

      </div>
      <div>

      <footer>
              <div style="text-align:center;padding-top:10px;"> 2020 © KEMAS</div>
            </footer>
      </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
