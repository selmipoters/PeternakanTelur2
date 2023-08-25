<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>NO</th>
			<th>Kode Telur</th>
			<th>Kualitas Telur</th>
			<th>Berat Telur</th>
			<th>Tanggal Masuk</th>
		
		</tr>
		<?php
		$no=1;
		foreach ($peternakan as $ptk): ?>
		
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $ptk->kd_telur ?></td>
			<td><?php echo $ptk->kualitas_telur ?></td>
			<td><?php echo $ptk->berat_telur.' gram' ?></td>
			<td><?php echo $ptk->tanggal_masuk ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
	<script type="text/javascript">
		window.print();
		
	</script>
</body>
</html>
