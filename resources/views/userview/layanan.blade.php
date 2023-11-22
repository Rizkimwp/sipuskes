@extends ('appmain')

@section('content')
<!-- Keterangan Sebelum Navbar -->
<main>
    <div class="container-fluid text-bg-primary" style="height: 600px;">
        <div class="p-md-5 container  ">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 px-0">
                    <h1 class="fw-bold text-white display-2" data-aos="fade-up">Kami<br> Siap Melayani</h1>
                    <p class="text-white mt-4">Kami akan memberikan pelayanan terbaik untuk anda</p>
                    <a href="" class="btn btn-lg btn-outline-light mt-4">Tanya Dokter?</a>
                </div>
                <div class="col-md-6 text-end " data-aos="fade-left" data-aos-delay="300">
                    <img src="{{asset ('img/pelayanan.png')}}" alt="Puskesmas" class="img-fluid" height="50%"
                        width="60%">
                </div>
            </div>
        </div>
    </div>

    <div class="container ">
        <h1 class="text-center text-bg-primary mt-5 fw-bold p-4 rounded"> Jadwal Pelayanan UPT Puskesmas Cikande </h1>
        <div class="table-responsive">
            <table class="table mx-auto mt-2" style="max-width: 80%;">
                <thead class="table-info">
                    <tr>
                        <th>No</th>
                        <th> Jenis Pelayanan </th>
                        <th> Jadwal Pelayanan </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Pendaftaran dan Rekam Medik</td>
                        <td>Senin-Kamis & Sabtu 07.30-12.00 / Jum'at 07.30 - 11.30</td>
                      </tr>
                    </tbody>
                  </table>
                  
                </div>
              </div>
              
              <div class="container"> 
                <h1 class="text-center text-bg-primary mt-5 fw-bold p-4 rounded"> Program Kesehatan Masyarakat </h1>
              </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
              <div class="col">
                <div class="card">
                  <h5 class="card-header">Upaya Kesehatan Perseorangan</h5>
                  <div class="card-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#one" aria-expanded="false" aria-controls="one">
                            Rawat Jalan 
                          </button>
                        </h2>
                        <div id="one" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">adalah pelayanan medis kepada seorang pasien untuk tujuan pengamatan, diagnosis, pengobatan, rehabilitasi, dan pelayanan kesehatan lainnya, tanpa mengharuskan pasien tersebut dirawat inap. Keuntungannya, pasien tidak perlu mengeluarkan biaya untuk menginap..</div>
                        </div>
</div>
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      Rawat Inap
    </button>
  </h2>
  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
  </div>
</div>
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      Accordion Item #3
    </button>
  </h2>
  <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
  </div>
</div>
</div>
</div>
</div>
</div>
              
<div class="col">
  <div class="card">
    <h5 class="card-header">Upaya Kesehatan Masyarakat</h5>
    <div class="card-body">
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2-1" aria-expanded="false" aria-controls="flush-collapse2-1">
            Upaya Promosi Kesehatan  
            </button>
          </h2>
          <div id="flush-collapse2-1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Upaya promosi kesehatan ditujukan untuk meningkatkan status/derajat kesehatan yang optimal. Sasarannya adalah kelompok orang sehat. Tujuan upaya promkes adalah agar masyarakat mampu meningkatkan kesehatannya, kelompok orang sehat meningkat dan kelompok orang sakit menurun.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2-2" aria-expanded="false" aria-controls="flush-collapse2-2">
              Upaya Kesehatan Lingkungan
            </button>
          </h2>
  <div id="flush-collapse2-2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
    <div class="accordion-body">Upaya kesehatan lingkungan adalah upaya yang ditujukan untuk mewujudkan kualitas lingkungan yang sehat, baik fisik, kimia, biologi, maupun sosial yang memungkinkan setiap orang mencapai derajat kesehatan yang setinggi-tingginya.</div>
  </div>
</div>
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2-3" aria-expanded="false" aria-controls="flush-collapse2-3">
    Upaya Kesehatan Ibu dan Anak serta Keluarga Berencana
    </button>
  </h2>
  <div id="flush-collapse2-3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
    <div class="accordion-body">Upaya kesehatan Ibu dan Anak adalah upaya di bidang kesehatan yang menyangkut pelayanan dan pemeliharaan ibu hamil, ibu bersalin, ibu menyusui, bayi dan anak balita serta anak prasekolah. Serta pelayanan keluarga berencana. Bentuk-bentuk kegiatan dari upaya kesehatan ini adalah penyuluhan KB, kunjungan rumah pada ibu pasca salin dengan risiko, pelaksanaan SDIDTK pada anak pra sekolah.</div>
  </div>
</div>
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2-4" aria-expanded="false" aria-controls="flush-collapse2-4">
    Upaya Perbaikan Gizi Masyarakat   
    </button>
  </h2>
  <div id="flush-collapse2-4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
    <div class="accordion-body">Upaya perbaikan gizi masyarakat sebagaimana disebutkan didalam Undang-Undang RI No 36 tahun 2009 bertujuan untuk meningkatkan mutu gizi perseorangan dan masyarakat, antara lain melalui perbaikan pola konsumsi makanan, perbaikan perilaku sadar gizi dan peningkatan akses dan mutu pelayanan gizi dan kesehatan sesuai dengan kemajuan ilmu dan teknologi (Kemenkes RI, 2010).</div>
  </div>
</div>
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2-5" aria-expanded="false" aria-controls="flush-collapse2-5">
    Upaya Pencegahan dan Pengendalian Penyakit     
    </button>
  </h2>
  <div id="flush-collapse2-5" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
    <div class="accordion-body">Upaya Pencegahan dan Pengendalian Penyakit di wilayah UPT Puskesmas Cikande meliputi pelaksanaan surveilans, imunisasi, pencegahan dan pengendalian penyakit menular, pencegahan dan pengendalian penyakit tidak menular dan kesehatan jiwa. Upaya pencegahan dan pengendalian penyakit dilakukan dengan kegiatan imunisasi, dan atau penemuan dan penanganan penderita penyakit yang dapat dicegah dengan imunisasi, pemantauan dan pendampingan pasien, penyelidikan epidemiologi jika ditemukan kasus, melaksanakan pemberantasan vector misal melakukan fogging di desa-desa yang ada penderita DBD, memutuskan rantai penularan dari sumber penderita ke orang lain misal pada penderita TBC dengan Penatalaksanaan Penderita TBC dan juga penanganan pasien dengan gangguan jiwa.</div>
  </div>
</div>
<div class="accordion-item">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2-6" aria-expanded="false" aria-controls="flush-collapse2-6">
    Upaya Perawatan Kesehatan Masyarakat   
    </button>
  </h2>
  <div id="flush-collapse2-6" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
    <div class="accordion-body">Untuk pasien atau masyarakat yang membutuhkan perawatan di rumah, UPT Puskesmas Cikande menyediakan pelayanan kunjungan rumah oleh tenaga kesehatan yang sesuai dengan permasalahan pasien. Upaya kesehatan ini juga bertujuan untuk menjangkau pasien yang kesulitan mengakses layanan dalam gedung. Puskesmas Cikande melakukan upaya kunjungan rumah ke keluarga rawan  maupun ke pasien untuk pemantauan kondisi kesehatan.</div>
  </div>
</div>
</div>
</div>
</div>
                  </div>
              </div>
              
        </div>
    </div>


</main>

@endsection