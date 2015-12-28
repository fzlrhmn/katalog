
<div class="page-content-wrapper">
	<div class="page-content">
		<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
		
		<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
		<!-- BEGIN PAGE HEADER-->
		<!-- BEGIN PAGE HEAD -->
		<div class="page-head">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Kelola Koleksi Buku <small>Melihat, menambah, mengubah, menghapus, dan menyimpan data koleksi buku.</small></h1>
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
								<form class="form-horizontal" role="form" id="update_buku">
									<input type="hidden" name="id_buku" value="<?php echo $data[0]['id_buku'] ?>">
									<div class="form-body">
										<div class="tabbable-line">
											<ul class="nav nav-tabs ">
												<li class="active">
													<a href="#tab_15_1" data-toggle="tab">
													<i class="fa fa-info-circle"></i> Informasi Umum </a>
												</li>
												<li>
													<a href="#tab_15_2" data-toggle="tab">
													<i class="fa fa-file-text"></i> File </a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="tab_15_1">
													<div class="form-group">
														<label class="col-md-3 control-label"><strong>Nomor Buku</strong></label>
														<div class="col-md-9">
															<label class="control-label"><?php echo $data[0]['no_buku'] ?></label>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label"><strong>Judul</strong></label>
														<div class="col-md-9">
															<label class="control-label"><?php echo $data[0]['judul'] ?></label>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label"><strong>Tahun</strong></label>
														<div class="col-md-9">
															<label class="control-label"><?php echo $data[0]['tahun'] ?></label>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label"><strong>Kabupaten / Kota</strong></label>
														<div class="col-md-9">
															<label class="control-label"><?php echo $data[0]['nama_kabupaten'] ?></label>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label"><strong>Rak Buku</strong></label>
														<div class="col-md-9">
															<label class="control-label"><?php echo $data[0]['rakBuku'] ?></label>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label"><strong>Penyusun</strong></label>
														<div class="col-md-9">
															<label class="control-label"><?php echo $data[0]['penyusun_buku'] ?></label>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label"><strong>Jenis</strong></label>
														<div class="col-md-9">
															<label class="control-label"><?php echo $data[0]['jenis_buku'] ?></label>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label"><strong>Bidang</strong></label>
														<div class="col-md-9">
															<label class="control-label"><?php echo $data[0]['bidang_buku'] ?></label>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label"><strong>Deskripsi</strong></label>
														<div class="col-md-9">
															<label class="control-label"><?php echo $data[0]['deskripsi'] ?></label>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="tab_15_2">
													<div class="row">
														<div class="col-md-12">
															<table id="oChild" class="table table-striped table-bordered">
															<tr>                    
																<td>
																	<strong>Kategori</strong>
																</td>
																<td>
																	<strong>File</strong>
																</td>
															</tr>
															<?php foreach ($data[0]['files'] as $file): ?>
																<tr id="file_<?php echo $file['id'] ?>" style="">  
																	<td id="" style="">
																		<span><?php echo $file['kategori'] ?></span>   
																	</td>
																	<td>
																		<a href="<?php echo base_url('file/'.$file['file']) ?>" class="btn btn-info" target="_blank">Lihat</a>
																	</td>
																</tr>
															<?php endforeach ?>
															</table>
														</div>
													</div>
												</div>
											</div>
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