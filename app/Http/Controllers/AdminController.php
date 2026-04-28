<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $anggota = Anggota::all();
        $aspirasi = Aspirasi::all();

        return view('admin', compact('anggota','aspirasi'));
    }

    public function deleteAnggota($id)
    {
        Anggota::findOrFail($id)->delete();
        return back();
    }

    public function deleteAspirasi($id)
    {
        Aspirasi::findOrFail($id)->delete();
        return back();
    }
}