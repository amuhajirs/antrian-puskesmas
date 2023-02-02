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
					<a href='/index.php/admin/pasien/index/add'
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

							<tr>
								<td width='10%' class=''>
									<div class='text-left'>3318087776665553</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>evi</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>Perempuan</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>16/07/2000</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>
										Desa kajen
									</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>082199252530</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>evi</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>evi</div>
								</td>
								<td align="left" width='20%'>
									<div class='tools'>
										<a href='/index.php/admin/pasien/index/delete/1'
											title='Delete Pasien' class="delete-row">
											<span class='delete-icon'></span>
										</a>
										<a href='/index.php/admin/pasien/index/edit/1'
											title='Edit Pasien' class="edit_button"><span
												class='edit-icon'></span></a>
										<a href='/index.php/admin/pasien/index/read/1'
											title='View Pasien' class="edit_button"><span
												class='read-icon'></span></a>

										<div class='clear'></div>
									</div>
								</td>
							</tr>

							<tr class="erow">
								<td width='10%' class=''>
									<div class='text-left'>3318087776665554</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>rafly</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>Laki-Laki</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>03/04/1998</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>
										Jl. Merdeka
									</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>08587654323</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>raff</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>raff</div>
								</td>
								<td align="left" width='20%'>
									<div class='tools'>
										<a href='/index.php/admin/pasien/index/delete/4'
											title='Delete Pasien' class="delete-row">
											<span class='delete-icon'></span>
										</a>
										<a href='/index.php/admin/pasien/index/edit/4'
											title='Edit Pasien' class="edit_button"><span
												class='edit-icon'></span></a>
										<a href='/index.php/admin/pasien/index/read/4'
											title='View Pasien' class="edit_button"><span
												class='read-icon'></span></a>

										<div class='clear'></div>
									</div>
								</td>
							</tr>

							<tr>
								<td width='10%' class=''>
									<div class='text-left'>3318087776665555</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>dwi</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>Perempuan</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>22/03/1999</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>
										Jl Bunga
									</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>09584433221</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>dwi</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>dwi</div>
								</td>
								<td align="left" width='20%'>
									<div class='tools'>
										<a href='/index.php/admin/pasien/index/delete/5'
											title='Delete Pasien' class="delete-row">
											<span class='delete-icon'></span>
										</a>
										<a href='/index.php/admin/pasien/index/edit/5'
											title='Edit Pasien' class="edit_button"><span
												class='edit-icon'></span></a>
										<a href='/index.php/admin/pasien/index/read/5'
											title='View Pasien' class="edit_button"><span
												class='read-icon'></span></a>

										<div class='clear'></div>
									</div>
								</td>
							</tr>

							<tr class="erow">
								<td width='10%' class=''>
									<div class='text-left'>3318087776665556</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>Aisyah</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>Perempuan</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>11/06/2001</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>
										Jl. Manis
									</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>0838222445</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>aisah</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>aisah</div>
								</td>
								<td align="left" width='20%'>
									<div class='tools'>
										<a href='/index.php/admin/pasien/index/delete/6'
											title='Delete Pasien' class="delete-row">
											<span class='delete-icon'></span>
										</a>
										<a href='/index.php/admin/pasien/index/edit/6'
											title='Edit Pasien' class="edit_button"><span
												class='edit-icon'></span></a>
										<a href='/index.php/admin/pasien/index/read/6'
											title='View Pasien' class="edit_button"><span
												class='read-icon'></span></a>

										<div class='clear'></div>
									</div>
								</td>
							</tr>

							<tr>
								<td width='10%' class=''>
									<div class='text-left'>3318087776665557</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>Simon</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>Laki-Laki</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>06/02/1997</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>
										Jl. Mawar
									</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>081319898213</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>simon</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>simon</div>
								</td>
								<td align="left" width='20%'>
									<div class='tools'>
										<a href='/index.php/admin/pasien/index/delete/7'
											title='Delete Pasien' class="delete-row">
											<span class='delete-icon'></span>
										</a>
										<a href='/index.php/admin/pasien/index/edit/7'
											title='Edit Pasien' class="edit_button"><span
												class='edit-icon'></span></a>
										<a href='/index.php/admin/pasien/index/read/7'
											title='View Pasien' class="edit_button"><span
												class='read-icon'></span></a>

										<div class='clear'></div>
									</div>
								</td>
							</tr>

							<tr class="erow">
								<td width='10%' class=''>
									<div class='text-left'>3318087776660002</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>Putri</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>Perempuan</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>18/06/2003</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>
										Jl. Merpati
									</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>081994321522</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>putri</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>putri</div>
								</td>
								<td align="left" width='20%'>
									<div class='tools'>
										<a href='/index.php/admin/pasien/index/delete/8'
											title='Delete Pasien' class="delete-row">
											<span class='delete-icon'></span>
										</a>
										<a href='/index.php/admin/pasien/index/edit/8'
											title='Edit Pasien' class="edit_button"><span
												class='edit-icon'></span></a>
										<a href='/index.php/admin/pasien/index/read/8'
											title='View Pasien' class="edit_button"><span
												class='read-icon'></span></a>

										<div class='clear'></div>
									</div>
								</td>
							</tr>

							<tr>
								<td width='10%' class=''>
									<div class='text-left'>3318087776660001</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>Violita</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>Perempuan</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>02/09/2003</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>
										Jl Kuningan
									</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>08225488006</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>vio</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>vio</div>
								</td>
								<td align="left" width='20%'>
									<div class='tools'>
										<a href='/index.php/admin/pasien/index/delete/9'
											title='Delete Pasien' class="delete-row">
											<span class='delete-icon'></span>
										</a>
										<a href='/index.php/admin/pasien/index/edit/9'
											title='Edit Pasien' class="edit_button"><span
												class='edit-icon'></span></a>
										<a href='/index.php/admin/pasien/index/read/9'
											title='View Pasien' class="edit_button"><span
												class='read-icon'></span></a>

										<div class='clear'></div>
									</div>
								</td>
							</tr>

							<tr class="erow">
								<td width='10%' class=''>
									<div class='text-left'>3318087776660006</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>Yordan</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>Laki-Laki</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>02/11/1995</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>
										Jl. Setia
									</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>081316552245</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>yordan</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>yordan</div>
								</td>
								<td align="left" width='20%'>
									<div class='tools'>
										<a href='/index.php/admin/pasien/index/delete/10'
											title='Delete Pasien' class="delete-row">
											<span class='delete-icon'></span>
										</a>
										<a href='/index.php/admin/pasien/index/edit/10'
											title='Edit Pasien' class="edit_button"><span
												class='edit-icon'></span></a>
										<a href='/index.php/admin/pasien/index/read/10'
											title='View Pasien' class="edit_button"><span
												class='read-icon'></span></a>

										<div class='clear'></div>
									</div>
								</td>
							</tr>

							<tr>
								<td width='10%' class=''>
									<div class='text-left'>3318087776660003</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>silva</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>Perempuan</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>04/01/1998</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>
										Jl. Anggur
									</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>081654432349</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>silvi</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>silvi</div>
								</td>
								<td align="left" width='20%'>
									<div class='tools'>
										<a href='/index.php/admin/pasien/index/delete/11'
											title='Delete Pasien' class="delete-row">
											<span class='delete-icon'></span>
										</a>
										<a href='/index.php/admin/pasien/index/edit/11'
											title='Edit Pasien' class="edit_button"><span
												class='edit-icon'></span></a>
										<a href='/index.php/admin/pasien/index/read/11'
											title='View Pasien' class="edit_button"><span
												class='read-icon'></span></a>

										<div class='clear'></div>
									</div>
								</td>
							</tr>

							<tr class="erow">
								<td width='10%' class=''>
									<div class='text-left'>3318087776660001</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>Lutfia</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>Perempuan</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>05/03/2002</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>
										Jl.merdeka
									</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>082199252530</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>lutfia</div>
								</td>
								<td width='10%' class=''>
									<div class='text-left'>lutfia</div>
								</td>
								<td align="left" width='20%'>
									<div class='tools'>
										<a href='/index.php/admin/pasien/index/delete/12'
											title='Delete Pasien' class="delete-row">
											<span class='delete-icon'></span>
										</a>
										<a href='/index.php/admin/pasien/index/edit/12'
											title='Edit Pasien' class="edit_button"><span
												class='edit-icon'></span></a>
										<a href='/index.php/admin/pasien/index/read/12'
											title='View Pasien' class="edit_button"><span
												class='read-icon'></span></a>

										<div class='clear'></div>
									</div>
								</td>
							</tr>

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