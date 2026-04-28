<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function create()
    {
        return view('aspirasi');
    }

    public function store(Request $request)
    {
        Aspirasi::create($request->all());

        return back()->with('success', 'Aspirasi terkirim');
    }
}