@extends ('app')
@section('title', 'Tambah User')
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

                        <form method="post" action="{{ route('user.store') }}">
                            @csrf

                            <div class="row ">
                                <div class="col-8">
                                    <div class="form-floating mb-3">
                                        <input type="email" name="email" class="form-control @error ('email') is-invalid @enderror" id="email"
                                            placeholder="name@example.com" value="{{old ('email')}}">
                                        <label for="email">Email address</label>
                                        @error ('email') 
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="name" name="name" class="form-control @error ('email') is-invalid @enderror" id="username"
                                            placeholder="Username" value="{{old ('name')}}">
                                        <label for="username">Username</label>
                                        @error ('name') 
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-floating">
                                        <select name="role" id="role" class="form-select form-select-ms mb-3"
                                            aria-label="Large select example">
                                            <option value="admin">Admin</option>

                                        </select>
                                        <label for="role">Level Admin</label>
                                    </div>
                             
                                    <div class="form-floating mb-3">
                                        <input type="password" name="password" class="form-control @error ('password') is-invalid @enderror"
                                            id="password" placeholder="Password" >
                                        <label for="paswword">Password</label>
                                        @error ('password') 
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
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