<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
body{
background:#0f0f0f;
font-family:Arial;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
color:white;
}
.box{
width:380px;
padding:40px;
background:#1b1b1b;
border-radius:20px;
box-shadow:0 0 30px black;
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
button{
width:100%;
padding:12px;
border:none;
border-radius:10px;
background:white;
font-weight:bold;
}
a{
color:white;
text-decoration:none;
}
</style>
</head>
<body>

<div class="box">
<h1>Login Himpunan</h1>

<form method="POST" action="/login">
@csrf
<input type="email" name="email" placeholder="Email">
<input type="password" name="password" placeholder="Password">
<button>LOGIN</button>
</form>

<br>
<a href="/register">Daftar Anggota</a>

</div>

</body>
</html>