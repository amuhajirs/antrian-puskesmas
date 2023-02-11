@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Dashboard <small>Selamat Datang</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Dashboard
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

        <!-- Morris Charts CSS -->
        <link href="css/plugins/morris.css" rel="stylesheet" />
        <div class="row">
            <div class="col-lg-9 col-md-6">
                <form action="http://localhost:8080/antrian-puskesmas/admin/akun/reset_password" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password Saat Ini</label>
                        <input type="password" name="cur_pass" class="form-control" id="exampleInputEmail1" placeholder="Password Sekarang" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password Baru</label>
                        <input type="password" class="form-control" name="new_password" id="exampleInputPassword1" placeholder="Password Baru" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password Baru Lagi</label>
                        <input type="password" class="form-control" name="re_password" id="exampleInputPassword1" placeholder="Password Baru" required="required" />
                    </div>
                    <button type="submit" class="btn btn-default">
                        Simpan
                    </button>
                </form>
            </div>
            <div class="col-lg-3 col-md-6"></div>
        </div>
        <!-- /.row -->

        <script src="js/jquery.js"></script>
    </div>
    <!-- /.container-fluid -->
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $(".dash").addClass("active");
        });
    </script>
@endsection