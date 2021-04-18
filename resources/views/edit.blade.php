<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 
	<h3>Edit Surat</h3>
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($surat as $s)
	<form action="/surat/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $s->id }}"> <br/>
		Nomor <input type="text" required="required" name="nomor" value="{{ $s->nomor }}"> <br/>
		Tanggal <input type="date" required="required" name="tanggal" value="{{ $s->tanggal }}"> <br/>
		Judul <input type="text" required="required" name="judul" value="{{ $s->judul }}"> <br/>
	
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
</body>
</html>