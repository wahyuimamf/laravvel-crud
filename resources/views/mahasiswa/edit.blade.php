<!DOCTYPE html>
<html lang="en">
<head>
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
    </tr>
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
    </tr>
    <tr>
        <td></td>
        <td><button class="btn btn-primary">UPDATE DATA</button></td>
    </tr>
</form>
</table>
        </div>
    </div>
</body>
</html>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif