@extends('layouts.main')
@section('styles')
<style>
  .carousel-item .card{
    height: 450px;
    overflow: hidden;
  }

  ._header{
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('http://news.propanraya.com/upload/2018_april/Klinik_Darma_Nusantara_7.jpeg');
    background-repeat: no-repeat;
    background-position: center;
    background-size : cover;
    background-attachment: fixed;
  }

  header{
    min-height: 100vh;
  }
</style>
@endsection

@section('content')

{{-- Udh Login --}}
@auth('web')
  {{-- Header --}}
  @include('partials.hero-login')
  {{-- Ambil Antrian --}}
  @include('partials.ambil-antrian')

{{-- Belom Login --}}
@else
  {{-- Header --}}
  @include('partials.hero')
  {{-- Jenis Layanan --}}
  @include('partials.jenis-layanan')
@endauth

<!-- About Section -->
<section class="page-section text-white mb-0" id="bantuan" style="background-color: #1a6988 ">
  <div class="container">

    <!-- About Section Heading -->
    <h2 class="page-section-heading text-uppercase text-white text-left mb-5" >Bagaimana cara mengambil nomor antrian ?</h2>

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

@if(request()->session()->has('loggedOut'))
<script type="text/javascript">
  new Noty({
      
    text: 'Anda Telah Logout',
    timeout: 3000,
    theme: "metroui",
    type: "success",
  }).show();
</script>
@endif

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
@endsection