<!DOCTYPE html>
<html>
<head>
<title>Update Profil</title>
<style>
body{
background:#0f0f0f;
color:white;
font-family:Arial;
padding:40px;
}
.box{
width:420px;
background:#1b1b1b;
padding:30px;
border-radius:20px;
}
input{
width:100%;
padding:12px;
margin:10px 0;
border:none;
border-radius:10px;
background:#111;
color:white;
}
button,a{
padding:10px 16px;
border:none;
border-radius:10px;
text-decoration:none;
font-weight:bold;
}
button{
background:white;
color:black;
}
a{
background:#333;
color:white;
display:inline-block;
margin-top:10px;
}
</style>
</head>
<body>

<div class="box">
<h1>Update Profil</h1>

<form method="POST" action="/anggota/profile/update">
@csrf

<input type="text" name="nama" value="{{ $u->nama }}">
<input type="email" name="email" value="{{ $u->email }}">
<input type="text" name="jurusan" value="{{ $u->jurusan }}">

<button type="submit">Update</button>

</form>

<a href="/anggota/dashboard">Kembali</a>
</div>

</body>
</html>