@extends('layouts.main')
@section('styles')
<link rel="stylesheet" href="/assets/user/css/style.css">
@endsection

@section('content')
<!-- Masthead -->
<header class="masthead text-white text-center" style="background-color: #17924a">
  <div class="container d-flex align-items-center flex-column">

    <!-- Masthead Avatar Image -->
    

    <!-- Masthead Heading -->
    <h1 class="masthead-heading text-uppercase mb-0 text-left" >Selamat Datang di Isekai Klinik </h1>
    <h4 class="masthead mb-0" style="margin-top: 50px !important;padding: 5px; text-align:left">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae doloremque, odio possimus minus voluptatem odit, maiores assumenda officiis eveniet omnis dolores temporibus dolor quasi vero itaque eaque! Nemo, sunt obcaecati!
    </h4>
    <div class="row">
        <div class="col-md-12" style="border: thin solid; margin-top:70px">
          <h3>NO ANTRIAN SAAT INI</h3>
          <h1 style="margin-top: 5px;">1</h1>
        </div>
    </div>



    <!-- Masthead Subheading -->
    
  </div>
</header>

<!-- Portfolio Section -->
<section class="page-section portfolio" id="registrasi">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">JENIS PELAYANAN</h2>

      <!-- Portfolio Grid Items -->
      <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3"></h3>
                </div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
    
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
    
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://o-cdf.sirclocdn.com/unsafe/o-cdn-cas.sirclocdn.com/parenting/images/dokter_mata_di_bogor_6BYIDoj.width-800.jpegquality-80.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Poliklinik Mata</h4>
                                                <p class="card-text">Poliklinik mata adalah klinik yang memberikan pemeriksaan, perawatan, serta diagnosis yang berhubungan dengan penyakit mata dan gangguan penglihatan.</p>
    
                                            </div>
    
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://all-inedu.com/wp-content/uploads/2022/04/mybt-bbBV2FzrNcsfCzEkFZULFdzn4P5zccNwYXl_7HMJ7lRPg0rRjhIxfWdopqir5HXIp9WcFK311m7RYcIr0gKMCort44sgmIJ.jpeg">
                                            <div class="card-body">
                                                <h4 class="card-title">Poliklinik Anak</h4>
                                                <p class="card-text">Poli anak merupakan poli spesialis yang melayani pemeriksaan pada anak-anak yang mengalami sakit maupun konsultasi dan penyediaan imunisasi bagi bayi dan anak.</p>
    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://d1bpj0tv6vfxyp.cloudfront.net/kenali-8-tindakan-pemeriksaan-yang-dilakukan-dokter-ththalodoc.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Poliklinik THT</h4>
                                                <p class="card-text">Poliklinik THT merupakan Poliklinik yang menangani dan melayani pemeriksaan telinga/hidung/tenggorok.</p>
    
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
    
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3qO57x8JQIFAoxDdP5wh4ZEVMT265r1Y87oVHtlJkEVcEAeNMwugS6wvKKKgMWRLd0Co&usqp=CAU">
                                            <div class="card-body">
                                                <h4 class="card-title">Poliklinik Jiwa</h4>
                                                <p class="card-text">Poliklinik Jiwa Melayani pemeriksaan, pengobatan, tindakan dan konsultasi berbagai penyakit yang berhubungan dengan kejiwaan.</p>
    
                                            </div>
    
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://www.rsupermatahati.com/files/image/1570171111_hal-hal-seputar-konsultasi-penyakit-saraf-yang-perlu-anda-tahu-alodokter.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Poliklinik Saraf</h4>
                                                <p class="card-text">Poliklinik Saraf merupakan Poliklinik yang menangani dan melayani pemeriksaan kondisi dan mendeteksi gangguan pada sistem saraf tubuh.</p>
    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://stikeshb.ac.id/wp-content/uploads/2022/08/8.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Poliklinik Gizi</h4>
                                                <p class="card-text">Poli Gizi merupakan poliklinik yang didalamnya terdapat ahli gizi dan tenaga spesialis yang bertugas memberikan saran dan informasi kepada pasien tentang penatalaksanaan gizi dan masalah kesehatan.</p>
    
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                          
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






      {{-- <div class="row">

        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-4" style="margin-top: 20px">
              <h1 align="center">Login </h1>
              <form action="http://localhost/antrian-puskesmas/Index/proses_login" method='POST'>
                @csrf
                <label >Username</label>
                <input type="username" name="username" class="form-control" >
              
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <br><br>

                <div align="right">
                  <button type="submit" class="btn btn-dark">Login</button>
                </div>
                
              </form>
              <br><center><p>Repost by <a href='https://sharecodingan.blogspot.com/' title='sharecodingan.blogspot.com' target='_blank'>Share Codingan</a></p></center>
              
            </div>
          </div>
        </div>

      </div> --}}
      <!-- /.row -->

    </div>
  </section>

