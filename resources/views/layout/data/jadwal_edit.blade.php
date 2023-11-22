@extends ('app')
@section('title', 'Tambah Jadwal Praktek')
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Jadwal Praktek Dokter</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Jadwal Praktek Dokter</h6>
        </div>
        <div class="card o-hidden border-0 my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->

                <div class="row justify-content-center">
                    <div class="col-lg-9">

                        <form method="post" action="{{ route('jadwal.store') }}">
                            @csrf
@method('PUT')
                            <div class="row ">
                                <div class="col-6">
                                    <div class="form-floating">
                                        <select name="hari_praktek" class="form-select form-select-ms mb-3"
                                            aria-label="Large select example">
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jum'at">Jum'at</option>
                                            <option value="Sabtu">Sabtu</option>
                                        </select>
                                        <label for="floatingPassword">Hari</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Jam Praktek</span>
                                            <input type="time" class="form-control" name="jam_praktek_start">
                                            <span class="input-group-text">s/d</span>
                                            <input type="time" class="form-control" name="jam_praktek_end">
                                        </div>
                                    </div>


                                    <div class="form-floating">
                                        <select name="dokter_id" class="form-select form-select-ms mb-3"
                                            aria-label="Large select example">
                                            @foreach($dokters as $dokter)
                                            <option value="{{$dokter -> id}}">{{ $dokter->nama }}</option>
                                            @endforeach
                                        </select>
                                        <label for="floatingPassword">Nama Dokter</label>
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