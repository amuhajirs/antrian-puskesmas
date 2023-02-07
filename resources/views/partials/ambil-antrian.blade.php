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