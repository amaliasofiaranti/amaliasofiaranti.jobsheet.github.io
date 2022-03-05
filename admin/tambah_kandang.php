<!DOCTYPE html>
<html>
<head>
  <title>Tambah Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
</head>
<body>
<div class="container">
	<h2>Kondisi kandang</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<div class="panel panel-success">
    <div class="panel-heading">TAMBAH DATA KONDISI KANDANG</div>
    <div class="panel-body">
	<form method="post" action="tambah_kandang_aksi.php">
		<table>
			<tr>			
				<td>Nama Peternak</td>
				<td><input type="text" name="kd_peternak"></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="tgl"></td>
			</tr>
            <tr>			
				<td>Waktu</td>
				<td><input type="time" name="waktu"></td>
			</tr>
            <tr>
				<td>suhu 1</td>
				<td><input type="number" name="suhu_1"></td>
			</tr>
            <tr>
				<td>kelembapan 1</td>
				<td><input type="number" name="kelembapan_1"></td>
			</tr>
            <tr>
				<td>suhu 2</td>
				<td><input type="number" name="suhu_2"></td>
			</tr>
            <tr>
				<td>kelembapan 2</td>
				<td><input type="number" name="kelembapan_2"></td>
			</tr>
            <tr>
				<td>suhu 3</td>
				<td><input type="number" name="suhu_3"></td>
			</tr>
            <tr>
				<td>kelembapan 3</td>
				<td><input type="number" name="kelembapan_3"></td>
			</tr>
			<tr>
				<td>Jumlah Ayam</td>
				<td><input type="number" name="jml_ayam"></td>
			</tr>
			<tr>
				<td>Foto Ayam</td>
				<td><input type="text" name="foto_ayam"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</div></div>
</body>
</html>