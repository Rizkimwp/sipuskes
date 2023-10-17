@extends ('app')

@section('content')

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>

                            <form method="post" action="{{ route('store') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Name" required>
                                    </div>
                                    @error('name')
                                    <div class="invalid-feedback"> 
                                    Masukan Nama yang benar
                                    </div>
                                    @enderror
                                    <div class="col-sm-6">
                                        <input type="email" name="email" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="email" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="role" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Level Admin" required>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" required>
                                    </div>
                                
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block"> Simpan </button>
                                    
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @endsection