@extends('masyarakat.base')
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

    <!-- Main Section -->
    <section class="main-section">

              <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <strong>Tanggapi Laporan</strong>
                </div>
                <div class="card-body">

                <form action="{{url('petugas/tanggapan/editPost',@$tanggapan->id_pengaduan)}}" method="post" enctype="multipart/form-data">
                @csrf

               <div>
               <p> Tanggapan : </p><input style="padding: 12px 20px;font-size: 16px;font-family:'Nexa-Regular';width: 100%;
                margin: 8px 0;box-sizing: border-box;border: none;background-color: white;border-bottom: 2px solid grey;color:black;"
                 type="text" name="tanggapan" id="tanggapan" value="{{old('tanggapan',@$tanggapan->tanggapan)}}"><br>
               </div>
               <button class="btn btn-primary btn-rounded btn-block z-depth-0 my-4 waves-effect"  type="submit">Kirim</button>
            
            </form>
          
            </div>

            

        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
