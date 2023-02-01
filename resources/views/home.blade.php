@extends('layouts.main')
@section('styles')
<style>
  .btncostume{
    background: #2c3e50;
    color: white;
  }
  sup{
    color: red;
  }
  .border1{
    border: thin solid;
  }
  
  .costum{
    background: white;
    border: thin solid #fff;
  }
  
  .masthead .masthead-avatar {
    width: 8rem !important;
  }
</style>
@endsection

@section('content')
<!-- Masthead -->
<header class="masthead bg-primary text-white text-center">
  <div class="container d-flex align-items-center flex-column">

    <!-- Masthead Avatar Image -->
    

    <!-- Masthead Heading -->
    <h1 class="masthead-heading text-uppercase mb-0"><img class="masthead-avatar mb-5" src="/assets/user/img/logo.png" alt="">Puskesmas X</h1>
    <div class="row">
        <div class="col-md-12" style="border: thin solid; ">
          <h3>NO ANTRIAN SAAT INI</h3>
          <h1 style="margin-top: 5px;">1</h1>
        </div>
    </div>
      <h4 class="masthead mb-0" style="margin-top: 10px !important;padding: 20px;">Selamat Datang di Puskesmas X. 
        <br> Jika anda belum memiliki akun, silakan Registrasi terlebih dahulu.
      </h4>
      <button type="button" class="btn btncostume" data-toggle="modal" data-target="#exampleModal">
        Registrasi
      </button>
      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

    <!-- Masthead Subheading -->
    
  </div>
</header>

<!-- Portfolio Section -->
<section class="page-section portfolio" id="registrasi">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Login</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
          <div class="divider-custom-icon">
            <i class="fas fa-star"></i>
          </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
      <div class="row">

        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-4" style="margin-top: 20px">
              {{-- <h1 align="center">Login </h1> --}}
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

      </div>
      <!-- /.row -->

    </div>
  </section>

<!-- About Section -->
<section class="page-section bg-primary text-white mb-0" id="bantuan">
  <div class="container">

    <!-- About Section Heading -->
    <h2 class="page-section-heading text-center text-uppercase text-white">Bantuan</h2>

    <!-- Icon Divider -->
    <div class="divider-custom divider-light">
      <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
      <div class="divider-custom-line"></div>
    </div>

    <!-- About Section Content -->
    <div class="container">  
      <div class="row">
        <div class="col-lg-4.ml-auto" align="center" >
          <p class="lead">Klik Login > Pilih Poli > Klik Cetak</p>
          <p class="lead">Pasien melakukan Registrasi > Input Nomor Identitas, Nama Pasien, Jenis Kelamin, Usia, Tanggal Lahir, Alamat, Nomor Telephone, Username dan Password > Klik Login >  Pilih Poli > Klik Cetak </p>
      </div>
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

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Registrasi</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="http://localhost/antrian-puskesmas/Index/registrasi" method="post">

          <div>
              <label >Nomor KTP <sup>*</sup></label>
              <input type="text" id="no_identitas" name="no_identitas" class="form-control" value="" placeholder="Nomor KTP" required="">
          </div>

          <div>
              <label >Nama <sup>*</sup></label>
              <input type="text" id="nama" name="nama" class="form-control" value="" placeholder="Nama" required="">
          </div>

          <div>
            <label >Jenis Kelamin</label>
            <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
            <option value="">Pilih</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
            </select>
          </div>

          <div>
              <label >Tanggal Lahir <sup>*</sup></label>
              <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" value="" placeholder="Tanggal Lahir" required="">
          </div>

          <div>
            <label >Alamat</label>
            <textarea id="alamat" name="alamat" class="form-control" placeholder="Alamat"></textarea>
          </div>

          <div>
              <label >No Telephone</label>
              <input type="no_telp" id="no_telp" name="no_telp" class="form-control" value="" placeholder="No Telephone">
          </div>

          <div>
              <label >Username <sup>*</sup></label>
              <input type="text" id="username" name="username" class="form-control" value="" placeholder="Username" required="">
          </div>

          <div>
              <label >Password <sup>*</sup></label>
              <input type="password" id="password" name="password" class="form-control" value="" placeholder="Password" required="">
          </div>

          <br><br>
          <div align="right">
          <!-- <a href=""  >Registrasi</a> -->
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        
        </form>
    </div>
    
  </div>
</div>
</div>
@endsection

@section('scripts')
  <script type="text/javascript">
    function noAntrian(id_poli){
    // alert(id_poli);?
    if(id_poli!=""){
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
  </script>
@endsection
</body>

</html>