<!-- About Section -->
<section class="page-section bg-primary text-white mb-0" id="bantuan">
  <div class="container">

    <!-- About Section Heading -->
    <h2 class="page-section-heading text-uppercase text-white text-left" >Bagaimana cara mengambil nomor antrian ?</h2>

    <!-- About Section Content -->
      
    <div class="wpb-timeline-block">

        <div class="wpb-timeline-content">
        
        <h3>1. Klik Tombol Login </h3>
        <ul>
          <li>Jika belum memiliki akun, silahkan <strong>Daftar</strong> Dahulu.</li>
          <li>Silahkan mengisi dan melengkapi isi form.</li>     
        </ul>

      </div>
    </div>

    
    <div class="wpb-timeline-block">

      <div class="wpb-timeline-content">
      
      <h3>2. Pilih Poliklinik</h3>
      <ul>
        <li>Jika sudah memilih <strong>Poliklinik</strong></li>
        <li>Silahkan ambil nomor antrian.</li>     
      </ul>

    </div>
  </div>

    
  <div class="wpb-timeline-block">

    <div class="wpb-timeline-content">
    
    <h3>3. Cetak Nomor Antrian</h3>
    <ul>
      <li>Klik tombol <strong>Cetak</strong> jika ingin mencetak nomor antrian.</li>
      <li>Silahkan tunggu sampai dipanggil sesuai dengan nomor antrian.</li>     
    </ul>

  </div>
</div>



    <!-- About Section Button -->
    <!-- <div class="text-center mt-4">
      <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/themes/freelancer/">
        <i class="fas fa-download mr-2"></i>
        Free Download!
      </a>
    </div> -->
  <!-- </div>
  </div> -->
</section>

<!-- Modal Daftar -->
<livewire:daftar-modal />

<!-- Modal Login-->
<livewire:login-modal />
@endsection

@section('scripts')
{{-- <script type="text/javascript">
  function noAntrian(id_poli){
  // alert(id_poli);?
  if(id_poli!){
    $.ajax({

      url: "http://localhost/antrian-puskesmas/Index/getNoAntrian",
      type : "POST",
      data : "id_poli="+id_poli,
      datatype: "json",
      success:function(response){
        console.log(response);
        // alert(data);
        var output = JSON.parse(response);
        if(output.no > output.maks){
          $("#no_antrian_poli2").val('Data Sudah Penuh');
          // $("#simpan").toggle('slow');
          $("#simpan").prop("disabled",true);
        }else{

          $("#no_antrian_poli").val(output.no_hasil);
          $("#no_antrian_poli2").val(output.no_hasil);
          $("#simpan").prop("disabled",false);
        }
      } // Munculkan alert error
    });
  }else{
    $("#no_antrian_poli").val("");
    $("#no_antrian_poli2").val("");
  }
}
</script> --}}

@if(request()->session()->has('daftarSukses'))
<script type="text/javascript">
  new Noty({
      
      text: 'Pendaftaran Berhasil',
      timeout: 3000,
      theme: "metroui",
      type: "success",
  }).show();
</script>
@endif

@if(request()->session()->has('loginSuccess'))
<script type="text/javascript">
  new Noty({
      
      text: 'Login Berhasil',
      timeout: 3000,
      theme: "metroui",
      type: "success",
  }).show();
</script>
@endif
@endsection