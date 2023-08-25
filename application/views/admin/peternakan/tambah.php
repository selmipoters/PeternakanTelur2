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

echo form_open_multipart(base_url('admin/peternakan/simpan_data'));
 ?>
                    <div class="white-box">
										
 <script>   
              $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
          </script>
          <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
                        <h3 class="box-title m-b-0">Form Data Peternakan</h3>
                        <div id="exampleValidator" class="wizard">
                            
                            <form id="validation" class="form-horizontal">
                                <div class="wizard-content">
                                    <div class="wizard-pane active" role="tabpanel">
																	   <div class="form-group">
                                            <label class="col-xs-3 control-label">Kode Telur</label>
                                            <div class="col-xs-5">
                                                <input type="text" class="form-control" name="kd_telur" placeholder="Masukan Kode Telur" value="<?php echo $notis ?>" readonly="readonly"/> </div>
                                        </div>
                                    </div>
                                    <div class="wizard-pane" role="tabpanel">
				                                    <div class="form-group">
                                            <label class="col-xs-3 control-label">Kualitas Telur</label>
                                            <div class="col-xs-5">
																						<select class="form-control" name="kualitas_telur" id="kualitas_telur">
																						<option value="Kualitas Telur Baik">Kualitas Telur Baik</option>
																						<option value="Kualitas Telur Busuk">Kualitas Telur Busuk</option>
																					</select>
                                        </div>
                                    </div>
                                    
																		
																		<div class="wizard-pane" role="tabpanel">
				                                    <div class="form-group">
                                            <label class="col-xs-3 control-label">Tanggal Masuk</label>
                                            <div class="col-xs-5">
																						<input class="form-control" type="datetime-local" value="2020-06-25T13:45:00" id="example-datetime-local-input">
                                        </div>
																		</div>
																		
																		<button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                </div>
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
