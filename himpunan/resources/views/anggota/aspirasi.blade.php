<!DOCTYPE html>
<html>
<head>
<title>Kirim Aspirasi</title>
<style>
body{
background:#111;
color:white;
font-family:Arial;
padding:40px;
}
.box{
width:500px;
background:#1e1e1e;
padding:30px;
border-radius:20px;
}
input,textarea{
width:100%;
padding:12px;
margin:10px 0;
border:none;
border-radius:10px;
background:#000;
color:white;
}
textarea{
height:140px;
resize:none;
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
<h1>Kanal Aspirasi</h1>

<form method="POST" action="/anggota/aspirasi/kirim">
@csrf

<input type="text" name="judul" placeholder="Judul Aspirasi">

<textarea name="isi" placeholder="Tulis aspirasi anda..."></textarea>

<button type="submit">Kirim Aspirasi</button>

</form>

<a href="/anggota/dashboard">Kembali</a>

</div>

</body>
</html>