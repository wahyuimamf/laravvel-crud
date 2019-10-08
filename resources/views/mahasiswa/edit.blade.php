<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>LARAVEL CRUD</title>
</head>
<body>
        <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h1>DATA MAHASISWA</h1>
                    </div>
<table class="table">
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
    <td><button>UPDATE DATA</button></td>
</tr>
</form>
</table>
                </div>
</body>
</html>