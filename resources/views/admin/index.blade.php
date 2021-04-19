<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>
 
	<a href="/admin/create"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
		</tr>
		@foreach($loket as $p)
		<tr>
			<td>{{ $p->namaloket }}</td>
			<td>{{ $p->deskripsi }}</td>
			<td>
				<a href="/admin/edit/{{ $p->id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>