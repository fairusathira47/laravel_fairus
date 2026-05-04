<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function dashboard()
    {
        return view('anggota.dashboard');
    }

    public function profile(Request $r)
    {
        $u = User::find($r->cookie('anggota_id'));
        return view('anggota.profile', compact('u'));
    }

    public function updateProfile(Request $r)
    {
        User::find($r->cookie('anggota_id'))->update([
            'nama' => $r->nama,
            'email' => $r->email,
            'jurusan' => $r->jurusan
        ]);

        return back();
    }

    public function aspirasi()
    {
        return view('anggota.aspirasi');
    }

    public function kirim(Request $r)
    {
        Aspirasi::create([
            'user_id' => $r->cookie('anggota_id'),
            'judul' => $r->judul,
            'isi' => $r->isi,
            'status' => 'Pending'
        ]);

        return back();
    }
}