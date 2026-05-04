<!DOCTYPE html>
<html>
<head>
<title>Data Aspirasi</title>
<style>
body{
background:#0f0f0f;
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
}
a{
padding:8px 12px;
border-radius:8px;
text-decoration:none;
color:white;
margin-right:5px;
}
.hapus{background:red;}
.ok{background:green;}
</style>
</head>
<body>

<h1>Data Aspirasi</h1>

<table>
<tr>
<th>No</th>
<th>User ID</th>
<th>Judul</th>
<th>Isi</th>
<th>Status</th>
<th>Aksi</th>
</tr>

@foreach($data as $d)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $d->user_id }}</td>
<td>{{ $d->judul }}</td>
<td>{{ $d->isi }}</td>
<td>{{ $d->status }}</td>
<td>
<a class="ok" href="/admin/aspirasi/selesai/{{ $d->id }}">Selesai</a>
<a class="hapus" href="/admin/aspirasi/hapus/{{ $d->id }}">Hapus</a>
</td>
</tr>
@endforeach

</table>

<br>
<a href="/admin/dashboard">Kembali</a>

</body>
</html>