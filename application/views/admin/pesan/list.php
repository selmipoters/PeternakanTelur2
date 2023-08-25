<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4 class="page-title">Pesan Dari Pengunjung Peternakan Telur Berbasis IOT</h4> </div>
                <!-- /.col-lg-12 -->
            </div>
<?php $i = 1; foreach($pesan as $pesan) { ?>
<div class="row">
                <!-- Left sidebar -->
                <div class="col-md-12">
                    <div class="white-box" style="height: 350px">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mail_listing">
                                <div class="media m-b-30 p-t-20">
                                    <h4 class="font-bold m-t-0">Pesan Dari Pengunjung</h4>
                                    <hr>
                                    <a class="pull-left" href="#"> <img class="media-object thumb-sm img-circle" src="<?php echo base_url() ?>assets/admin/images/profilepic.png" alt=""> </a>
                                    <div class="media-body"> <span class="media-meta pull-right"><?php
              $tanggal = date("d F Y",strtotime($pesan->pesan_tanggal));
              echo $tanggal;?></span>
                                        <h4 class="text-danger m-0"><?php echo $pesan->pesan_nama ?></h4> <small class="text-muted">From: <?php echo $pesan->pesan_email ?></small> </div>
                                </div>
                                <p><?php echo $pesan->pesan_isi ?></p>
                                
                                <hr>
                                                                <?php 
                                                                if ($pesan->status_pesan == 'publish'){
                                                                ?><a href="<?php echo base_url('admin/pesan/simpan_edit/').$pesan->pesan_id ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Archive</a><?php } ?>
        <a href="<?php echo base_url('admin/pesan/hapus/').$pesan->pesan_id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Ingin Menghapus data ini ? ')"><i class="fa fa-trash-o"></i> Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
						<?php } ?>
