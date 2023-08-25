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

echo form_open_multipart(base_url('admin/admin/simpan_data'));
 ?>
                    <div class="white-box">
										
 <script>   
              $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
          </script>
          <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
                        <h3 class="box-title m-b-0">Form Data User</h3>
                        <div id="exampleValidator" class="wizard">
                            
                            <form id="validation" class="form-horizontal">
                                <div class="wizard-content">
                                    <div class="wizard-pane active" role="tabpanel">
																		<input type="hidden" class="form-control" id="id_user" name="id_user" placeholder="Masukan Id User" value="<?php echo $notis ?>" readonly="readonly">
                                        <div class="form-group">
                                            <label class="col-xs-3 control-label">Username</label>
                                            <div class="col-xs-5">
                                                <input type="text" class="form-control" name="username" placeholder="Masukan Username"/> </div>
                                        </div>
                                    </div>
                                    <div class="wizard-pane" role="tabpanel">
				                                    <div class="form-group">
                                            <label class="col-xs-3 control-label">Nama Lengkap</label>
                                            <div class="col-xs-5">
                                                <input type="text" class="form-control" name="nama_user" placeholder="Masukan Nama Lengkap"/> </div>
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
                                                <input type="text" class="form-control" name="fb" placeholder="Masukan Link Facebook"/> </div>
                                        </div>
																		</div>
																		<div class="wizard-pane" role="tabpanel">
				                                    <div class="form-group">
                                            <label class="col-xs-3 control-label">Twitter</label>
                                            <div class="col-xs-5">
                                                <input type="text" class="form-control" name="twitter" placeholder="Masukan Link Twitter"/> </div>
                                        </div>
																		</div>
																		<div class="wizard-pane" role="tabpanel">
				                                    <div class="form-group">
                                            <label class="col-xs-3 control-label">Intagram</label>
                                            <div class="col-xs-5">
                                                <input type="text" class="form-control" name="ig" placeholder="Masukan Link Instagram"/> </div>
                                        </div>
																		</div>
																		
																		<div class="wizard-pane" role="tabpanel">
				                                    <div class="form-group">
                                            <label class="col-xs-3 control-label">Hak Akses Level</label>
                                            <div class="col-xs-5">
																						<select class="form-control" name="id_level" id="id_level">
																						<?php foreach($level as $level) { ?>
																						<option value="<?php echo $level->id_level ?>"><?php echo $level->id_level." - ".$level->nama_level ?></option>
																						<?php } ?>
																					</select>
																					 </div>
																				</div>
																		</div>	
																		<div class="wizard-pane" role="tabpanel">
				                                    <div class="form-group">
                                            <label class="col-xs-3 control-label">Foto</label>
                                            <div class="col-xs-5">
                                                <input type="file" class="form-control dropify" id="filefoto" name="filefoto" onchange="return validasiFile()" /> </div>
                                        </div>
																		</div>
																		<button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                </div>
                            </form>
                        </div>
										</div>
										<?php 
echo form_close();
	?>
	
                </div>
            </div>
