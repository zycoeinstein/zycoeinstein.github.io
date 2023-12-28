<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>

	<h2>ADD PRODUCT ZYCAR</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Tambah Produk</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Tipe</td>
				<td><input type="text" name="tipe"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>