<h1>Form Pendaftaran HMIT</h1>

<form method="POST" action="/pendaftaran">
@csrf
<input name="nama" placeholder="Nama"><br>
<input name="nim" placeholder="NIM"><br>
<input name="email" placeholder="Email"><br>
<input name="prodi" placeholder="Prodi"><br>
<textarea name="alasan"></textarea><br>
<button>Daftar</button>
</form>