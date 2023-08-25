	  <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4 class="page-title">Data Hasil Produksi Peternakan Telur Berbasis IOT</h4> </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
					<script>   
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
</script>
          <div id="notifications"><?php echo $this->session->flashdata('msg_list'); ?></div> 
                        <p>
						<a href="<?php echo base_url('admin/peternakan/tambah') ?>" class="btn btn-success btn-lg">
							<i class="fa fa-plus"></i> Tambah Hasil Peternakan
						</a>
						<a data-toggle="modal" data-target="#cetak" class="btn pull-right btn-info btn-md"> <i class="fa fa-print"></i> Cetak Laporan Data Peternakan
	</a>
						</p>
                        <div class="table-responsive">
                            <table id="example23" class="display nowrap" cellspacing="0" width="100%">
							<thead>
		<tr>
		  <th>NO</th>
		  <th>Kode Telur</th>
		  <th>Kualitas Telur</th>
		  <th>Tanggal Masuk</th>
		  <th>AKSI</th>
		</tr>
	</thead>
	<tbody>
		<?php $i = 1; foreach($peternakan as $peternakan) { ?>
		<tr>
		  <td><?php echo $i ?></td>
		  <td><?php echo $peternakan->kd_telur ?></td>
		  <td><?php echo $peternakan->kualitas_telur ?></td>
		  <td><?php echo date('d F Y', strtotime($peternakan->tanggal_masuk)) ?></td>
		  <td>
		  	<a href="<?php echo base_url('admin/peternakan/edit/').$peternakan->kd_telur ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
		  	<a href="<?php echo base_url('admin/peternakan/hapus/').$peternakan->kd_telur ?>" class="btn btn-danger btn-xs" onclick="validasihapus()"><i class="fa fa-trash-o"></i> Hapus</a>
		  </td>
		</tr>
		<?php $i++; } ?> 
	</tbody>
                            </table>
                        </div>
                    </div>
                </div>
			</div>

			<?php base_url('rekammedis/edit/')?>

<!-- //PANGGIL FORM TAMBAH -->
 
<div class="modal fade" id="cetak">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
	  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Cetak Hasil Produksi Telur</h4>
        
      </div>
      <div class="modal-body">
                        <section class="m-t-40">
                            <div class="sttabs tabs-style-linebox">
                                <nav>
                                    <ul>
                                        <li><a href="#section-linebox-1"><span>All</span></a></li>
                                        <li><a href="#section-linebox-2"><span>Per-Kategori</span></a></li>
                                        <li><a href="#section-linebox-3"><span>Per-Periode</span></a></li>
                                        
                                    </ul>
                                </nav>
                                <div class="content-wrap text-center">
                                    <section id="section-linebox-1">
									<a href="<?php echo base_url('admin/laporan/peternakan') ?>" type="submit" class="btn btn-primary">
        <i class="fa fa-save"></i> Cetak Data Hasil Produksi Keseluruhan
        </a>
                                    </section>
									
                                    <section id="section-linebox-2">
									<?php
									echo form_open_multipart(base_url('admin/laporan/cetakkategori'));
 ?>
									<div class="col-sm-12">
                    <select class="selectpicker m-b-20 m-r-10" id="cetakkategori" name="cetakkategori" data-style="btn-info" width="100%">
                        <option data-tokens="Kualitas Telur Baik" value="Kualitas Telur Baik">Kualitas Telur Baik</option>
                        <option data-tokens="Kualitas Telur Busuk" value="Kualitas Telur Busuk">Kualitas Telur Busuk</option>
					</select>
					<div class="checkbox checkbox-info checkbox-circle" style="margin-right:50px; margin-top:-10px">
                        <input id="checkbox8" type="checkbox" name="ceklis" value="ceklis" onclick="toggle('.kategoriperiode', this)">
                        <label for="checkbox8"> Berdasarkan Periode? </label>
					</div>
					<div class="example kategoriperiode">
                                    <!-- <h5 class="box-title m-t-30">Date Range picker</h5>
                                    <p class="text-muted m-b-20">just add id <code>#date-range</code> to create it.</p> -->
                                    <div class="input-daterange input-group" id="date-range">
                                        <input type="text" class="form-control" name="start" id="tglawal" /> <span class="input-group-addon bg-info b-0 text-white">to</span>
                                        <input type="text" class="form-control" name="end" id="tglakhir"/> </div>
                                </div>
					<br>
					<button type="submit"  class="btn btn-primary pull-right">
        <i class="fa fa-save"></i> Cetak
        </button>
                </div>
				<?php 
		echo form_close();
	?>

         </section>
		 
	
                                    <section id="section-linebox-3">
									<?php
									echo form_open_multipart(base_url('admin/laporan/cetakperiode'));
 ?>
									<div class="example">
                                    <!-- <h5 class="box-title m-t-30">Date Range picker</h5>
                                    <p class="text-muted m-b-20">just add id <code>#date-range</code> to create it.</p> -->
                                    <div class="input-daterange input-group" id="date-range">
                                        <input type="text" class="form-control" name="start" id="tglawal" /> <span class="input-group-addon bg-info b-0 text-white">to</span>
                                        <input type="text" class="form-control" name="end" id="tglakhir"/> </div>
                                </div>
								<br>
								<button type="submit"  class="btn pull-right btn-primary">
        <i class="fa fa-save"></i> Cetak
        </button>
		<?php 
		echo form_close();
	?>
									   </section>
									   
                                    
                                </div>
                                <!-- /content -->
                            </div>
                            <!-- /tabs -->
                        </section>

	  


   
 </div>
     
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
     

