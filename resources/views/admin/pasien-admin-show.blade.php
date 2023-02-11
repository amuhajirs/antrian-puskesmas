@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Admin - Pasien <small></small>
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
        <div class="flexigrid crud-form" style='width: 100%;' data-unique-hash="cd9bbe3e5b7499c1866f9fe1b9b0fa82">
            <div class="mDiv">
                <div class="ftitle">
                    <div class='ftitle-left'>
                        Record Pasien </div>
                    <div class='clear'></div>
                </div>
                <div title="Minimize/Maximize" class="ptogtitle">
                    <span></span>
                </div>
            </div>
            <div id='main-table-box'>
                <form action="/index.php/admin/pasien/index/read/1" method="post"
                    id="crudForm" enctype="multipart/form-data" accept-charset="utf-8">
                    <div class='form-div'>
                        <div class='form-field-box odd' id="no_identitas_field_box">
                            <div class='form-display-as-box' id="no_identitas_display_as_box">
                                No identitas :
                            </div>
                            <div class='form-input-box' id="no_identitas_input_box">
                                <div id="field-no_identitas" class="readonly_label">{{ $pasien->no_identitas }}</div>
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class='form-field-box even' id="nama_field_box">
                            <div class='form-display-as-box' id="nama_display_as_box">
                                Nama :
                            </div>
                            <div class='form-input-box' id="nama_input_box">
                                <div id="field-nama" class="readonly_label">{{ $pasien->nama }}</div>
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class='form-field-box odd' id="jenis_kelamin_field_box">
                            <div class='form-display-as-box' id="jenis_kelamin_display_as_box">
                                Jenis kelamin :
                            </div>
                            <div class='form-input-box' id="jenis_kelamin_input_box">
                                <div id="field-jenis_kelamin" class="readonly_label">{{ $pasien->jenis_kelamin }}</div>
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class='form-field-box even' id="tgl_lahir_field_box">
                            <div class='form-display-as-box' id="tgl_lahir_display_as_box">
                                Tgl lahir :
                            </div>
                            <div class='form-input-box' id="tgl_lahir_input_box">
                                <div id="field-tgl_lahir" class="readonly_label">{{ $pasien->tgl_lahir }}</div>
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class='form-field-box odd' id="alamat_field_box">
                            <div class='form-display-as-box' id="alamat_display_as_box">
                                Alamat :
                            </div>
                            <div class='form-input-box' id="alamat_input_box">
                                <div id="field-alamat" class="readonly_label">
                                    <p>
                                        {{ $pasien->alamat }}</p>
                                </div>
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class='form-field-box even' id="no_telp_field_box">
                            <div class='form-display-as-box' id="no_telp_display_as_box">
                                No telp :
                            </div>
                            <div class='form-input-box' id="no_telp_input_box">
                                <div id="field-no_telp" class="readonly_label">{{ $pasien->no_telp }}</div>
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class='form-field-box odd' id="username_field_box">
                            <div class='form-display-as-box' id="username_display_as_box">
                                Username :
                            </div>
                            <div class='form-input-box' id="username_input_box">
                                <div id="field-username" class="readonly_label">{{ $pasien->username }}</div>
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class='form-field-box even' id="password_field_box">
                            <div class='form-display-as-box' id="password_display_as_box">
                                Password :
                            </div>
                            <div class='form-input-box' id="password_input_box">
                                <div id="field-password" class="readonly_label">{{ $pasien->password }}</div>
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
                </form>
            </div>
        </div>
        <script>
            var validation_url = '/admin/pasien/index/update_validation/1';
            var list_url = '/admin/pasien/';

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
        $('.Pasien').addClass('active');
        });
    </script>
@endsection