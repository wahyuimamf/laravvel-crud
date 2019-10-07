<h1>HELLO WORLD!!</h1>
<table>
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