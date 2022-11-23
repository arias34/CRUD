<html>
    <head>
        <meta charset="uts-8">
        <meta name="viewport" content="width=device.width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Read Data</title>
    </head>
<body>
<hr>
<br>
<h2>Data Mahasiswa</h2>
<a href="/create" class="btn btn-success">Tambah Data</a>
<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
    <th>
        NIM
    </th>
    <th>
        Nama
    </th>
    <th>
        Umur
    </th>
    <th>
        Alamat
    </th>
    <th>
        Kota
    </th>
    <th>
        Kelas
    </th>
    <th>
        Jurusan
    </th>
    <th>
        Action
    </th>
    </tr>
</thead>
@foreach ($datanya as $dt)
    <tr>
        <td>{{$dt->nim}}</td>
        <td>{{$dt->nama}}</td>
        <td>{{$dt->umur}}</td>
        <td>{{$dt->alamat}}</td>
        <td>{{$dt->kota}}</td>
        <td>{{$dt->kelas}}</td>
        <td>{{$dt->jurusan}}</td>
        <td> <a href=/delete?nim={{$dt->nim}} class="btn btn-danger" onclick="return confirm('Yakin data mau dihapus?');">Hapus</a>
            <a href=/edit?nim={{$dt->nim}} class="btn btn-primary" onclick="return confirm('Yakin data mau diedit?');">Edit</a>
        </td>
    </tr>
@endforeach
</table>
<hr>
</body>
</html>
