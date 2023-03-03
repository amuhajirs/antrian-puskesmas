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

        <link type="text/css" rel="stylesheet"
            href="/assets/grocery_crud/themes/flexigrid/css/flexigrid.css" />

        <script src="/assets/grocery_crud/js/jquery-1.11.1.min.js"></script>
        <script
            src="/assets/grocery_crud/themes/flexigrid/js/jquery.form.js"></script>
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
        <div class="flexigrid crud-form" style='width: 100%;' data-unique-hash="dcd11edfb9b36d4b41c7880fc840a282">
            <div class="mDiv">
                <div class="ftitle">
                    <div class='ftitle-left'>
                        Record Antrian poli </div>
                    <div class='clear'></div>
                </div>
                <div title="Minimize/Maximize" class="ptogtitle">
                    <span></span>
                </div>
            </div>
            <div id='main-table-box'>

                <div class='form-div'>
                    <div class='form-field-box odd' id="id_antrian_field_box">
                        <div class='form-display-as-box' id="id_antrian_display_as_box">
                            Id antrian :
                        </div>
                        <div class='form-input-box' id="id_antrian_input_box">
                            <div id="field-id_antrian" class="readonly_label">{{ $antrian->id }}</div>
                        </div>
                        <div class='clear'></div>
                    </div>
                    <div class='form-field-box even' id="id_pasien_field_box">
                        <div class='form-display-as-box' id="id_pasien_display_as_box">
                            Nama Pasien :
                        </div>
                        <div class='form-input-box' id="id_pasien_input_box">
                            <div id="field-id_pasien" class="readonly_label">{{ $antrian->pasien->nama }}</div>
                        </div>
                        <div class='clear'></div>
                    </div>
                    <div class='form-field-box odd' id="id_poli_field_box">
                        <div class='form-display-as-box' id="id_poli_display_as_box">
                            Poli :
                        </div>
                        <div class='form-input-box' id="id_poli_input_box">
                            <div id="field-id_poli" class="readonly_label">{{ $antrian->poli->nama_poli }}</div>
                        </div>
                        <div class='clear'></div>
                    </div>
                    <div class='form-field-box even' id="no_antrian_poli_field_box">
                        <div class='form-display-as-box' id="no_antrian_poli_display_as_box">
                            No antrian poli :
                        </div>
                        <div class='form-input-box' id="no_antrian_poli_input_box">
                            <div id="field-no_antrian_poli" class="readonly_label">{{ $antrian->no_antrian }}</div>
                        </div>
                        <div class='clear'></div>
                    </div>
                    <div class='form-field-box odd' id="tgl_antrian_poli_field_box">
                        <div class='form-display-as-box' id="tgl_antrian_poli_display_as_box">
                            Tgl antrian poli :
                        </div>
                        <div class='form-input-box' id="tgl_antrian_poli_input_box">
                            <div id="field-tgl_antrian_poli" class="readonly_label">{{ \Carbon\Carbon::parse($antrian->created_at)->translatedFormat('d F Y') }}</div>
                        </div>
                        <div class='clear'></div>
                    </div>
                    <div id='report-error' class='report-div error'></div>
                    <div id='report-success' class='report-div success'></div>
                </div>
                <div class="pDiv">
                    <div class='form-button-box'>
                        <input type='button' value='Back to list' class="btn btn-large back-to-list"
                            id="cancel-button" />
                    </div>
                    <div class='form-button-box'>
                        <div class='small-loading' id='FormLoading'>Loading, updating changes...</div>
                    </div>
                    <div class='clear'></div>
                </div>

            </div>
        </div>
        <script>
            var validation_url = '/admin/antrian_poli/index/update_validation/1';
            var list_url = '/admin/antrian_poli';

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