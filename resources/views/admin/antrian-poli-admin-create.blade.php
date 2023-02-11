@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Admin - Antrian poli <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="/admin/dashboard"><i class="fa fa-dashboard"></i>
                            Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-users"></i> Admin
                    </li>

                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!--            <div class="row">-->
        <!--                <div class="col-lg-12">-->
        <!--                    <div class="alert alert-info alert-dismissable">-->
        <!--                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>-->
        <!--                        <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!-- /.row -->

        <style type="text/css">
            .row {
                margin-top: 10px;
            }
        </style>
        <form action="/admin/Antrian_poli/save" method="post">
            <div class="row">
                <div class="col-md-2">
                    <label>Pilih Poli</label>
                </div>

                <div class="col-md-5">
                    <select name="id_poli" id="id_poli" class="form-control" onchange="noAntrian(this.value)">
                        <option value=""> pilih </option>
                        @foreach ($polis as $poli)
                        <option value="{{ $poli->kode_poli }}">{{ $poli->kode_poli }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <label>No antrian poli</label>
                </div>

                <div class="col-md-5">
                    <input type="text" name="no_antrian_poli2" id="no_antrian_poli2" value="" disabled=""
                        class="form-control">
                    <input type="hidden" name="no_antrian_poli" id="no_antrian_poli" value="" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <label>Pilih Pasien</label>
                </div>

                <div class="col-md-5">
                    <select name="id_pasien" id="id_pasien" class="form-control">
                        @foreach ($pasiens as $pasien)
                        <option value="{{ $pasien->username }}">{{ $pasien->username }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row text-right">
                <div class="col-md-7">
                    <input type="submit" name="simpan" id="simpan" value="Simpan" class="btn btn-primary">
                </div>
            </div>
        </form>

        <script type="text/javascript">

        </script>
        <script type="text/javascript"
            src="/assets/admin/sb_admin/js/jquery.js"></script>
        <!-- <script src="js/bootstrap.min.js"></script> -->
        <script>


            function noAntrian(id_poli) {
                // alert(id_poli);
                if (id_poli != "") {
                    $.ajax({

                        url: "/admin/Antrian_poli/getNoAntrian",
                        type: "POST",
                        data: "id_poli=" + id_poli,
                        datatype: "json",
                        success: function (response) {
                            console.log(response);
                            // alert(data);
                            var output = JSON.parse(response);
                            if (output.no > output.maks) {
                                $("#no_antrian_poli2").val('Data Sudah Penuh');
                                // $("#simpan").toggle('slow');
                                $("#simpan").prop("disabled", true);
                            } else {

                                $("#no_antrian_poli").val(output.no);
                                $("#no_antrian_poli2").val(output.no_hasil);
                                $("#simpan").prop("disabled", false);
                            }
                        } // Munculkan alert error
                    });
                } else {
                    $("#no_antrian_poli").val("");
                    $("#no_antrian_poli2").val("");
                }
            }
        </script>

    </div>
    <!-- /.container-fluid -->
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
        $('.Antrian poli').addClass('active');
        });
    </script>
@endsection