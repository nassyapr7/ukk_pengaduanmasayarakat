@extends('admin.base')
@section('content')

<style media="screen">
@font-face {
  font-family: 'Nexa-Bold';
  src: url('../../../../resources/fonts/Nexa-Bold.otf');
}
@font-face {
  font-family: 'Nexa-Regular';
  src: url('../../../../resources/fonts/Nexa-Light.otf');
}
html{
  font-family: "Nexa-Regular";
}

</style>

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

    <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <strong>Tanggapi Laporan</strong>
                </div>
                <div class="card-body">
                    
                <form action="{{url('admin/tanggapan',@$pengaduan->id_pengaduan)}}" method="post" enctype="multipart/form-data">
                 @csrf

            
                    <div class="form-group">
                      <label for="comment">Tanggapan</label>
                      <textarea class="form-control" rows="5" placeholder="Tuliskan Tanggapan Anda . . ."  type="text" name="tanggapan" id="tanggapan" value="{{old('isi_laporan',@$pengaduan->isi_laporan)}}"></textarea>
                    </div>   

                    <button class="btn btn-primary btn-rounded btn-block z-depth-0 my-4 waves-effect"  type="submit">Kirim</button>
            
            </form>
          
            </div>
        </div>
@endsection
