@extends ('app')
@section('title', 'Tambah Post')
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Post</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Post</h6>
        </div>
        <div class="card o-hidden border-0 my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->

                <div class="row justify-content-center">
                    <div class="col-lg-9">

                        <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row ">
                                <div class="col-10">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="judul"
                                            class="form-control @error('judul') is-invalid @enderror" id="judul"
                                            placeholder="judul" value="{{old('judul')}}">
                                        <label for="judul">Judul</label>
                                        @error('judul')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="slug"
                                            class="form-control @error('slug') is-invalid @enderror" id="slug"
                                            placeholder="Slug" value="{{ old('slug') }}">
                                        <label for="slug">Slug</label>
                                        @error('slug')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-floating mb-3">
                                        <select name="category_id" id="categori" class="form-select form-select-ms mb-3"
                                            aria-label="Large select example">
                                            @foreach ($categories as $category)
                                            @if (old('category_id') == $category->id)
                                            <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                            @else
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                        <label for="floatingPassword">Kategori</label>
                                    </div>
                                    
                                    <div class="form-label mb-3">
                                        <label class="form-label" for="image">Upload Image</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                                        @error('image') 
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-label">
                                        <label for="body" class="form-label">Body</label>
                                        @error('body')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                        <input id="body" type="hidden" name="body" value="{{old ('body')}}">
                                        <trix-editor input="body"></trix-editor>
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

<script>
const title = document.querySelector('#judul');
const slug = document.querySelector('#slug');

title.addEventListener('input', function() {
    const titleValue = this.value;
    const routeUrl = `{{ route('checkSlug') }}?title=${encodeURIComponent(titleValue)}`;

    fetch(routeUrl)
        .then(response => response.json())
        .then(data => slug.value = data.slug);
});
</script>
@endsection