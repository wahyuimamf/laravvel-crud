<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>CRUD LARAVEL</title>
</head>
<body>
        <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h1>DATA MAHASISWA</h1>
                    </div>
<table class="table">
<tr>
    <th>NAMA LENGKAP</th>
    <th>NIM</th>
    <th>Alamat</th>
    <th>Email</th>
    <th>AKSI</th>
</tr>
@foreach($data_mahasiswa as $mahasiswa)
<tr>
    <td>{{$mahasiswa->nama_lengkap}}</td>
    <td>{{$mahasiswa->nim}}</td>
    <td>{{$mahasiswa->alamat}}</td>
    <td>{{$mahasiswa->email}}</td>
  
    <td><a href="/mahasiswa/{{$mahasiswa->id}}/edit">EDIT </a>
    <a href="/mahasiswa/{{$mahasiswa->id}}/delete">Delete </a></td>
   
</tr>
@endforeach
</table>


<div class="col-6">
    <h1>Tambah Data</h1>
</div>
<table class="table">
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
@endif


</body>
</html>
    
