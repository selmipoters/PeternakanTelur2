
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

echo form_open_multipart(base_url('admin/peternakan/simpan_edit'));
 ?>
                    <div class="white-box">
										
 <script>   
              $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
          </script>
          <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
                        <h3 class="box-title m-b-0">Ubah Data Peternakan</h3>
                        <div id="exampleValidator" class="wizard">
												<?php foreach($tampil as $tampil) { ?>
                            <form id="validation" class="form-horizontal">
                                <div class="wizard-content">
                                    <div class="wizard-pane active" role="tabpanel">
																	   <div class="form-group">
                                            <label class="col-xs-3 control-label">Kode Telur</label>
                                            <div class="col-xs-5">
                                                <input type="text" class="form-control" name="kd_telur" placeholder="Masukan Kode Telur" value="<?php echo $tampil->kd_telur ?>" readonly="readonly"/> </div>
                                        </div>
                                    </div>
                                    <div class="wizard-pane" role="tabpanel">
				                                    <div class="form-group">
                                            <label class="col-xs-3 control-label">Kualitas Telur</label>
                                            <div class="col-xs-5">
																						<select class="form-control" name="kualitas_telur" id="kualitas_telur" value="<?php echo $tampil->kualitas_telur ?>">
										<option value="<?php echo $tampil->kualitas_telur ?>" <?php if($tampil->kualitas_telur=="Kualitas Telur Baik"){echo "selected";} ?>>Kualitas Telur Baik</option>
										<option value="Kualitas Telur Baik">Kualitas Telur Baik</option>
										<option value="Kualitas Telur Busuk">Kualitas Telur Busuk</option>
                  </select>
                                        </div>
                                    </div>
                                    
																	
																	
																		
																		<button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Ubah</button>
																</div>
																<?php } ?>
                            </form>
                        </div>
										</div>
									

		</div>
		</div>
		</div>
                </div>
	
		<?php 
		echo form_close();
	?>
