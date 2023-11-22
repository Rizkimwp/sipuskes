@extends ('appmain')

@section('content')
<!-- Keterangan Sebelum Navbar -->
<main>
    <div class="container-fluid text-bg-primary" style="height: 600px;">
        <div class="p-md-5 container">
            @foreach ($profiles as $profile)
            <div class="row justify-content-between align-items-center ">
                <div class="col-lg-6 px-0">
                    <h1 class="fw-bold text-white display-2" data-aos="fade-up">{{$profile -> judul}}</h1>
                    <p class="text-white mt-4">{{$profile -> body}}</p>
                    <a href="" class="btn btn-lg btn-primary mt-4">Tanya Dokter?</a>
                </div>
                <div class="col-md-6 text-end " data-aos="fade-left" data-aos-delay="300">
                    <img src="{{ '../' . $profile -> image }}" alt="Puskesmas" class="img-fluid" height="50%"
                        width="70%">
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center ">
            @foreach ($profilekepala as $profile)
            <div class="col-md-4 mb-3">
                <div class="card p-1 shadow" >
                    <div class="card-header fw-bold"><h5>{{$profile -> judul}}</h5></div>
                    <img src="{{'../' . $profile -> image}}" class="card-img-top " alt="Kepala Puskesmas">
                    
                    </div>
            </div>
            @endforeach
            @foreach ($profilepuskesmas as $profile)
                    <div class="col-md-6 my-auto ">
                        <div class="card shadow ">
                            <div class="card-body" data-aos="fade-up">
                                <h5 class="card-header mb-3">{{$profile -> judul}}</h5>
                                <div class="card-body">
                                    <p>{{$profile -> body}}</p>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    @endforeach
        </div>
    </div>

    <div class="container-fluid text-bg-light p-5 mt-5 mb-5">
        <div class="container bg-primary rounded ">
            @foreach ($visimisi as $profile)
            <div class="row align-items-center">
                <div class="col-lg-5" data-aos="fade-up">
                    <img src="{{'../' . $profile -> image}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 p-3 text-white" data-aos="fade-right" data-aos-delay="300">
                    {!! $profile -> body!!}
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container-fluid bg-primary mb-3">
        <h1 class="text-center text-white pt-4" data-aos="fade-down">Struktur Organisasi </h1>
        <div id="carouselExampleAutoplaying" class="carousel slide pb-4" data-bs-ride="carousel">
            <div class="carousel-inner justify-content-center ">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="carousel-item active ">
                            <img src="{{asset ('img/structure-organisasi.png')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset ('img/structure-organisasi.png')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset ('img/structure-organisasi.png')}}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tim Medis  -->
    <div class=" text-bg-light container-fluid pt-2">
        <div class="container ">
            <h1 class="text-center p-3 fw-bold  rounded" data-aos="fade-right"> Tim Kami </h1>
            <div class="row justify-content-center">
                <div class="col-md-4  p-3 m-2 rounded " data-aos="fade-up">
                    <div class="card text-center">
                        <h5 class="card-header text-bg-primary">Tenaga Kesehatan</h5>
                        <div class="card-body bg-dark">
                            <i class="fas fa-4x fa-hospital-user text-warning"></i>
                            <div class="mt-3 fw-bold display-5 text-light">

                                <div id="counter" class="counter" data-count="63"></div>
                            </div>

                            <a href="#" class="btn btn-success mt-3">Selengkapnya</a>
                        </div>
                        <div class="card-footer bg-primary">
                        </div>
                    </div>
                </div>
                <div class="col-md-4  p-3 m-2 rounded " data-aos="fade-up" data-aos-delay="300">
                    <div class="card text-center">
                        <h5 class="card-header text-bg-primary">Tenaga Non Kesehatan</h5>
                        <div class="card-body bg-dark">
                            <i class="fas fa-4x fa-hospital-user text-warning"></i>
                            <div class="mt-3 fw-bold display-5 text-light">

                                <div id="counter" class="counter" data-count="16"></div>
                            </div>

                            <a href="#" class="btn btn-success mt-3">Selengkapnya</a>
                        </div>
                        <div class="card-footer bg-primary">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <!-- Time Line -->
    <div class="container ">
        <h2 class="display-4 fw-bold text-primary mt-5" data-aos="fade-right">Milestone</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="main-timeline5">
                    <div class="timeline" data-aos="fade-left" data-aos-delay="100">
                        <div class="timeline-icon"><span class="year">2012</span></div>
                        <div class="timeline-content">
                            <h3 class="title">Pendirian Puskesmas Cikande</h3>
                            <p class="description">
                                Puskesmas Cikande didirikan pada tahun 2012 sebagai upaya pemerintah daerah untuk
                                meningkatkan pelayanan kesehatan di wilayah tersebut.
                            </p>
                        </div>
                    </div>
                    <div class="timeline" data-aos="fade-right" data-aos-delay="200">
                        <div class="timeline-icon"><span class="year">2015</span></div>
                        <div class="timeline-content">
                            <h3 class="title">Pembangunan Fasilitas dan Infrastruktur</h3>
                            <p class="description">
                                Periode ini ditandai dengan pembangunan fasilitas baru dan peningkatan infrastruktur
                                Puskesmas, termasuk penambahan ruang periksa, laboratorium, dan sarana pendukung
                                lainnya.
                            </p>
                        </div>
                    </div>
                    <div class="timeline" data-aos="fade-left" data-aos-delay="300">
                        <div class="timeline-icon"><span class="year">2016</span></div>
                        <div class="timeline-content">
                            <h3 class="title">Pelatihan Tenaga Kesehatan</h3>
                            <p class="description">
                                Fokus pada pelatihan dan pengembangan tenaga kesehatan di Puskesmas Cikande untuk
                                meningkatkan keterampilan dan pengetahuan dalam memberikan pelayanan kesehatan yang
                                berkualitas.
                            </p>
                        </div>
                    </div>
                    <div class="timeline" data-aos="fade-right" data-aos-delay="400">
                        <div class="timeline-icon"><span class="year">2018</span></div>
                        <div class="timeline-content">
                            <h3 class="title">Program Pencegahan dan Promosi Kesehatan</h3>
                            <p class="description">
                                Implementasi program-program pencegahan penyakit dan promosi kesehatan di komunitas
                                sekitar, melibatkan kegiatan penyuluhan dan kampanye kesehatan.
                            </p>
                        </div>
                    </div>
                    <div class="timeline" data-aos="fade-left" data-aos-delay="500">
                        <div class="timeline-icon"><span class="year">2019</span></div>
                        <div class="timeline-content">
                            <h3 class="title">Digitalisasi Sistem Informasi Kesehatan</h3>
                            <p class="description">
                                Puskesmas Cikande memperkenalkan sistem informasi kesehatan berbasis digital untuk
                                meningkatkan manajemen data pasien, pelacakan penyakit, dan efisiensi administrasi.
                            </p>
                        </div>
                    </div>
                    <div class="timeline" data-aos="fade-right" data-aos-delay="600">
                        <div class="timeline-icon"><span class="year">2020</span></div>
                        <div class="timeline-content">
                            <h3 class="title">Respons Terhadap Pandemi COVID-19</h3>
                            <p class="description">
                                Puskesmas Cikande terlibat aktif dalam respons terhadap pandemi COVID-19 dengan
                                melakukan tes, pelacakan kontak, dan penyuluhan kepada masyarakat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>


@endsection