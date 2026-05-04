<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function create()
    {
        return view('pendaftaran');
    }

    public function store(Request $request)
    {
        Anggota::create($request->all());

        return back()->with('success', 'Pendaftaran berhasil');
    }
}