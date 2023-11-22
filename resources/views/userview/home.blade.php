@extends ('appmain')

@section('content')
<!-- Keterangan Sebelum Navbar -->
<main>
<div class="container-fluid text-bg-primary" style="height: 600px;" >
  <div class="p-md-5 container  ">
    <div class="row justify-content-between align-items-end"  >
    <div class="col-lg-6 px-0">
        @foreach  ($homes as $home)
      <h1 class="fw-bold text-white display-2" data-aos="fade-up">Kesehatan <br>Prioritas Kami.</h1>
      <p class="text-white mt-4">{{$home->body}}</p>
      <a href="" class="btn btn-lg btn-primary mt-4">Tanya Dokter?</a>
    </div>
      <div class="col-md-6 " data-aos="fade-left" data-aos-delay="300">   
        <img src="{{$home -> image}}" alt="Puskesmas" class="img-fluid" width="100%" height="100%">
      </div>
  </div>
  </div>
</div>
@endforeach
<div class="container mt-5">
@foreach ($homeProfile as $home)
<div class="row justify-content-center">
  <div class="mb-3" style="max-width: 700px;">
    <div class="row g-0 align-items-center " data-aos="fade-up">
      <div class="col-lg-4 ">
        <img src="{{$home -> image }}" class="img-fluid rounded-start me-2" alt="profile">
      </div>
      <div class="col-md-8">
        <div class="card-body ">
          <h2 class="card-title mb-4 ">{{$home -> judul}} </h5>
          <p class="card-text">{{$home -> body}}</p>
          <a href="{{route ('profile')}}" class="btn btn-lg btn-outline-primary mt-4">Selengkapnya </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach

<hr>

  <div class="row justify-content-center">
@foreach ($homeProfile as $home)
<div class="card me-5 mt-2" data-aos="fade-up" data-aos-delay="600" style="width: 18rem;" >
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$home -> judul}}</h5>
    <p class="card-text">{{$home -> body}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
@endforeach

</div>
</div>
</main>

    @endsection