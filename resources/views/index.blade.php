<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
	
	<title>Document</title>
</head>
<body>
<div class="container">

	
	<h2 class="text-center text-primary">Data Surat</h2>
	
	{{-- <a href="/surat/tambah"> + Tambah Surat Baru</a> --}}
	<a href="/surat/tambah" class="btn btn-primary">tambah</a>
	
	<br/>
	<br/>
 
	<table border="1" class="table table-success table-striped">
		<tr>
			{{-- <th scope="row">{{$nomor++}}</th> --}}
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
				<a href="/surat/edit/{{ $s->id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/surat/hapus/{{ $s->id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</div>
	
</body>
</html>
