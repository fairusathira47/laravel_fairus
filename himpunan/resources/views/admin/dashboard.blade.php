<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<style>
body{
background:#0f0f0f;
color:white;
font-family:Arial;
padding:40px;
}
.card{
background:#1c1c1c;
padding:25px;
border-radius:20px;
margin-bottom:20px;
}
a{
display:inline-block;
margin-right:10px;
padding:10px 18px;
background:white;
color:black;
text-decoration:none;
border-radius:10px;
font-weight:bold;
}
</style>
</head>
<body>

<h1>Dashboard Admin</h1>

<div class="card">
<h2>Total Anggota: {{ $anggota }}</h2>
<h2>Total Aspirasi: {{ $aspirasi }}</h2>
</div>

<a href="/admin/anggota">Kelola Anggota</a>
<a href="/admin/aspirasi">Kelola Aspirasi</a>
<a href="/logout">Logout</a>

</body>
</html>