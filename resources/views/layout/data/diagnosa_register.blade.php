@extends ('app')
@section('title', 'Tambah Diagnosa')
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Diagnosa</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Diagnosa</h6>
        </div>
        <div class="card o-hidden border-0 my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->

                <div class="row justify-content-center">
                    <div class="col-lg-9">

                        <form method="post" action="{{ route('diagnosa.store') }}">
                            @csrf

                            <div class="row ">
                            <div class="col-8">
                                <div class="form-floating mb-3">
                                    <input type="text" name="nama" class="form-control @error ('nama') is-invalid @enderror" id="nama"
                                        placeholder="Nama Diagnosa">
                                    <label for="nama">Nama Diagnosa</label>
                                    @error ('nama')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            
                                <div class="form-floating mb-3">
                                    <input type="text" name="deskripsi" class="form-control @error ('nama') is-invalid @enderror" id="deskripsi"
                                        placeholder="Tanggal Lahir ">
                                    <label for="deskripsi">Deskripsi</label>
                                    @error ('deskripsi')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            </div>
                            <div class="col-2 ">
                                <button type="submit" class="btn btn-primary btn-user btn-block"> Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection