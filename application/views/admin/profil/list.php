	  <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4 class="page-title">Konfigurasi Web Peternakan Telur Berbasis IOT</h4> </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
					<script>   
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
</script>
          <div id="notifications"><?php echo $this->session->flashdata('msg_list'); ?></div> 
                        <div class="table-responsive">
                            <table id="example23" class="display nowrap" cellspacing="0" width="100%">
							<thead>
		<tr>
		  <th>NO</th>
		  <th>ID Profil</th>
		  <th>Nama Perusahaan</th>
		  <th>No_Telp</th>
		  <th>Email</th>
		  <th>AKSI</th>
		</tr>
	</thead>
	<tbody>
		<?php $i = 1; foreach($profil as $profil) { ?>
		<tr>
		  <td><?php echo $i ?></td>
		  <td><?php echo $profil->id_profil ?></td>
		  <td><?php echo $profil->nama_restoran ?></td>
		  <td><?php echo $profil->no_telp ?></td>
		  <td><?php echo $profil->email ?></td>
		  <td>
		  	<a href="<?php echo base_url('admin/profil/edit/').$profil->id_profil ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
		  	<a href="<?php echo base_url('admin/profil/hapus/').$profil->id_profil ?>" class="btn btn-danger btn-xs" onclick="validasihapus()"><i class="fa fa-trash-o"></i> Hapus</a>
		  </td>
		</tr>
		<?php $i++; } ?> 
	</tbody>
                            </table>
                        </div>
                    </div>
                </div>
			</div>
