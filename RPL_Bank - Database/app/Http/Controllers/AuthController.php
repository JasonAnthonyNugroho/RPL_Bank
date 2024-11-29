<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AkunAdminBank; // Model untuk tabel akun_admin_bank
use App\Models\AkunAdminInstansi;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function ceklogin(Request $request)
{
    $request->validate([
        'role' => 'required|string',
        'username_admin' => $request->role === 'admin_bank' ? 'required|string' : 'nullable|string',
        'password_admin' => $request->role === 'admin_bank' ? 'required|string' : 'nullable|string',
        'username_instansi' => $request->role === 'admin_instansi' ? 'required|string' : 'nullable|string',
        'password_instansi' => $request->role === 'admin_instansi' ? 'required|string' : 'nullable|string',
        ]);

    if ($request->role === 'admin_bank') {
        // Cek login untuk admin bank
        $adminBank = AkunAdminBank::where('username_admin', $request->username_admin)->first();

        if ($adminBank && Hash::check($request->password_admin, $adminBank->password_admin)) {
            Auth::guard('admin_bank')->login($adminBank);
            return redirect()->route('HomeAdmin'); // Arahkan ke halaman admin bank
        } else{
            return redirect()->back()->with('error', 'Login gagal! Periksa username atau password Anda.');
        }
    } elseif ($request->role === 'admin_instansi') {
        // Cek login untuk admin instansi
        $adminInstansi = AkunAdminInstansi::where('username_instansi', $request->username_instansi)->first();

        if (!$adminInstansi) {
            return redirect()->back()->with('alert', 'Admin Instansi tidak ditemukan');
        }

        if (!Hash::check($request->password_instansi, $adminInstansi->password_instansi)) {
            return redirect()->back()->with('alert', 'Password salah untuk Admin Instansi');
        }

        Auth::guard('admin_instansi')->login($adminInstansi);
        return redirect()->route('HomePendi');
    }

    return redirect()->back()->with('alert', 'Role tidak valid');
}

    public function ceklogout()
    {
        Session::forget('isLoggedIn');
        return redirect()->route('LoginAdmin');
    }
}
