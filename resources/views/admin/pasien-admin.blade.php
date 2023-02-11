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
					<a href="/admin/dashboard"><i
							class="fa fa-dashboard"></i> Dashboard</a>
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
	<link type="text/css" rel="stylesheet"
		href="/assets/grocery_crud/css/jquery_plugins/fancybox/jquery.fancybox.css" />
	<link type="text/css" rel="stylesheet"
		href="/assets/grocery_crud/css/ui/simple/jquery-ui-1.10.1.custom.min.css" />

	<script
		src="/assets/grocery_crud/js/jquery-1.11.1.min.js"></script>
	<script
		src="/assets/grocery_crud/js/jquery_plugins/jquery.noty.js"></script>
	<script
		src="/assets/grocery_crud/js/jquery_plugins/config/jquery.noty.config.js"></script>
	<script
		src="/assets/grocery_crud/js/common/lazyload-min.js"></script>
	<script src="/assets/grocery_crud/js/common/list.js"></script>
	<script
		src="/assets/grocery_crud/themes/flexigrid/js/cookies.js"></script>
	<script
		src="/assets/grocery_crud/themes/flexigrid/js/flexigrid.js"></script>
	<script
		src="/assets/grocery_crud/js/jquery_plugins/jquery.form.min.js"></script>
	<script
		src="/assets/grocery_crud/js/jquery_plugins/jquery.numeric.min.js"></script>
	<script
		src="/assets/grocery_crud/themes/flexigrid/js/jquery.printElement.min.js"></script>
	<script
		src="/assets/grocery_crud/js/jquery_plugins/jquery.fancybox-1.3.4.js"></script>
	<script
		src="/assets/grocery_crud/js/jquery_plugins/jquery.easing-1.3.pack.js"></script>
	<script
		src="/assets/grocery_crud/js/jquery_plugins/ui/jquery-ui-1.10.3.custom.min.js"></script>
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
	<script type="text/javascript">
		var dialog_forms = '';

	</script>
	<script type='text/javascript'>
		var base_url = '/';

		var subject = 'Pasien';
		var ajax_list_info_url = '/index.php/admin/pasien/index/ajax_list_info';
		var unique_hash = 'cd9bbe3e5b7499c1866f9fe1b9b0fa82';

		var message_alert_delete = "Are you sure that you want to delete this record?";

	</script>
	<div id='list-report-error' class='report-div error'></div>
	<div id='list-report-success' class='report-div success report-list'></div>
	<div class="flexigrid" style='width: 100%;' data-unique-hash="cd9bbe3e5b7499c1866f9fe1b9b0fa82">
		<div id="hidden-operations" class="hidden-operations"></div>
		<div class="mDiv">
			<div class="ftitle">
				&nbsp;
			</div>
			<div title="Minimize/Maximize" class="ptogtitle">
				<span></span>
			</div>
		</div>
		<div id='main-table-box' class="main-table-box">

			<div class="tDiv">
				<div class="tDiv2">
					<a href='/admin/pasien/create'
						title='Add Pasien' class='add-anchor add_button'>
						<div class="fbutton">
							<div>
								<span class="add">Add Pasien</span>
							</div>
						</div>
					</a>
					<div class="btnseparator">
					</div>
				</div>
				<div class="tDiv3">
					<a class="export-anchor"
						data-url="/index.php/admin/pasien/index/export"
						target="_blank">
						<div class="fbutton">
							<div>
								<span class="export">Export</span>
							</div>
						</div>
					</a>
					<div class="btnseparator"></div>
					<a class="print-anchor"
						data-url="/index.php/admin/pasien/index/print">
						<div class="fbutton">
							<div>
								<span class="print">Print</span>
							</div>
						</div>
					</a>
					<div class="btnseparator"></div>
				</div>
				<div class='clear'></div>
			</div>

			<div id='ajax_list' class="ajax_list">
				<div class="bDiv">
					<table cellspacing="0" cellpadding="0" border="0" id="flex1">
						<thead>
							<tr class='hDiv'>
								<th width='10%'>
									<div class="text-left field-sorting " rel='no_identitas'>
										No identitas </div>
								</th>
								<th width='10%'>
									<div class="text-left field-sorting " rel='nama'>
										Nama </div>
								</th>
								<th width='10%'>
									<div class="text-left field-sorting " rel='jenis_kelamin'>
										Jenis kelamin </div>
								</th>
								<th width='10%'>
									<div class="text-left field-sorting " rel='tgl_lahir'>
										Tgl lahir </div>
								</th>
								<th width='10%'>
									<div class="text-left field-sorting " rel='alamat'>
										Alamat </div>
								</th>
								<th width='10%'>
									<div class="text-left field-sorting " rel='no_telp'>
										No telp </div>
								</th>
								<th width='10%'>
									<div class="text-left field-sorting " rel='username'>
										Username </div>
								</th>
								<th width='10%'>
									<div class="text-left field-sorting " rel='password'>
										Password </div>
								</th>
								<th align="left" abbr="tools" axis="col1" class="" width='20%'>
									<div class="text-right">
										Actions </div>
								</th>
							</tr>
						</thead>
						<tbody>

							@foreach ($pasiens as $index=>$pasien)
							<tr class="{{ ($index)%2 == 1 ? 'erow' : ''}}">
								<td width='10%' class=''>
									<div class='text-left'>{{ $pasien->no_identitas }}</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>{{ $pasien->nama }}</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>{{ $pasien->jenis_kelamin }}</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>{{ $pasien->tgl_lahir }}</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>
										{{ $pasien->alamat }}
									</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>{{ $pasien->no_telp }}</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>{{ $pasien->username }}</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>{{ $pasien->password }}</div>
								</td>
								<td align="left" width='20%'>
									<div class='tools'>
										<a href='/admin/pasien/{{ $pasien->id }}/delete/'
											title='Delete Pasien' class="delete-row">
											<span class='delete-icon'></span>
										</a>
										<a href='/admin/pasien/{{ $pasien->id }}/edit/'
											title='Edit Pasien' class="edit_button"><span
												class='edit-icon'></span></a>
										<a href='/admin/pasien/{{ $pasien->id }}'
											title='View Pasien' class="edit_button"><span
												class='read-icon'></span></a>

										<div class='clear'></div>
									</div>
								</td>
							</tr>
							@endforeach

						</tbody>
					</table>
				</div>

			</div>
			<form action="/index.php/admin/pasien/index/ajax_list"
				method="post" id="filtering_form" class="filtering_form" autocomplete="off"
				data-ajax-list-info-url="/index.php/admin/pasien/index/ajax_list_info"
				accept-charset="utf-8">
				<div class="sDiv quickSearchBox" id='quickSearchBox'>
					<div class="sDiv2">
						Search: <input type="text" class="qsbsearch_fieldox search_text" name="search_text"
							size="30" id='search_text'>
						<select name="search_field" id="search_field">
							<option value="">Search all</option>
							<option value="no_identitas">No identitas&nbsp;&nbsp;</option>
							<option value="nama">Nama&nbsp;&nbsp;</option>
							<option value="jenis_kelamin">Jenis kelamin&nbsp;&nbsp;</option>
							<option value="tgl_lahir">Tgl lahir&nbsp;&nbsp;</option>
							<option value="alamat">Alamat&nbsp;&nbsp;</option>
							<option value="no_telp">No telp&nbsp;&nbsp;</option>
							<option value="username">Username&nbsp;&nbsp;</option>
							<option value="password">Password&nbsp;&nbsp;</option>
						</select>
						<input type="button" value="Search" class="crud_search" id='crud_search'>
					</div>
					<div class='search-div-clear-button'>
						<input type="button" value="Clear filtering" id='search_clear' class="search_clear">
					</div>
				</div>
				<div class="pDiv">
					<div class="pDiv2">
						<div class="pGroup">
							<span class="pcontrol">
								Show <select name="per_page" id='per_page' class="per_page">
									<option value="10" selected="selected">10&nbsp;&nbsp;</option>
									<option value="25">25&nbsp;&nbsp;</option>
									<option value="50">50&nbsp;&nbsp;</option>
									<option value="100">100&nbsp;&nbsp;</option>
								</select>
								entries <input type='hidden' name='order_by[0]' id='hidden-sorting'
									class='hidden-sorting' value='' />
								<input type='hidden' name='order_by[1]' id='hidden-ordering'
									class='hidden-ordering' value='' />
							</span>
						</div>
						<div class="btnseparator">
						</div>
						<div class="pGroup">
							<div class="pFirst pButton first-button">
								<span></span>
							</div>
							<div class="pPrev pButton prev-button">
								<span></span>
							</div>
						</div>
						<div class="btnseparator">
						</div>
						<div class="pGroup">
							<span class="pcontrol">Page <input name='page' type="text" value="1" size="4"
									id='crud_page' class="crud_page">
								of <span id='last-page-number' class="last-page-number">2</span></span>
						</div>
						<div class="btnseparator">
						</div>
						<div class="pGroup">
							<div class="pNext pButton next-button">
								<span></span>
							</div>
							<div class="pLast pButton last-button">
								<span></span>
							</div>
						</div>
						<div class="btnseparator">
						</div>
						<div class="pGroup">
							<div class="pReload pButton ajax_refresh_and_loading"
								id='ajax_refresh_and_loading'>
								<span></span>
							</div>
						</div>
						<div class="btnseparator">
						</div>
						<div class="pGroup">
							<span class="pPageStat">
								Displaying <span id='page-starts-from' class='page-starts-from'>1</span> to
								<span id='page-ends-to' class='page-ends-to'>10</span> of <span
									id='total_items' class='total_items'>17</span> items </span>
						</div>
					</div>
					<div style="clear: both;">
					</div>
				</div>
			</form>
		</div>
	</div>
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
	$(document).ready(function () {
		$('.Pasien').addClass('active');
	});
</script>
<!-- Bootstrap Core JavaScript -->
@endsection