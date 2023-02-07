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
                        <form action="/Index/saveAntrian" method="POST">
                            <div class="row mb-2">
                                <div class ="col-lg-2">
                                    <h6><label>Pilih Poli</label></h6>   
                                </div>

                                <div class="col-lg-5">
                                    <select name="id_poli" id="id_poli" class="form-control" onchange="noAntrian(this.value)">
                                        <option value="">Pilih</option>
                                        <option value="poli-mata">Poli Mata</option>
                                        <option value="poli-anak">Poli Anak</option>
                                        <option value="poli-tht">Poli THT</option>
                                        <option value="poli-jiwa">Poli Jiwa</option>
                                        <option value="poli-saraf">Poli Saraf</option>
                                        <option value="poli-gizi">Poli Gizi</option>
                                    </select>
                                </div>
                            </div>

                            <div class ="row mb-2">
                                <div class ="col-lg-2">
                                    <h6><label>No Antrian Poli</label></h6>    
                                </div>

                                <div class="col-lg-5">
                                    <input type="text" name="no_antrian_poli2" id="no_antrian_poli2" value="" disabled="" class="form-control">
                                    <input type="hidden" name="no_antrian_poli" id="no_antrian_poli" value="" class="form-control">
                                    <input type="hidden" name="no_antrian" value="5">
                                </div>
                            </div>

                            
                            <div class="row text-right">
                                <div class="col-lg-7">
                                    <input type="submit" name="simpan" id="simpan" value="Ambil Antrian" class="btn btn-primary">
                                </div>
                            </div>
                        </form>

                        <div class="row text-justify" >
                            <div class="col-lg-2">
                                <h6>Keterangan :</h6>
                            </div>
                            <div class="col-lg-5">
                                <ol class="pl-3">
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

        </div>
        <!-- /.row -->
    </div>
</section>