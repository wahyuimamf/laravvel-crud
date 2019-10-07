<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD LARAVEL</title>
</head>
<body>
<h1>HELLO WORLD!!</h1>
<table style="width:100%">
<tr>
    <th>NAMA LENGKAP</th>
    <th>NIM</th>
    <th>Alamat</th>
    <th>Email</th>
</tr>
@foreach($data_mahasiswa as $mahasiswa)
<tr>
    <td>{{$mahasiswa->nama_lengkap}}</td>
    <td>{{$mahasiswa->nim}}</td>
    <td>{{$mahasiswa->alamat}}</td>
    <td>{{$mahasiswa->email}}</td>
</tr>
@endforeach
</table>

<table>
<form action="/mahasiswa/create" method="POST">
{{csrf_field()}}
    <tr>
        <td>Nama Lengkap</td>
        <td><INPUT type="text" name="nama_lengkap"/></td>
    </tr><br>
    <tr>
        <td>NIM</td>
        <td><INPUT type="text" name="nim"/></td>
    </tr><br>
    <tr>
        <td>Alamat</td>
        <td><INPUT type="text" name="alamat"/></td>
    </tr><br>
    <tr>
        <td>Email</td>
        <td><INPUT type="text" name="email"/></td>
    </tr><br>
<tr>
    <td></td>
    <td><button>TAMBAH DATA</button></td>
</tr>
</form>
</table>
@if(session('Sukses'))
<div>Data Berhasil disimpan
{{session('Sukses')}};
</div>
@endif
</body>
</html>

<style>
        h1, h2 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
        }

        table,
        th,
        td {
            
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
            text-align: center;
        }
    </style>
