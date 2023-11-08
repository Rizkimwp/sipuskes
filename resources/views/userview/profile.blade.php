@extends ('appmain')

@section('content')
<!-- Keterangan Sebelum Navbar -->

    
@foreach ($posts as $post)
        <div class="row justify-content-center">
            <div class="col-6 text-center"> 
                <h2>{{$post -> judul}}</h2>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-6 text-center">
                    <img  src="{{asset ('storage/' . $post -> image) }}" alt="Gambar Rumah Saskit">
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-6 text-center">
                        <p> {{ $post -> excerpt }}</p>
                        <a href="{{ route('profile.show', ['profile' => $post->id]) }}">Link Text</a>
@endforeach

                    </div>
                </div>
          
            </div>
        </div>
    </div>

    @endsection