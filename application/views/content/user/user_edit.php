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
								<form role="form" class="form-horizontal" role="form" method="post" action="<?php echo base_url('index.php/penyusun/edit/submit') ?>">
									<input type="hidden" name="id_user" value="<?php echo $data[0]['id_user'] ?>">
									<div class="form-group">
									 	<label class="col-md-3 control-label">Nama Pengguna</label>
									 	<div class="col-md-9">
									 		<input type="text" class="form-control" name="username" placeholder="Nama Pengguna" autocomplete="off" value="<?php echo $data[0]['username'] ?>">
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