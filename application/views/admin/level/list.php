	  <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4 class="page-title">Data Level Hak Akses level Berbasis IOT</h4> </div>
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
						<a href="<?php echo base_url('admin/level/tambah') ?>" class="btn btn-success btn-lg">
							<i class="fa fa-plus"></i> Tambah Hak Akses Level
						</a>
						</p>
                        <div class="table-responsive">
                            <table id="example23" class="display nowrap" cellspacing="0" width="100%">
							<thead>
		<tr>
		  <th>NO</th>
		  <th>Kode Level</th>
		  <th>Nama Level</th>
		  <th>AKSI</th>
		</tr>
	</thead>
	<tbody>
		<?php $i = 1; foreach($level as $level) { ?>
		<tr>
		  <td><?php echo $i ?></td>
		  <td><?php echo $level->id_level ?></td>
		  <td><?php echo $level->nama_level ?></td>
		  <td>
		  	<a href="<?php echo base_url('admin/level/edit/').$level->id_level ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
		  	<a href="<?php echo base_url('admin/level/hapus/').$level->id_level ?>" class="btn btn-danger btn-xs" onclick="validasihapus()"><i class="fa fa-trash-o"></i> Hapus</a>
		  </td>
		</tr>
		<?php $i++; } ?> 
	</tbody>
                            </table>
                        </div>
                    </div>
                </div>
			</div>
