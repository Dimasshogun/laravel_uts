<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
	<h3>Data Surat</h3>
 
	<a href="/surat/tambah"> + Tambah Surat Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nomor Surat</th>
			<th>Tanggal Surat</th>
			<th>Judul Surat</th>
            <th>Aksi</th>
		</tr>
		@foreach($surat as $s)
		<tr>
			<td>{{ $s->nomor }}</td>
			<td>{{ $s->tanggal }}</td>
			<td>{{ $s->judul }}</td>
			<td>
				<a href="/surat/edit/{{ $s->id }}">Edit</a>
				|
				<a href="/surat/hapus/{{ $s->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    
</body>
</html>