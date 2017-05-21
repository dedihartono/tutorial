<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah</title>
</head>

<body>
	<h3>Form Tambah Barang</h3>
	<form action="<?php echo base_url();?>katalog/simpan3/" method="post">
		<div>
			<label>Nama Barang</label><br/>
			<input type="text" name="nm_katalog">
		</div>
		<div>
			<label>Harga</label><br/>
			<input type="text" name="harga">
		</div>
		<div>
			<label>Keterangan</label><br/>
			<textarea name="keterangan"></textarea>
		</div>
		<div>
			<button type="submit">Simpan</button>
		</div>
	</form>		
</body>
</html>