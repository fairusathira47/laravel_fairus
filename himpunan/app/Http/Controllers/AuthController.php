<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function registerForm()
    {
        return view('register');
    }

    public function register(Request $r)
    {
        User::create([
            'nama' => $r->nama,
            'email' => $r->email,
            'password' => $r->password,
            'role' => 'anggota',
            'jurusan' => $r->jurusan
        ]);

        return redirect('/');
    }

    public function login(Request $r)
    {
        $u = User::where('email',$r->email)->first();

        if($u && Hash::check($r->password,$u->password))
        {
            if($u->role=='admin')
            {
                session(['admin_id'=>$u->id]);
                return redirect('/admin/dashboard');
            }
            else
            {
                return redirect('/anggota/dashboard')
                ->cookie('anggota_id',$u->id,60);
            }
        }

        return back();
    }

    public function logout()
    {
        session()->flush();

        return redirect('/')
        ->withCookie(cookie()->forget('anggota_id'));
    }
}