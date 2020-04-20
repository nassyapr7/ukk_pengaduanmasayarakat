@extends('masyarakat.base')
@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav mr-auto">
    <a class="navbar-brand" href="#" style="color:#000000"><b>KELUHAN MASYARAKAT</b></a>
        <li class="nav-item">
        <a class="nav-link">Selamat Datang {{Session::get('username')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('logout') }}" class="btn-logout">Logout</a>
      </li>
    </ul>
</nav>

<div class="container">
<div class="adddata">
            <button type="button" class="btn btn-info">
              <a style="color:white; font-size:19px;" href="{{url('masyarakat/pengaduan/tambah')}}">Buat Laporan Pengaduan</a>
               </button>
            </div>
            <div class="card mt-5">
                <div class="card-header text-center">
                <strong>Riwayat Laporan Anda</strong>
                </div>
                <div class="card-body">
                    
                    <table class="table table-bordered">
                <tr>
                    <th>Tanggal</th>
                    <th>Isi Laporan</th>
                    <th>Foto</th>
                </tr>
                    @foreach($pengaduan as $data)
                <tr>
                    <td>{{$data->tgl_pengaduan}}</td>
                    <td>{{$data->isi_laporan}}</td>
                    <td><a style="background-color: #008B8B;padding:10px;text-decoration:none;color:white;" target="_blank" href="url('../../../../public/images/{{$data->foto}}">Tampilkan</a></td>
                </tr>
                    @endforeach
            </table>

            <p style="text-align:center">
              *Jika laporan yang dikirim sudah tidak ditampilkan, maka laporan tersebut sudah dikonfirmasi oleh Petugas.
            </p>
            <br>
                </div>
            </div>

            <footer>
              <div style="text-align:center;padding-top:10px;"> 2020 © KEMAS</div>
            </footer>

        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
