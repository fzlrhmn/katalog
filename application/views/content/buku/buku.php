
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
						<div class="table-toolbar">
							<div class="row">
								<div class="col-md-6">
									<div class="btn-group">
										<button class="btn green" data-toggle="modal" data-target="#add_buku">
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
						<table class="table table-striped table-hover table-bordered" id="tabel_buku">
						<thead>
						<tr>
							<th>
								 No
							</th>
							<th>
								 No. Buku
							</th>
							<th>
								 Judul
							</th>
							<th>
								 Penyusun
							</th>
							<th>
								 Tahun
							</th>
							<th>
								 Lokasi
							</th>
							<th>
								 Jenis
							</th>
							<th>
								 Bidang
							</th>
							<th>
								 Rak Buku
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

<div class="modal fade" id="add_buku" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">Tambah Buku</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<form class="form-horizontal" role="form" id="submit_buku">
							<div class="form-body">
								<div class="tabbable-line">
									<ul class="nav nav-tabs ">
										<li class="active">
											<a href="#tab_15_1" data-toggle="tab">
											<i class="fa fa-info-circle"></i> Informasi Umum </a>
										</li>
										<li>
											<a href="#tab_15_2" data-toggle="tab">
											<i class="fa fa-file-text"></i> Upload File </a>
										</li>
										<li>
											<a href="#tab_15_3" data-toggle="tab">
											<i class="fa fa-check-circle"></i> Action </a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="tab_15_1">
											<div class="form-group">
												<label class="col-md-3 control-label">Nomor Buku</label>
												<div class="col-md-9">
													<input type="text" class="form-control" name="no_buku" placeholder="Nomor Buku">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Judul</label>
												<div class="col-md-9">
													<input type="text" class="form-control" name="judul" placeholder="Judul Buku">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Tahun</label>
												<div class="col-md-9">
													<input type="text" class="form-control" name="tahun" placeholder="Tahun">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Kabupaten / Kota</label>
												<div class="col-md-9">
													<select class="form-control select2" name="id_kabupaten">
														<option value="0">-- Pilih Kabupaten --</option>
														<?php foreach ($kabupaten as $item): ?>
															<option value="<?php echo $item['id_kabupaten'] ?>"><?php echo $item['nama_kabupaten'] ?></option>
														<?php endforeach ?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Rak Buku</label>
												<div class="col-md-9">
													<input type="text" class="form-control" name="rakBuku" placeholder="Rak Buku">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Penyusun</label>
												<div class="col-md-9">
													<select class="form-control select2" name="penyusun">
														<option value="0">-- Pilih Penyusun --</option>
														<?php foreach ($user as $item): ?>
															<option value="<?php echo $item['id_user'] ?>"><?php echo $item['username'] ?></option>
														<?php endforeach ?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Jenis</label>
												<div class="col-md-9">
													<select class="form-control select2" name="jenis">
														<option value="0">-- Pilih Jenis --</option>
														<?php foreach ($jenis as $item): ?>
															<option value="<?php echo $item['id_jenis'] ?>"><?php echo $item['jenis_buku'] ?></option>
														<?php endforeach ?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Bidang</label>
												<div class="col-md-9">
													<select class="form-control select2" name="bidang">
														<option value="0">-- Pilih Bidang --</option>
														<?php foreach ($bidang as $item): ?>
															<option value="<?php echo $item['id_bidang'] ?>"><?php echo $item['bidang'] ?></option>
														<?php endforeach ?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Deskripsi</label>
												<div class="col-md-9">
													<textarea class="form-control" name="deskripsi" rows="3"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Tampilkan di depan? </label>
												<div class="col-md-9">
													<div class="icheck-list">
														<label>
														<input type="radio" name="front" value="1" class="icheck"> Ya</label>
														<label>
														<input type="radio" name="front" value="0" checked class="icheck"> Tidak</label>
													</div>
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
														<td width="5%">
															<button tabindex="8" type="button" name="imgSU" title="Add The Grade" class="btn btn-primary" id="add-new">Add New</button>
														</td>
													</tr>
													<tr id="DocumentRow" class="file-row">  
														<td id="" style="">
															<select name="kategori[]" class="form-control">
																<?php foreach ($kategori as $item): ?>
																	<option value="<?php echo $item['id'] ?>"><?php echo $item['nama_kategori'] ?></option>
																<?php endforeach ?>
															</select>   
														</td>
														<td>
															<input type="file" name="file_upload[]">
														</td>
														<td>
															<button type="button" class="btn btn-danger delete" onclick="deleteRow()">Delete</button>
														</td>
													</tr>
													</table>
												</div>
											</div>
											<!-- <div class="form-group">
												<label for="exampleInputFile" class="col-md-3 control-label">Cover</label>
												<div class="col-md-9">
													<input type="file" id="cover" name="cover">
												</div>
											</div>
											<div class="form-group">
												<label for="exampleInputFile" class="col-md-3 control-label">File PDF</label>
												<div class="col-md-9">
													<input type="file" id="cover" name="file">
												</div>
											</div> -->
										</div>
										<div class="tab-pane" id="tab_15_3">
											<div class="form-actions">
												<div class="row">
													<div class="col-md-9">
														<button type="submit" class="btn green">Submit</button>
													</div>
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
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal