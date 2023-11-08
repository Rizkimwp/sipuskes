@extends('app')
@section('title', 'Edit Pegawai')
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Pegawai</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Pegawai</h6>
        </div>
        <div class="card o-hidden border-0 my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->

                <div class="row justify-content-center">
                    <div class="col-lg-9">
                    <form method="POST" action="{{ route('pegawai.update', $pegawai->id) }}">
      
      @csrf
      @method('PUT')

                            <div class="row">
                            <div class="col-8">
                                    <div class="form-floating mb-3 ">
                                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama"
                                            value="{{$pegawai -> nama}}" placeholder="Nama Lengkap">
                                        <label for="nama">Nama Lengkap</label>
                                        @error ('nama')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                               
                                    <div class="form-floating mb-3">
                                        <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir"
                                            value="{{$pegawai -> tanggal_lahir}}" placeholder="Tanggal Lahir ">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        @error ('tanggal_lahir')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                 
                                    <div class="form-floating mb-3">
                                        <select name="jenis_kelamin"  class="form-select form-select-ms mb-3"
                                            aria-label="Large select example">
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Peremuan">Perempuan</option>
                                        </select>
                                        <label for="floatingPassword">Jenis Kelamin</label>
                                    </div>
                              
                                    <div class="form-floating mb-3">
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" value="{{$pegawai -> email}}" placeholder="Password">
                                        <label for="email">Email</label>
                                        @error ('email')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                               
                                    <div class="form-floating mb-3">
                                        <input type="number" name="no_tlp" class="form-control"
                                            id="floatingPassword" value="{{$pegawai -> no_tlp}}" placeholder="Password">
                                        <label for="floatingPassword">No Telpon</label>
                                    </div>
                                
                                    <div class="form-floating mb-3">
                                        <input type="text" name="jabatan" class="form-control @error('jabatan') is-invalid @enderror"
                                            id="floatingPassword" value="{{$pegawai -> jabatan}}" placeholder="Password">
                                        <label for="floatingPassword">Jabatan</label>
                                        @error ('jabatan')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2 mt-2">
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