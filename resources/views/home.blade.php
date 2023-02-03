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
<header class="masthead text-white text-center" style="background-color: #17924a">
  <div class="container d-flex align-items-center flex-column">

    <!-- Masthead Avatar Image -->
    

    <!-- Masthead Heading -->
    <h1 class="masthead-heading text-uppercase mb-0" style="text-align: center">Klinik Isekai</h1>
    <h4 class="masthead mb-0" style="margin-top: 10px !important;padding: 20px;">Selamat Datang di Isekai Klinik 
      <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae doloremque, odio possimus minus voluptatem odit, maiores assumenda officiis eveniet omnis dolores temporibus dolor quasi vero itaque eaque! Nemo, sunt obcaecati!
    </h4>
    <div class="row">
        <div class="col-md-12" style="border: thin solid; ">
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
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    
                                            </div>
    
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
    
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    
                                            </div>
    
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
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

<!-- Modal Daftar -->
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
        <form action="/register" method="POST">
          @csrf
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
