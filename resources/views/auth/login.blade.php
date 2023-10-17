@extends ('login') 

@section('content') 
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-6 col-lg-9 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-2">Selamat Datang di <br> <span class="h2">Sipuskes</span></h1>
                                <p>Sistem Infomasi <br> Puskesmas Cikande</p>
                            </div>
                            <hr>
                            @if (session('error'))
                            <div class="alert alert-danger">
                                <b> Oops! <b> {{session('error')}}
                            </div>
                            @endif

                            <form action="{{ route('actionLogin')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" autofocus>
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user"
                                        id="password" placeholder="Password" required>
                                </div>

                               <button class="btn btn-primary btn-user btn-block" type="submit"> Login </button> 
                                
                                </a>
                                <hr>
</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

@endsection 