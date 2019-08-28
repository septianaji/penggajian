<!DOCTYPE html>

<html>
<head>
  <title></title>
</head>

<body>

		<h2 > Data Jabatan PT.Sinar Rezeki Ananta</h2>
		<table>
			<thead>
				<tr>
					<th> ID</th>
					<th> Nama Jabatan </th>
					<th> Aktif</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($jabatan as $jbt) {
				?>
				<tr>
					<td><?php echo $jbt->id; ?></td>
					<td><?php echo $jbt->nama_jabatan; ?></td>
					<td><?php echo $jbt->aktif; ?></td>

				</tr>
        <?php } ?>
			</tbody>
		</table>


  </body>
  </html>
