<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $anggota = User::where('role','anggota')->count();
        $aspirasi = Aspirasi::count();

        return view('admin.dashboard', compact('anggota','aspirasi'));
    }

    public function anggota()
    {
        $data = User::where('role','anggota')->get();
        return view('admin.anggota', compact('data'));
    }

    public function hapusAnggota($id)
    {
        User::find($id)->delete();
        return back();
    }

    public function aspirasi()
    {
        $data = Aspirasi::all();
        return view('admin.aspirasi', compact('data'));
    }

    public function hapusAspirasi($id)
    {
        Aspirasi::find($id)->delete();
        return back();
    }

    public function selesai($id)
    {
        Aspirasi::find($id)->update([
            'status' => 'Selesai'
        ]);

        return back();
    }
}