<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>
 
	<a href="/surat"> Kembali</a>
	
	<br/>
	<br/>
 
        <form action="/surat/store" method="post">
            {{ csrf_field() }}
            Nomor <input type="text" name="nomor" required="required"> <br/>
            tanggal <input type="date" name="tanggal" required="required"> <br/>
            judul <input type="text" name="judul" required="required"> <br/>
            {{-- Alamat <textarea name="alamat" required="required"></textarea> <br/> --}}
            <input type="submit" value="Simpan Data">
        </form>
    
</body>
</html>