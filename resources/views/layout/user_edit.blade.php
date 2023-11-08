@extends('app')
@section('title', 'Edit User')
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

                    <form method="POST" action="{{ route('user.update', $user->id) }}">
      
      @csrf
      @method('PUT')

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" name="email" value="{{ $user->email }}" class="form-control @error ('email') is-invalid @enderror" id="email"
                                            placeholder="name@example.com">
                                        <label for="email">Email address</label>
                                        @error ('email') 
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="name" name="name" value="{{ $user->name }}" class="form-control @error ('email') is-invalid @enderror" id="username"
                                            placeholder="Username">
                                        <label for="username">Username</label>
                                        @error ('name') 
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-9 mb-3 ">
                                <div class="form-floating">
                                        <input type="name" name="role" value="{{ $user->role }}" class="form-control" id="role"
                                            placeholder="Role"  disabled>
                                        <label for="role">Level Admin</label>
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