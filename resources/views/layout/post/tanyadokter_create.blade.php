@extends ('app')
@section('title', 'FAQ & Pengaduan')
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <h1 class="h3 mb-2 text-gray-800">FAQ & Pengaduan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Balas Pengaduan</h6>
        </div>
        <div class="card o-hidden border-0 my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->

                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        
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
                        @foreach($complaint->replies as $reply)
                        @if($complaint->replies->isNotEmpty())
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
                            
                       
                        @endif
                      @endforeach


                        <form method="post" action="{{ route('complaint.update' , $complaint -> id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row ">
                                <div class="col-10">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="reply"
                                            class="form-control @error('judul') is-invalid @enderror" id="reply"
                                            placeholder="Reply" value="{{old ('judul')}}">
                                        <label for="judul">Reply</label>
                                        @error('reply')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>



                                </div>
                                <div class="row">
                                    <div class="col-2 mt-4">
                                        <button type="submit" class="btn btn-primary btn-user btn-block"> Simpan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection