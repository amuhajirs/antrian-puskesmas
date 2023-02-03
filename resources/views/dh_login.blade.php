<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Isekai Klinik</title>
  <link rel="shortcut icon" href="assets/user/img/logo.png">

  <!-- Custom fonts for this theme -->
  <link href="/assets/user/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="/assets/user/css/freelancer.min.css" rel="stylesheet">
  <link href="/assets/user/lib/noty.css" rel="stylesheet">
  <link href="/assets/user/lib/themes/metroui.css" rel="stylesheet">

  <link rel="stylesheet" href="/assets/user/css/style.css">
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Antrian Puskesmas</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
                      <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">Ahmad Muhajir Syamlan</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/logout">Logout</a>
            </li>
                    <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#bantuan">Bantuan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0"><img class="masthead-avatar mb-5" src="/assets/user/img/logo.png" alt="">Puskesmas X</h1>
      <div class="row">
          <div class="col-md-12" style="border: thin solid; ">
            <h3>NO ANTRIAN SAAT INI</h3>
          <h1 style="margin-top: 5px;">5</h1>
          </div>
      </div>
              <div class="row" style="margin-top: 60px">
          <div class="col-md-3" style="border: thin solid; ">
            <h3>2</h3>
            <H6>Poli Umum</H6>
          </div>
          <div class="col-md-3" style="border: thin solid; ">
            <h3>2</h3>
            <H6>Poli Gigi</H6></div>
          <div class="col-md-3" style="border: thin solid; ">
            <h3>1</h3>
            <H6>Poli Imunisasi</H6></div>
          <div class="col-md-3" style="border: thin solid; ">
            <h3>0            <H6>Poli Tuberculosis</H6></div>
        </div>
                  <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
              <div class="row" style="width: 60%;">
          <div class="col-md-5 text-right">
            <label><h5>Nomor Antrian Anda :</label></h5>
          </div>
          <div class="col-md-2 text-justify"><h5>2</h5></div>
                      <div class="col-md-5"><a href="/Index/cetak/38" style="color: #000; background: #fff; padding: 10px;" target="_blank">Cetak</a></div>
                  </div>
        <div class="row" style="width: 60%;">
          <div class="col-md-5 text-right"><label><h5>Poli :</label></h5></div>
          <div class="col-md-5 text-justify"><h5>Poli Umum</h5></div>
        </div>
      
    </div>
  </header>

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="registrasi">
           <div class="container">

        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Ambil Antrian</h2>

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
              <div class="col-md-12" style="margin-top: 20px">
                <!-- <h1 align="center">Login </h1> -->
                <form action="/Index/saveAntrian" method="post">
                  <div class ="row">
                    <div class ="col-md-2">
                      <h6><label>Pilih Poli</label></h6>   
                    </div>

                    <div class="col-md-5">
                      <select name="id_poli" id="id_poli" class="form-control" onchange="noAntrian(this.value)">
                        <option value=""> pilih </option>
                                                  <option value="1"> PLUM </option>
                                                  <option value="2"> PLGG </option>
                                                  <option value="3"> PLIM </option>
                                                  <option value="4"> PLTB </option>
                                              </select>
                    </div>
                  </div>

                  <div class ="row">
                    <div class ="col-md-2">
                      <h6><label>No Antrian Poli</label></h6>    
                    </div>

                    <div class="col-md-5">
                      <input type="text" name="no_antrian_poli2" id="no_antrian_poli2" value="" disabled="" class="form-control">
                      <input type="hidden" name="no_antrian_poli" id="no_antrian_poli" value="" class="form-control">
                      <input type="hidden" name="no_antrian" value="5">
                    </div>
                  </div>

                 
                  <div class="row text-right">
                    <div class="col-md-7">
                      <input type="submit" name="simpan" id="simpan" value="Ambil Antrian" class="btn btn-primary">
                    </div>
                  </div>
                </form>

                 <div class="row text-justify" >
                 <h6>Keterangan :</h6>
                  <ol>
                    <li>Poli Umum (PLUM)</li>
                    <li>Poli Gigi (PLGG) </li>
                    <li>Poli Imunisasi (PLIM)</li>
                    <li>Poli Tuberculosis (PLTB)</li>
                  </ol>
              </div>
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

  


  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Location</h4>
          <p class="lead mb-0">Jalan Kenangan Indah 4E 
            <br>No.16 Rt.07/Rw.98</p>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-6">
          <h4 class="text-uppercase mb-4">Telephone</h4>
          
          <p class="lead mb-0">(021)79184767</p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>&copy; 2022 - Abid Taufiqur Rohman </small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

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
        <form action="/Index/registrasi" method="post">

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

  <!-- Bootstrap core JavaScript -->
  <script src="/assets/user/vendor/jquery/jquery.min.js"></script>
  <script src="/assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="/assets/user/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="/assets/user/js/jqBootstrapValidation.js"></script>
  <script src="/assets/user/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="/assets/user/js/freelancer.min.js"></script>
  <script src="/assets/user/lib/noty.min.js"></script>
  <script type="text/javascript">
    function noAntrian(id_poli){
    // alert(id_poli);?
    if(id_poli!=""){
      $.ajax({

        url: "/Index/getNoAntrian",
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

  <script type="text/javascript">
    new Noty({
        
        text: 'Login Berhasil',
        timeout: 3000,
        theme: "metroui",
        type: "success",

        
    }).show();
  </script>
        
</body>

</html>