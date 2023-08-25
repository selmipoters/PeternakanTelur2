<!DOCTYPE html>
<html>
<head>
  <title>Laporan Hasil Produksi Telur Ayam</title>
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/laporan/datatables-bs4/css/dataTables.bootstrap4.css">
</head>
<body>
  <?php 
    $pathL = base_url()."assets/images/logos/icon.png";
    $typeL = pathinfo($pathL, PATHINFO_EXTENSION);
    $dataL = file_get_contents($pathL);
    $base64L = 'data:image/' . $typeL . ';base64,' . base64_encode($dataL);
  ?>
  <table cellspacing="0" cellpadding="0" border="0" width="100%">
    <tr>
      <td align="center" width="10%">
        <img src="<?php echo $base64L; ?>" width="130px">
      </td>

      <td valign="top" colspan="2">
        <p align="center" style="font-size: 25px;font-family: 'Georgia';font-weight: bold;vertical-align: text-top;margin: 0;padding: 0;">Peternakan Telur Berbasis Internet Of Things</p>
  <!--       <p align="center" style="font-size: 9px;font-family: 'Calibri';font-weight: bold;vertical-align: text-top;margin: 0;padding: 0;">NPSN : 20231685 / Status : Negeri /Bentuk Pendidikan : SMP / Status Kepemilikan : Pemerintah Daerah</p>
        <p align="center" style="font-size: 16px;font-family: 'Calibri';font-weight: bold;vertical-align: text-top;margin: 2;padding: 2;">Telepon : 021-82483471</p>
        <p align="center" style="font-size: 9px;font-family: 'Calibri';font-weight: bold;vertical-align: text-top;margin: 0;padding: 0;">(SK. Pendirian Sekolah 593.1/Kep.115-Bappeda/III / Tanggal SK Pendirian 2006-03-17 / SK Izin Operasional 421/Kep.286-Disdik/X/2007 / Tanggal SK Izin Operasional : 2007-10-08)</p> -->
        <p align="center" style="font-size: 14px;font-family: 'Calibri';font-weight: bold;vertical-align: text-top;margin: 0;padding: 0;">Kp. Jati Jembatan 1 Kalimalang, RT.007/RW.06, Jatimulya, Tambun Selatan, Kabupaten Bekasi, Jawa Barat 17510</p>
      </td>
    </tr>
  </table>
  <hr width="100%" height="10px">
	<h3 align="center"><u>Laporan Data Hasil Produksi Telur</u></h3>
	<table cellspacing="0" cellpadding="0" border="0" width="100%">
	<tr border="0">
			<th border="0" align ="left" width="30%">Dari Tanggal : <?php echo date('d F Y', strtotime($tglawal)) ?></th>
			<th border="0"></th>
			<th></th>
			<th align="right" width="50%">Sampai Tanggal : <?php echo date('d F Y', strtotime($tglakhir)) ?></th>
			</tr>
	</table>
	<br>
  <div class="row">
	  <table class="table table-striped" width="100%" border="1" cellspacing="0" cellpadding="5">
      <thead>
			
        <tr align="center">
          <th width="1%">No</th>
          <th width="5%">Kode Telur</th>
          <th>Kualitas Telur</th>
          <th>Tanggal Masuk</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $no = 1;
          foreach($peternakan1 as $row){
        ?>
            <tr>
              <td align="center"><?php echo $no; ?></td>
              <td align="left"><?php echo $row->kd_telur; ?></td>
              <td align="left"><?php echo $row->kualitas_telur; ?></td>
              <td align="center"><?php echo $row->tanggal_masuk; ?></td>
              
            </tr>
        <?php $no++; 
            }
          ?>
      </tbody>
			
    </table>
    <br>
    <table cellspacing="0" cellpadding="0" border="0" width="100%">
		<tr>
        <td valign="top" width="50%">
      
        </td>

        <td valign="top" width="10%">
        </td>
						
        <td valign="top" style="text-align:right" width="40%">
				Total Hasil Produksi Telur : &nbsp; <?php echo $banyaktelur1 ?>
				<br>
				Total Telur Kualitas Baik : &nbsp; <?php echo $banyakbaik ?>
				<br>
				Total Telur Kualitas Busuk : &nbsp; <?php echo $banyakbusuk ?>
				<br>
				<br>

        </td>
      </tr>

      <tr>
        <td valign="top" width="25%">
       <p align="center" style="font-size: 14px;font-family: 'Times New Rowman';font-weight: bold;vertical-align: text-top;margin:0;padding: 0;">&nbsp;</p>
          <p align="center" style="font-size: 14px;font-family: 'Times New Rowman';font-weight: bold;vertical-align: text-top;margin:0;padding: 0;">Mengetahui,</p>
          <br>
          <br>
          <br>
          <p align="center" style="font-size: 14px;font-family: 'Times New Rowman';font-weight: bold;vertical-align: text-top;margin:0;padding: 0;">.......................................</p>
          <!-- <hr  width="100%" height="100px"> -->
          <!-- <p align="center" style="font-size: 14px;font-family: 'Times New Rowman';font-weight: bold;vertical-align: text-top;margin:0;padding: 0;">NIK: ......................</p> -->
        </td>

        <td>
          &nbsp;
        </td>
						
        <td valign="top"  width="25%">
          <p align="center" style="font-size: 14px;font-family: 'Times New Rowman';font-weight: bold;vertical-align: text-top;margin:0;padding: 0;">Bekasi, <?php echo date("d-m-Y") ?></p>
          <p align="center" style="font-size: 14px;font-family: 'Times New Rowman';font-weight: bold;vertical-align: text-top;margin:0;padding: 0;">Menyetujui,</p>
          <br>
          <br>
          <br>
<p align="center" style="font-size: 14px;font-family: 'Times New Rowman';font-weight: bold;vertical-align: text-top;margin:0;padding: 0;">.......................................</p>
          <!-- <hr  width="100%" height="100px"> -->
          <!-- <p align="center" style="font-size: 14px;font-family: 'Times New Rowman';font-weight: bold;vertical-align: text-top;margin:0;padding: 0;">NIK: ......................</p> -->
        </td>
      </tr>
			
    </table>
	 </div>


<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/laporan/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>assets/laporan/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assets/laporan/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/laporan/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/laporan/js/demo.js"></script>
<!-- page script -->

</body>
</html>
