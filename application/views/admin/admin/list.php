<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4 class="page-title">Data User Peternakan Telur Berbasis IOT</h4> </div>
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
						<a href="<?php echo base_url('admin/admin/tambah') ?>" class="btn btn-success btn-lg">
							<i class="fa fa-plus"></i> Tambah Admin
						</a>
						</p>
                        <div class="table-responsive">
                            <table id="example23" class="display nowrap" cellspacing="0" width="100%">
							<thead>
							<tr>
								<th>NO</th>
								<th>USERNAME</th>
								<th>NAMA</th>
								<th>HAK AKSES</th>
								<th>AKSI</th>
							</tr>
							</thead>
                                
                                <tbody>
								<?php $i = 1; foreach($admin as $admin) { ?>
								<tr>
								<td><?php echo $i ?></td>
								<td><?php echo $admin->username ?></td>
								<td><?php echo $admin->nama_user ?></td>
								<td><?php echo $admin->nama_level ?></td>
								<td>
									<a href="<?php echo base_url('admin/admin/edit/').$admin->id_user ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
									<a href="<?php echo base_url('admin/admin/hapus/').$admin->id_user ?>" class="btn btn-danger btn-xs" onclick="validasihapus()" ><i class="fa fa-trash-o"></i> Hapus</a>
								</td>
								</tr>
								<?php $i++; } ?> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
			</div>
