			<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4 class="page-title">Konfigurasi Web Peternakan Telur Berbasis IOT</h4> </div>
                <!-- /.col-lg-12 -->
            </div>

<div class="row">
                <div class="col-sm-12">
								<?php 
// Error input Trigger Alert
echo validation_errors('<div class="alert alert-warning">', '</div>');

echo form_open_multipart(base_url('admin/profil/edit_data'));
 ?>
                    <div class="white-box">
										
 <script>   
              $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
          </script>
          <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
                        <h3 class="box-title m-b-0">Ubah Konfigurasi Web Profil</h3>
                        <div id="exampleValidator" class="wizard">
                                <form id="validation" class="form-horizontal">
																<?php foreach($tampil as $tampil) { ?>
                                <div class="wizard-content">
                                    <div class="wizard-pane active" role="tabpanel">
																		<input type="hidden" class="form-control" id="id_profil" name="id_profil" placeholder="Masukan Id Profil" value="<?php echo $tampil->id_profil ?>" readonly="readonly">
                                        <div class="form-group">
                                            <label class="col-xs-3 control-label">Nama Peternakan</label>
                                            <div class="col-xs-5">
                                                <input type="text" class="form-control" name="nama_restoran" placeholder="Masukan Nama Peternakan" value="<?php echo $tampil->nama_restoran ?>" /> </div>
                                        </div>
                                    </div>
                                    <div class="wizard-pane" role="tabpanel">
				                                    <div class="form-group">
                                            <label class="col-xs-3 control-label">Alamat Peternakan</label>
                                            <div class="col-xs-5">
                                                <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat Lengkap" value="<?php echo $tampil->alamat ?>"/> </div>
                                        </div>
                                    </div>
                                    <div class="wizard-pane" role="tabpanel">
                                        <div class="form-group">
                                            <label class="col-xs-3 control-label">Google Maps</label>
                                            <div class="col-xs-5">
                                                <input type="text" class="form-control" name="g_maps" placeholder="Masukan Link Google Maps Peternakan" value="<?php echo $tampil->g_maps ?>"/> </div>
                                        </div>
																		</div>
																		<div class="wizard-pane" role="tabpanel">
				                                    <div class="form-group">
                                            <label class="col-xs-3 control-label">No Telepon</label>
                                            <div class="col-xs-5">
                                                <input type="text" class="form-control" name="no_telp" placeholder="Masukan Nomor Telepon" value="<?php echo $tampil->no_telp ?>"/> </div>
                                        </div>
																		</div>
																		<div class="wizard-pane" role="tabpanel">
				                                    <div class="form-group">
                                            <label class="col-xs-3 control-label">Email</label>
                                            <div class="col-xs-5">
                                                <input type="email" class="form-control" name="twitter" placeholder="Masukan Email Peternakan" value="<?php echo $tampil->email ?>"/> </div>
                                        </div>
																		</div>
																		
																		<div class="wizard-pane" role="tabpanel">
				                                    <div class="form-group">
                                            <label class="col-xs-3 control-label">Logo Peternakan</label>
                                            <div class="col-xs-5">
                                                <input type="file" class="form-control" id="filefoto" name="filefoto" value="<?php echo $tampil->logo ?>"/> </div>
                                        </div>
																		</div>
																		<div class="wizard-pane" role="tabpanel">
				                                    <div class="form-group">
                                            <label class="col-xs-3 control-label">Tentang Peternakan</label>
                                            <div class="col-xs-5">
																						<div class="summernote">
																						<?php echo $tampil->tentang ?> </div>
                                        </div>
																		</div>
																		
																		<button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Ubah</button>
                                </div>
														</form>
										<?php } ?>
                        </div>
										</div>
										<?php 
echo form_close();
	?>
	
                </div>
            </div>
