<!DOCTYPE html>

<html>
<head>
<title></title>
</head>

<body>


		<h2> Data Karyawan PT.Sinar Rezeki Ananta</h2>
      <table>
			<thead>
				<tr>
					<th> ID</th>
					<th> ID Karyawan</th>
					<th> Pendapatan (IDR) </th>
					<th> Potongan (IDR)</th>
					<th> Gaji Bersih(IDR)</th>
					<th> ID User Input</th>


				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($gaji as $pgj) {
				?>
				<tr>
					<td><?php echo $pgj->id_t; ?></td>
					<td><?php echo $pgj->id_karyawan; ?></td>
					<td><?php echo $pgj->pendapatan; ?></td>
					<td><?php echo $pgj->potongan; ?></td>
					<td><?php echo $pgj->gaji_bersih; ?></td>
					<td><?php echo $pgj->id_user_input; ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
</body>
</html>
