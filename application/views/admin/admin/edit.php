					<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4 class="page-title">Data User Peternakan Telur Berbasis IOT</h4> </div>
                <!-- /.col-lg-12 -->
            </div>

<div class="row">
                <div class="col-sm-12">
								<?php 
// Error input Trigger Alert
echo validation_errors('<div class="alert alert-warning">', '</div>');

echo form_open_multipart(base_url('admin/admin/simpan_edit'));
 ?>
                    <div class="white-box">
										
 <script>   
              $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
          </script>
          <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
                        <h3 class="box-title m-b-0">Form Data User</h3>
                        <div id="exampleValidator" class="wizard">
                                <form id="validation" class="form-horizontal">
																<?php foreach($tampil as $tampil) { ?>
                                <div class="wizard-content">
                                    <div class="wizard-pane active" role="tabpanel">
																		<input type="hidden" class="form-control" id="id_user" name="id_user" placeholder="Masukan Id User" value="<?php echo $tampil->id_user ?>" readonly="readonly">
                                        <div class="form-group">
                                            <label class="col-xs-3 control-label">Username</label>
                                            <div class="col-xs-5">
                                                <input type="text" class="form-control" name="username" placeholder="Masukan Username" value="<?php echo $tampil->username ?>" /> </div>
                                        </div>
                                    </div>
                                    <div class="wizard-pane" role="tabpanel">
				                                    <div class="form-group">
                                            <label class="col-xs-3 control-label">Nama Lengkap</label>
                                            <div class="col-xs-5">
                                                <input type="text" class="form-control" name="nama_user" placeholder="Masukan Nama Lengkap" value="<?php echo $tampil->nama_user ?>"/> </div>
                                        </div>
                                    </div>
                                    <div class="wizard-pane" role="tabpanel">
                                        <div class="form-group">
                                            <label class="col-xs-3 control-label">Password</label>
                                            <div class="col-xs-5">
                                                <input type="password" class="form-control" name="password" placeholder="Masukan Password"/> </div>
                                        </div>
																		</div>
																		<div class="wizard-pane" role="tabpanel">
				                                    <div class="form-group">
                                            <label class="col-xs-3 control-label">Facebook</label>
                                            <div class="col-xs-5">
                                                <input type="text" class="form-control" name="fb" placeholder="Masukan Link Facebook" value="<?php echo $tampil->fb ?>"/> </div>
                                        </div>
																		</div>
																		<div class="wizard-pane" role="tabpanel">
				                                    <div class="form-group">
                                            <label class="col-xs-3 control-label">Twitter</label>
                                            <div class="col-xs-5">
                                                <input type="text" class="form-control" name="twitter" placeholder="Masukan Link Twitter" value="<?php echo $tampil->twitter ?>"/> </div>
                                        </div>
																		</div>
																		<div class="wizard-pane" role="tabpanel">
				                                    <div class="form-group">
                                            <label class="col-xs-3 control-label">Intagram</label>
                                            <div class="col-xs-5">
                                                <input type="text" class="form-control" name="ig" placeholder="Masukan Link Instagram" value="<?php echo $tampil->ig ?>"/> </div>
                                        </div>
																		</div>
																		
																		<div class="wizard-pane" role="tabpanel">
				                                    <div class="form-group">
                                            <label class="col-xs-3 control-label">Hak Akses Level</label>
                                            <div class="col-xs-5">
																						<select class="form-control" name="id_level" id="id_level" value="<?php echo $tampil->id_level ?>">
                    <?php foreach($level as $level) { ?>
                    <option value="<?php echo $level->id_level ?>" <?php if($level->id_level==$tampil->id_level){echo "selected";} ?>><?php echo $level->id_level." - ".$level->nama_level ?></option>
                    <?php } ?>
                  </select>
																					 </div>
																				</div>
																		</div>	
																		<div class="wizard-pane" role="tabpanel">
				                                    <div class="form-group">
                                            <label class="col-xs-3 control-label">Foto</label>
                                            <div class="col-xs-5">
                                                <input type="file" class="form-control" id="filefoto" name="filefoto" value="<?php echo $tampil->foto ?>"/> </div>
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
