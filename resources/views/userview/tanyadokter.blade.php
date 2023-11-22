@extends ('appmain')

@section('content')
<!-- Keterangan Sebelum Navbar -->
<main>
    <div class="container-fluid text-bg-primary" style="height: 400px;">
        <div class="p-md-5 container">
            <div class="row justify-content-between align-items-center ">
                <div class="col-lg-6 px-0">
                    <h1 class="fw-bold text-white display-2" data-aos="fade-up">Apa Pertanyaan Anda?</h1>
                    <p class="text-white mt-4">Yuk sampaikan keluhan anda dengan bahasa yang sopan dan santun</p>
                </div>
                <div class="col-md-6 text-end " data-aos="fade-left" data-aos-delay="300">
                    <img src="" alt="Puskesmas" class="img-fluid" height="50%" width="70%">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 me-2 mb-3">
                    <div class="card" style="height: 30rem;">
                        <h5 class="card-header">Semua Pertanyaan </h5>
                        <div class="card-body overflow-auto">
                            @foreach ($complaints as $complaint)
                            <div class="card-body">
                                <div class=" w-75 mb-3">
                                    <div class="card-body">
                                        <h5>{{$complaint -> nama}}</h5>
                                        <p class="fw-lighter"><i
                                                class="fa fa-calendar me-2 fa-1x "></i>{{$complaint -> created_at }}</p>
                                        <p class="card-text fw-light">{{$complaint -> body}}</p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            @if($complaint->replies->isNotEmpty())
                            
                            
                                @foreach($complaint->replies as $reply)
                                <div class="card-body">
                                    <div class=" w-100 mb-3">
                                        <div class="card-body text-end">
                                            <h5>{{$reply -> user -> name}}</h5>
                                            <p class="fw-lighter"><i
                                                    class="fa fa-calendar me-2 fa-1x "></i>{{$reply -> created_at }}</p>
                                            <p class="card-text fw-light">{{$reply -> reply}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                @endforeach
                            
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-4 shadow rounded p-3 ">
                    <h4>Apa Pertanyaan Anda?</h4>
                    <form action="{{route ('tanyadokterstore')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="nama"
                                placeholder="ex: Rizki Maulana">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Masukan Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Isi Pertanyaan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                name="body"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Kirim</button>
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>


@endsection