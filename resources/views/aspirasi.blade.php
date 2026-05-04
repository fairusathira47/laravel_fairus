<h1>Aspirasi</h1>

<form method="POST" action="/aspirasi">
@csrf
<input name="nama" placeholder="Nama"><br>
<textarea name="isi"></textarea><br>
<button>Kirim</button>
</form>