@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Admin - Poli <small></small>
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

        <link type="text/css" rel="stylesheet"
            href="/assets/grocery_crud/themes/flexigrid/css/flexigrid.css" />

        <script src="/assets/grocery_crud/js/jquery-1.11.1.min.js"></script>
        <script
            src="/assets/grocery_crud/js/jquery_plugins/jquery.form.min.js"></script>
        <script
            src="/assets/grocery_crud/themes/flexigrid/js/flexigrid-edit.js"></script>
        <script src="/assets/grocery_crud/js/jquery_plugins/jquery.noty.js"></script>
        <script
            src="/assets/grocery_crud/js/jquery_plugins/config/jquery.noty.config.js"></script>
        <style type='text/css'>
            body {
                font-family: Arial;
                font-size: 14px;
            }

            a {
                text-decoration: none;
                font-size: 14px;
            }

            a:hover {
                text-decoration: underline;
            }

            input,
            option,
            select {
                min-height: 30px;
            }
        </style>
        <div class="flexigrid crud-form" style='width: 100%;' data-unique-hash="7ea6df50001cbab5b75c30b63e038530">
            <div class="mDiv">
                <div class="ftitle">
                    <div class='ftitle-left'>
                        Edit Poli </div>
                    <div class='clear'></div>
                </div>
                <div title="Minimize/Maximize" class="ptogtitle">
                    <span></span>
                </div>
            </div>
            <div id='main-table-box'>
                <form action="/index.php/admin/poli/index/update/7" method="post"
                    id="crudForm" enctype="multipart/form-data" accept-charset="utf-8">
                    <div class='form-div'>
                        <div class='form-field-box odd' id="kode_poli_field_box">
                            <div class='form-display-as-box' id="kode_poli_display_as_box">
                                Kode poli :
                            </div>
                            <div class='form-input-box' id="kode_poli_input_box">
                                <input id='field-kode_poli' class='form-control' name='kode_poli' type='text' value="PLY"
                                    maxlength='5' />
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class='form-field-box even' id="nama_poli_field_box">
                            <div class='form-display-as-box' id="nama_poli_display_as_box">
                                Nama poli :
                            </div>
                            <div class='form-input-box' id="nama_poli_input_box">
                                <input id='field-nama_poli' class='form-control' name='nama_poli' type='text'
                                    value="Poli YEAA" maxlength='100' />
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class='form-field-box odd' id="jumlah_maksimal_field_box">
                            <div class='form-display-as-box' id="jumlah_maksimal_display_as_box">
                                Jumlah maksimal :
                            </div>
                            <div class='form-input-box' id="jumlah_maksimal_input_box">
                                <input id='field-jumlah_maksimal' class='form-control' name='jumlah_maksimal' type='text'
                                    value="99" maxlength='2' />
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div id='report-error' class='report-div error'></div>
                        <div id='report-success' class='report-div success'></div>
                    </div>
                    <div class="pDiv">
                        <div class='form-button-box'>
                            <input id="form-button-save" type='submit' value='Update changes' class="btn btn-large" />
                        </div>
                        <div class='form-button-box'>
                            <input type='button' value='Update and go back to list' id="save-and-go-back-button"
                                class="btn btn-large" />
                        </div>
                        <div class='form-button-box'>
                            <input type='button' value='Cancel' class="btn btn-large" id="cancel-button" />
                        </div>
                        <div class='form-button-box'>
                            <div class='small-loading' id='FormLoading'>Loading, updating changes...</div>
                        </div>
                        <div class='clear'></div>
                    </div>
                </form>
            </div>
        </div>
        <script>
            var validation_url = '/index.php/admin/poli/index/update_validation/7';
            var list_url = '/index.php/admin/poli/index/';

            var message_alert_edit_form = "The data you had change may not be saved.\nAre you sure you want to go back to list?";
            var message_update_error = "An error has occurred on saving.";
        </script>
        <script type="text/javascript">
            var js_date_format = 'dd/mm/yy';
        </script>
        <script type="text/javascript">
            var default_javascript_path = '/assets/grocery_crud/js';
            var default_css_path = '/assets/grocery_crud/css';
            var default_texteditor_path = '/assets/grocery_crud/texteditor';
            var default_theme_path = '/assets/grocery_crud/themes';
            var base_url = '/';

        </script>
        <div style="min-height: 100px;"></div>
    </div>
    <!-- /.container-fluid -->
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
        $('.Poli').addClass('active');
        });
    </script>
@endsection