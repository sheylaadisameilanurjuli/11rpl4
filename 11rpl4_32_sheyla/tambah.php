<!DOCTYPE html>
<html>
<head>
	<title>TOKO SHEYLA</title>
</head>
<body>
 
	<h2>TOKO SHEYLA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH BARANG</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Kode Barang</td>
				<td><input type="text" name="kodeBarang"></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="namaBarang"></td>
			</tr>
			<tr>
				<td>Satuan Barang</td>
				<td><input type="text" name="satuanBarang"></td>
			</tr>
            <tr>
				<td>Stok Barang</td>
				<td><input type="number" name="stokBarang"></td>
			</tr>
            <tr>
				<td>Harga Barang</td>
				<td><input type="number" name="hargaBarang"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>