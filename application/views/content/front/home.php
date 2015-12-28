<!-- Begin #carousel-section -->
<section id="carousel-section" class="section-global-wrapper"> 
    <div class="container-fluid-kamn">
        <div class="row">
            <div id="carousel" class="carousel slide">
    
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <!-- Begin Slide 1 -->
                    <div class="item active">
                        <div id="test">
                            <img src="<?php echo base_url(); ?>assets/front/img/slider/book_bw.jpg"alt="">
                        </div>
                        <div class="carousel-caption">
                            <?php echo $prakata ?>
                        </div>
                    </div>
                    <div class="item active">
                        <div id="test">
                            <img src="<?php echo base_url(); ?>assets/front/img/slider/book_bw.jpg"alt="">
                        </div>
                        <div class="carousel-caption">
                            <?php echo $prakata ?>
                        </div>
                    </div>
                    <!-- End Slide 1 -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End #carousel-section -->


<!-- Begin #services-section -->
<section id="services" class="services-section section-global-wrapper">
    <div class="services-header">
        <h3 class="services-header-title">Katalog Buku</h3>
    </div>
    <div class="container-fluid">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <form role="form" id="form_cari">
                <h4>Advance Search</h4><hr>
                <input type="text" class="form-control input-inline input-medium" name="no_buku" placeholder="Nomor Kegiatan"><br>
                <input type="text" class="form-control input-inline input-medium" name="judul" placeholder="Judul Kegiatan"><br>
                <select class="form-control" name="id_kabupaten">
                    <option value="0">-- Pilih Kabupaten --</option>
                    <?php foreach ($kabupaten as $item): ?>
                        <option value="<?php echo $item['id_kabupaten'] ?>"><?php echo $item['nama_kabupaten'] ?></option>
                    <?php endforeach ?>
                </select><br>
                <select class="form-control" name="penyusun">
                    <option value="0">-- Pilih Penyusun --</option>
                    <?php foreach ($user as $item): ?>
                        <option value="<?php echo $item['id_user'] ?>"><?php echo $item['username'] ?></option>
                    <?php endforeach ?>
                </select><br>
                <select class="form-control" name="jenis">
                    <option value="0">-- Pilih Jenis --</option>
                    <?php foreach ($jenis as $item): ?>
                        <option value="<?php echo $item['id_jenis'] ?>"><?php echo $item['jenis_buku'] ?></option>
                    <?php endforeach ?>
                </select><br>
                <select class="form-control" name="bidang">
                    <option value="0">-- Pilih Bidang --</option>
                    <?php foreach ($bidang as $item): ?>
                        <option value="<?php echo $item['id_bidang'] ?>"><?php echo $item['bidang'] ?></option>
                    <?php endforeach ?>
                </select><br>
                <button class="btn btn-md btn-success" onclick="init_front()" type="button"><i class="fa fa-refresh"></i> Reset</button>
                <button class="btn btn-md btn-info" type="submit"><i class="fa fa-search"></i> Cari</button>
            </form>
        </div>

        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <!-- Begin Services Row 1 -->
            <div class="row services-row services-row-head services-row-1" id="rak_buku">
                
        
                <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="services-group wow animated fadeInLeft" data-wow-offset="40">
                        <img src="<?php echo base_url(); ?>uploads/cover2.jpg"/>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="services-group wow animated fadeInLeft" data-wow-offset="40">
                        <img src="<?php echo base_url(); ?>uploads/cover3.jpg"/>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="services-group wow animated fadeInLeft" data-wow-offset="40">
                        <img src="<?php echo base_url(); ?>uploads/cover4.jpg"/>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>
                </div>

                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="services-group wow animated zoomIn" data-wow-offset="40">
                        <img src="<?php echo base_url(); ?>uploads/cover5.png"/>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>
                </div>
        
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="services-group wow animated fadeInRight" data-wow-offset="40">
                        <img src="<?php echo base_url(); ?>uploads/cover1.jpg"/>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>        
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="services-group wow animated fadeInLeft" data-wow-offset="40">
                        <img src="<?php echo base_url(); ?>uploads/cover1.jpg"/>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>
                </div>
        
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="services-group wow animated fadeInLeft" data-wow-offset="40">
                        <img src="<?php echo base_url(); ?>uploads/cover2.jpg"/>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>
                </div> -->
            </div>
            <!-- End Serivces Row 1 -->
      
        </div>
    </div>      
</section>
<!-- End #services-section -->

<div class="modal fade" id="detail_buku" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Detail Pekerjaan</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-md-3"><strong>No Kegiatan</strong></label>
                                <span class="col-md-9" id="no_buku"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-md-3"><strong>Nama Kegiatan</strong></label>
                                <span class="col-md-9" id="judul"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-md-3"><strong>Rak Buku</strong></label>
                                <span class="col-md-9" id="rakBuku"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-md-3"><strong>Kabupaten</strong></label>
                                <span class="col-md-9" id="nama_kabupaten"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-md-3"><strong>Bidang</strong></label>
                                <span class="col-md-9" id="bidang_buku"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-md-3"><strong>Jenis</strong></label>
                                <span class="col-md-9" id="jenis_buku"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-md-3"><strong>Penyusun</strong></label>
                                <span class="col-md-9" id="penyusun_buku"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-md-3"><strong>Deskripsi</strong></label>
                                <span class="col-md-9" id="deskripsi"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-hover table-bordered" id="tabel_buku">
                        <thead>
                        <tr>
                            <th>
                                No
                            </th>
                            <th>
                                Kategori File
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
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>