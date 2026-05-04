<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<style>
body{
background:#111;
font-family:Arial;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
color:white;
}
.box{
width:420px;
padding:40px;
background:#1e1e1e;
border-radius:20px;
}
input{
width:100%;
padding:12px;
margin:10px 0;
border:none;
border-radius:10px;
background:#000;
color:white;
}
button{
width:100%;
padding:12px;
border:none;
border-radius:10px;
background:white;
font-weight:bold;
}
</style>
</head>
<body>

<div class="box">
<h1>Pendaftaran Anggota</h1>

<form method="POST" action="/register">
@csrf

<input type="text" name="nama" placeholder="Nama">
<input type="email" name="email" placeholder="Email">
<input type="text" name="jurusan" placeholder="Jurusan">
<input type="password" name="password" placeholder="Password">

<button>DAFTAR</button>

</form>
</div>

</body>
</html>