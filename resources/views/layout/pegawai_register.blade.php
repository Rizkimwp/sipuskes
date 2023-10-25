@extends ('app')

@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Pengguna</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Pengguna</h6>
        </div>
        <div class="card o-hidden border-0 my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->

                <div class="row justify-content-center">
                    <div class="col-lg-9">

                        <form method="post" action="{{ route('store') }}">
                            @csrf

                            <div class="row ">
                                <div class="col-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="nama" class="form-control" id="floatingInput"
                                            placeholder="Nama Lengkap">
                                        <label for="floatingInput">Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="date" name="tanggal_lahir" class="form-control" id="floatingPassword"
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
                                        <input type="email" name="email" class="form-control"
                                            id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Email</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="number" name="no_tlp" class="form-control"
                                            id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">No Telpon</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" name="jabatan" class="form-control"
                                            id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Jabatan</label>
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