<section class="page-section portfolio" id="registrasi">
    <div class="container">

        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-3">Ambil Antrian</h2>

        <!-- Portfolio Grid Items -->
        <div class="row">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-12" style="margin-top: 20px">
                        <!-- <h1 align="center">Login </h1> -->
                        <form action="/antrian" method="POST">
                            @csrf
                            <div class="row mt-5">
                                <div class ="col-lg-2">
                                    <h6><label>Pilih Poli</label></h6>   
                                </div>

                                <div class="col-lg-5">
                                    <select name="poli" id="id_poli" class="form-control" wire:model="poli">
                                        <option value="">Pilih</option>
                                        @foreach ($polis as $poli)
                                        <option value="{{$poli->kode_poli}}">{{$poli->kode_poli}}</option>
                                        @endforeach
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
                                <ul class="pl-3">
                                    <li>Poliklinik Mata (PM)</li>
                                    <li>Poliklinik Anak (PA)</li>
                                    <li>Poliklinik THT (PTHT)</li>
                                    <li>Poliklinik Jiwa (PJ)</li>
                                    <li>Poliklinik Saraf (PS)</li>
                                    <li>Poliklinik Gizi (PG)</li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <!-- /.row -->
    </div>
</section>