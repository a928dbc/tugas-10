<!DOCTYPE html>
<html>
<head>
	<title>tambah data</title>
</head>
<body>
	<a href="index.php">Kembali</a>
	<br/>
	<br/>
	<h3>Tambah data henpon</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama Produk</td>
				<td><input type="text" name="nama_produk"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="text" name="jumlah"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>