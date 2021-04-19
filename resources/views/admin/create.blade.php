<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>
 
	<a href="/crudloket"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/admin/store" method="POST">
		@csrf
		Nama Loket<input type="text" name="namaloket" required="required"> <br/>
		Deskripsi <input type="text" name="deskripsi" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>