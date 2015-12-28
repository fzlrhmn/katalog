<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content">
		<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
		
		<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
		<!-- BEGIN PAGE HEADER-->
		<!-- BEGIN PAGE HEAD -->
		<div class="page-head">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Kelola Bidang Buku <small>Melihat, menambah, mengubah, menghapus, dan menyimpan data koleksi bidang.</small></h1>
			</div>
			<!-- END PAGE TITLE -->
		</div>
		<!-- END PAGE HEAD -->
		<!-- END PAGE HEADER-->
		<!-- BEGIN PAGE CONTENT-->
		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN EXAMPLE TABLE PORTLET-->
				<div class="portlet box blue">
					<div class="portlet-body">
						<div class="table-toolbar">
							<div class="row">
								<div class="col-md-6">
									<div class="btn-group">
										<button class="btn green" data-toggle="modal" data-target="#add_bidang">
										Add New <i class="fa fa-plus"></i>
										</button>
									</div>
								</div>
								<!-- <div class="col-md-6">
									<div class="btn-group pull-right">
										<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
										</button>
										<ul class="dropdown-menu pull-right">
											<li>
												<a href="javascript:;">
												Print </a>
											</li>
											<li>
												<a href="javascript:;">
												Save as PDF </a>
											</li>
											<li>
												<a href="javascript:;">
												Export to Excel </a>
											</li>
										</ul>
									</div>
								</div> -->
							</div>
						</div>
						<table class="table table-striped table-hover table-bordered" id="tabel_bidang">
						<thead>
						<tr>
							<th>
								 No
							</th>
							<th>
								 Bidang
							</th>
							<th>
								 Aksi
							</th>
						</tr>
						</thead>
						<tbody>

						</tbody>
						</table>
					</div>
				</div>
				<!-- END EXAMPLE TABLE PORTLET-->
			</div>
		</div>
		<!-- END PAGE CONTENT -->
	</div>
</div>
<!-- END CONTENT -->


<div class="modal fade" id="add_bidang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<form class="form-horizontal" role="form" id="submit_bidang">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title">Tambah Bidang</h4>
				</div>
				<div class="modal-body">
					 <div class="form-group">
					 	<label class="col-md-3 control-label">Nama Bidang</label>
					 	<div class="col-md-9">
					 		<input type="text" class="form-control" name="bidang" placeholder="Nama Bidang">
					 	</div>
					 </div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn blue">Simpan</button>
					<button type="button" class="btn default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</form>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="edit_bidang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<form class="form-horizontal" role="form" id="update_bidang">
			<input type="hidden" name="id_bidang" id="id_bidang">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title">Edit Bidang</h4>
				</div>
				<div class="modal-body">
					 <div class="form-group">
					 	<label class="col-md-3 control-label">Nama Bidang</label>
					 	<div class="col-md-9">
					 		<input type="text" class="form-control" id="bidang" name="bidang" placeholder="Nama Bidang">
					 	</div>
					 </div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn blue">Simpan</button>
					<button type="button" class="btn default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</form>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->