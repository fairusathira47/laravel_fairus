<h1>Admin Panel</h1>

<h2>Data Anggota</h2>
@foreach($anggota as $a)
<p>{{ $a->nama }} - {{ $a->nim }}
<a href="/delete-anggota/{{ $a->id }}">Hapus</a>
</p>
@endforeach

<h2>Data Aspirasi</h2>
@foreach($aspirasi as $a)
<p>{{ $a->nama }} - {{ $a->isi }}
<a href="/delete-aspirasi/{{ $a->id }}">Hapus</a>
</p>
@endforeach