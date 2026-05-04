<!DOCTYPE html>
<html>
<head>
<title>Data Anggota</title>
<style>
body{
background:#111;
color:white;
font-family:Arial;
padding:40px;
}
table{
width:100%;
border-collapse:collapse;
background:#1e1e1e;
}
th,td{
padding:12px;
border:1px solid #333;
text-align:left;
}
a{
padding:8px 12px;
background:red;
color:white;
text-decoration:none;
border-radius:8px;
}
</style>
</head>
<body>

<h1>Data Anggota</h1>

<table>
<tr>
<th>No</th>
<th>Nama</th>
<th>Email</th>
<th>Jurusan</th>
<th>Aksi</th>
</tr>

@foreach($data as $d)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $d->nama }}</td>
<td>{{ $d->email }}</td>
<td>{{ $d->jurusan }}</td>
<td>
<a href="/admin/anggota/hapus/{{ $d->id }}">Hapus</a>
</td>
</tr>
@endforeach

</table>

<br>
<a href="/admin/dashboard">Kembali</a>

</body>
</html>