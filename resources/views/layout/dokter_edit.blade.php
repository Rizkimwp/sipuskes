@extends('app')

@section('content')


    


<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Dokter</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Dokter</h6>
        </div>
        <div class="card o-hidden border-0 my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->

                <div class="row justify-content-center">
                    <div class="col-lg-9">

                    <form method="POST" action="{{ route('dokter.update', $dokter->id) }}">
      
      @csrf
      @method('PUT')

                            <div class="row">
                            <div class="col-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="nama" value="{{ $dokter->nama }}" class="form-control" id="floatingInput"
                                            placeholder="Nama Lengkap">
                                        <label for="floatingInput">Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="date" name="tanggal_lahir" value="{{ $dokter->tanggal_lahir }}" class="form-control" id="floatingPassword"
                                            placeholder="Tanggal Lahir ">
                                        <label for="floatingPassword">Tanggal Lahir</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <select name="jenis_kelamin"  class="form-select form-select-ms mb-3"
                                            aria-label="Large select example">
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Peremuan">Perempuan</option>
                                        </select>
                                        <label for="floatingPassword">Jenis Kelamin</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="email" name="email" value="{{ $dokter->email }}" class="form-control"
                                            id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Email</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="number" name="no_tlp" value="{{ $dokter->no_tlp }}" class="form-control"
                                            id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">No Telpon</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" name="spesialisasi" value="{{ $dokter->spesialisasi }}" class="form-control"
                                            id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Spesialisasi</label>
                                    </div>
                                </div>
                                <div class="col-6 mt-3 mb-3">
                                    <div class="form-floating">
                                        <input type="number" name="id_dokter" value="{{ $dokter->id_dokter }}" class="form-control"
                                            id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Id Dokter</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
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