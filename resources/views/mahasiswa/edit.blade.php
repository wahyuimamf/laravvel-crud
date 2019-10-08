<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL CRUD</title>
</head>
<h1>EDIT DATA MAHASISWA</h1>
<body>
<table>
<form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST">
{{csrf_field()}}
    <tr>
        <td>Nama Lengkap</td>
        <td><INPUT type="text" name="nama_lengkap" value="{{$mahasiswa->nama_lengkap}}" /></td>
    </tr><br>
    <tr>
        <td>NIM</td>
        <td><INPUT type="text" name="nim" value="{{$mahasiswa->nim}}" /></td>
    </tr><br>
    <tr>
        <td>Alamat</td>
        <td><INPUT type="text" name="alamat" value="{{$mahasiswa->alamat}}"/></td>
    </tr><br>
    <tr>
        <td>Email</td>
        <td><INPUT type="text" name="email" value="{{$mahasiswa->email}}"/></td>
    </tr><br>
<tr>
    <td></td>
    <td><button>TAMBAH DATA</button></td>
</tr>
</form>
</table>

</body>
</html>