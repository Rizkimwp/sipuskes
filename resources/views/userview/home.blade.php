@extends ('appmain')

@section('content')
<!-- Keterangan Sebelum Navbar -->
<div class="container-fluid bg-gradient-secondary ">
    <div class="container mt-5 p-4">
        <div class="row justify-content-center">
            <div class="col-6 text-center">
                <h2>SELAMAT DATANG DI WEBSITE RESMI <br> UPT PUSKESMAS CIKANDE</h2>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-6 text-center">
                    <img  src="{{asset ('img/hospital.png') }}" alt="Gambar Rumah Saskit">
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-6 text-center">
                        <p> Selamat datang di Website Resmi Puskesmas Cikande! Kami dengan bangga mempersembahkan
                            platform ini sebagai sumber informasi kesehatan terkini dan layanan kesehatan terpadu untuk
                            masyarakat Cikande dan sekitarnya. Dengan komitmen kami untuk meningkatkan kualitas hidup
                            melalui pelayanan kesehatan yang berkualitas, website ini menjadi jendela digital kami untuk
                            menjangkau Anda dengan informasi penting, layanan medis, dan sumber daya kesehatan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection