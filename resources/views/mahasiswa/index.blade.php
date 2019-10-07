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

<button type="button">Tambah data</button>




<style>
        h1 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
        }
table {
    width:100%;
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
