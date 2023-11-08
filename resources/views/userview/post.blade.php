@extends ('appmain')

@section('content')
<!-- Keterangan Sebelum Navbar -->
<div class="container-fluid bg-gradient-secondary ">
    <div class="container mt-5 p-4">
       
        <div class="row justify-content-center">
            <div class="col-6 text-center"> 
                <h2>{{$posts -> judul}}</h2>
                <p>By Admin in {{$posts->categori->name}}</p>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-6 text-center">
                    <img  src="{{asset ('img/hospital.png') }}" alt="Gambar Rumah Saskit">
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-6 text-center">
                        <p> {{ $posts -> body }}</p>
                        <a href="{{ route('profile.index')}}">Link Text</a>

                    </div>
                </div>
                
            </div>
        </div>
    </div>

    @endsection