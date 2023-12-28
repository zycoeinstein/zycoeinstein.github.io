<!DOCTYPE html>
<html>
<head>
	<title>ZyCar</title>
</head>
<body>

	<h2>PRODUCT ZYCAR</h2>
	<br/>
	<a href="crud/tambah.php">+ TAMBAH PRODUCT</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Tipe</th>
			<th>Harga</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'crud/koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from produk");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['tipe']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td>
					<a href="crud/edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="crud/hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>