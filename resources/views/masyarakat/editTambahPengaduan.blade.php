@extends('masyarakat.base')
@section('content')

    @if(session('error'))
      <div class="">
        {{ session('error') }}
      </div>
    @endif

    @if(count($errors)>0)
      <div class="">
          <strong>Perhatian</strong>
          <br>
            <ul>
              @foreach($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
      </div>
    @endif

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav mr-auto">
    <a class="navbar-brand" href="#" style="color:#000000"><b>KELUHAN MASYARAKAT</b></a>
        <li class="nav-item">
        <a class="nav-link">Isi dengan lengkap ya, {{Session::get('username')}}!</a>
      </li>
    </ul>
</nav>

    <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <strong>Tambah Pengaduan</strong>
                </div>
                <div class="card-body">
                    
                    <form action="{{url('masyarakat/pengaduan',@$pengaduan->id_pengaduan)}}" method="post" enctype="multipart/form-data">

                    @csrf
                      @if(!empty($pengaduan))
                      @method('PATCH')
                    @endif

                    <div class="form-group">
                      <label for="comment">Isi Laporan</label>
                      <textarea class="form-control" rows="5" placeholder="Tuliskan Laporan Anda . . ."  type="text" name="isi_laporan" id="isi_laporan" value="{{old('isi_laporan',@$pengaduan->isi_laporan)}}"></textarea>
                    </div>   

                    <p>Lampiran</p>
                      <div class="custom-file mb-3">
                      <input type="file" name="foto" id="foto" value="{{old('foto',@$pengaduan->foto)}}" class="custom-file-input">
                      <label class="custom-file-label">Pilih Fail</label>

                    @if(!empty($pengaduan))
                  <div>
                   <img src="{{empty($pengaduan)? '' : asset('images/'.$pengaduan->foto)}}" alt="tidak ada">
                 </div>
                @endif
                </div>
                <button class="btn btn-primary btn-rounded btn-block z-depth-0 my-4 waves-effect"  type="submit">Kirim</button>
            </div>
            
            </form>
          
            </div>
@endsection
