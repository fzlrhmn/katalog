<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content">
		<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
		<!-- BEGIN PAGE HEADER-->
		<!-- BEGIN PAGE HEAD -->
		<div class="page-head">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Kelola Koleksi Pengguna <small>Melihat, menambah, mengubah, menghapus, dan menyimpan data koleksi pengguna.</small></h1>
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
						<div class="row">
							<div class="col-md-12">
								<?php echo validation_errors(); ?>
								<form role="form" class="form-horizontal" role="form" method="post" action="<?php echo base_url('index.php/penyusun/submit') ?>">
									<div class="form-group">
									 	<label class="col-md-3 control-label">Nama Pengguna</label>
									 	<div class="col-md-9">
									 		<input type="text" class="form-control" name="username" placeholder="Nama Pengguna" autocomplete="off">
									 	</div>
									</div>
									<div class="form-group">
									 	<label class="col-md-3 control-label">Password</label>
									 	<div class="col-md-9">
									 		<input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off">
									 	</div>
									</div>
									<div class="form-group">
									 	<label class="col-md-3 control-label">Ulangi Password</label>
									 	<div class="col-md-9">
									 		<input type="password" class="form-control" name="password2" placeholder="Repeat Password" autocomplete="off">
									 	</div>
									</div>
									<div class="form-group">
									 	<div class="col-md-9">
									 		<button type="submit" class="btn blue">Simpan</button>
									 	</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- END EXAMPLE TABLE PORTLET-->
			</div>
		</div>
		<!-- END PAGE CONTENT -->
	</div>
</div>
<!-- END CONTENT -->

<div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<form class="form-horizontal" role="form" id="submit_user">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title">Tambah Pengguna</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
					 	<label class="col-md-3 control-label">Nama Pengguna</label>
					 	<div class="col-md-9">
					 		<input type="text" class="form-control" name="username" placeholder="Nama Pengguna">
					 	</div>
					</div>
					<div class="form-group">
					 	<label class="col-md-3 control-label">Password</label>
					 	<div class="col-md-9">
					 		<input type="password" class="form-control" name="password" placeholder="password">
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

<div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<form class="form-horizontal" role="form" id="update_user">
			<input type="hidden" name="id_user" id="id_user">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title">Tambah Pengguna</h4>
				</div>
				<div class="modal-body">
					 <div class="form-group">
					 	<label class="col-md-3 control-label">Nama Pengguna</label>
					 	<div class="col-md-9">
					 		<input type="text" class="form-control" name="user_buku" id="user_buku" placeholder="Nama Pengguna">
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